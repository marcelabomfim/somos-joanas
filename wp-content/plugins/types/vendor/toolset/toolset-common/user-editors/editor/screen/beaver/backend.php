<?php

if( ! class_exists( 'Toolset_User_Editors_Editor_Screen_Abstract', false ) ) {
	require_once( TOOLSET_COMMON_PATH . '/user-editors/editor/screen/abstract.php' );
}

class Toolset_User_Editors_Editor_Screen_Beaver_Backend
	extends Toolset_User_Editors_Editor_Screen_Abstract {

	public function __construct() {
		
		add_action( 'init',												array( $this, 'register_assets' ), 50 );
		add_action( 'admin_enqueue_scripts',							array( $this, 'admin_enqueue_assets' ), 50 );
		
		add_filter( 'toolset_filter_toolset_registered_user_editors',	array( $this, 'register_user_editor' ) );
		add_filter( 'wpv_filter_wpv_layout_template_extra_attributes',	array( $this, 'layout_template_attribute' ), 10, 3 );
		add_action( 'wpv_action_wpv_ct_inline_user_editor_buttons',		array( $this, 'register_inline_editor_action_buttons' ) );
		
		// Post edit page integration
		add_action( 'edit_form_after_title',							array( $this, 'prevent_nested' ) );
		
		add_action( 'wp_ajax_toolset_user_editors_beaver',				array( $this, 'ajax' ) );
	}

	public function isActive() {
		if ( ! $this->set_medium_as_post() ) {
			return false;
		}
		
		$this->action();
		return true;
	}

	private function action() {
		add_action( 'admin_enqueue_scripts', array( $this, 'action_assets' ) );
		$this->medium->setHtmlEditorBackend( array( $this, 'html_output' ) );
		$this->medium->pageReloadAfterBackendSave();
	}

	public function ajax() {
		if ( ! wp_verify_nonce( $_REQUEST['nonce'], 'toolset_user_editors_beaver' ) ) {
			die();
		}

		if( isset( $_REQUEST['post_id'] )
		    && isset( $_REQUEST['template_path'] )
		    && isset( $_REQUEST['preview_domain'] )
		    && isset( $_REQUEST['preview_slug'] )
		) {
			$this->store_template_settings(
				(int) $_REQUEST['post_id'],
				$_REQUEST['template_path'],
				sanitize_text_field( $_REQUEST['preview_domain'] ),
				sanitize_text_field( $_REQUEST['preview_slug'] )
			);
		}

		die( 1 );
	}

	private function store_template_settings( $post_id, $template_path, $preview_domain, $preview_slug ) {
		$settings = array(
			'template_path' => $template_path,
			'preview_domain' => $preview_domain,
			'preview_slug' => $preview_slug
		);

		update_post_meta( $post_id, $this->editor->getOptionName(), $settings );
	}
	
	public function register_assets() {
		
		$toolset_assets_manager = Toolset_Assets_Manager::getInstance();
		
		// Content Template own edit screen assets
		
		$toolset_assets_manager->register_style(
			'toolset-user-editors-beaver-style',
			TOOLSET_COMMON_URL . '/user-editors/editor/screen/beaver/backend.css',
			array(),
			TOOLSET_COMMON_VERSION
		);

		$toolset_assets_manager->register_script(
			'toolset-user-editors-beaver-script',
			TOOLSET_COMMON_URL . '/user-editors/editor/screen/beaver/backend.js',
			array( 'jquery' ),
			TOOLSET_COMMON_VERSION,
			true
		);

		$toolset_assets_manager->localize_script( 
			'toolset-user-editors-beaver-script', 
			'toolset_user_editors_beaver', 
			array(
				'nonce' => wp_create_nonce( 'toolset_user_editors_beaver' ),
				'mediumId' => $this->medium->getId()
			) 
		);
		
		// Content Template as inline object assets
		
		$toolset_assets_manager->register_script(
			'toolset-user-editors-beaver-layout-template-script',
			TOOLSET_COMMON_URL . '/user-editors/editor/screen/beaver/backend_layout_template.js',
			array( 'jquery', 'views-layout-template-js', 'underscore' ),
			TOOLSET_COMMON_VERSION,
			true
		);
		
		$beaver_layout_template_i18n = array(
            'template_editor_url'	=> admin_url( 'admin.php?page=ct-editor' ),
			'template_overlay'		=> array(
										'title'		=> sprintf( __( 'This Content Template uses %1$s', 'wpv-views' ), $this->editor->getName() ),
										'text'		=> sprintf( __( 'To modify this Content Template, go to edit it and launch the %1$s.', 'wpv-views' ), $this->editor->getName() ),
										'button'	=> sprintf( __( 'Edit with %1$s', 'wpv-views' ), $this->editor->getName() ),
										'discard'	=> sprintf( __( 'Stop using %1$s for this Content Template', 'wpv-views' ), $this->editor->getName() )
									),
		);
		$toolset_assets_manager->localize_script( 
			'toolset-user-editors-beaver-layout-template-script', 
			'toolset_user_editors_beaver_layout_template_i18n', 
			$beaver_layout_template_i18n 
		);
		
	}
	
	public function admin_enqueue_assets() {
		$page = toolset_getget( 'page' );
		if ( 
			'views-editor' == $page 
			|| 'view-archives-editor' == $page 
		) {
			
			do_action( 'toolset_enqueue_scripts', array( 'toolset-user-editors-beaver-layout-template-script' ) );
			
		}
	}

	public function action_assets() {
		
		do_action( 'toolset_enqueue_styles',	array( 'toolset-user-editors-beaver-style' ) );
		do_action( 'toolset_enqueue_scripts',	array( 'toolset-user-editors-beaver-script' ) );
		
	}

	protected function getAllowedTemplates() {
		return ;
	}

	private function set_medium_as_post() {
		$medium_id  = $this->medium->getId();

		if( ! $medium_id ) {
			return false;
		}

		$medium_post_object = get_post( $medium_id );
		if( $medium_post_object === null ) {
			return false;
		}

		$this->post = $medium_post_object;

		// beaver uses the global $post
		global $post;
		$post = $this->post;

		return true;
	}
	
	/**
	* Content Template editor output.
	*
	* Displays the Beavr Builder message and button to fire up the frontend editor.
	*
	* @since 2.2
	*/

	public function html_output() {

		if( ! isset( $_GET['ct_id'] ) ) {
			return 'No valid content template id';
		}

		ob_start();
			include_once( dirname( __FILE__ ) . '/backend.phtml' );
			$output = ob_get_contents();
		ob_end_clean();
		
		$admin_url = admin_url( 'admin.php?page=ct-editor&ct_id=' . esc_attr( $_GET['ct_id'] ) );
		$output .= '<p>' 
			. sprintf( 
				__( '%1$sStop using %2$s for this Content Template%3$s', 'wpv-views' ), 
				'<a href="' . esc_url( $admin_url ) . '&ct_editor_choice=basic">',
				$this->editor->getName(),
				'</a>'
			) 
			. '</p>';

		return $output;
	}
	
	public function register_user_editor( $editors ) {
		$editors[ $this->editor->getId() ] = $this->editor->getName();
		return $editors;
	}
	
	/**
	* Set the builder used by a Content Template, if any.
	*
	* On a Content Template used inside a View or WPA loop output, we set which builder it is using
	* so we can link to the CT edit page with the right builder instantiated.
	*
	* @since 2.2.0
	*/
	
	public function layout_template_attribute( $attributes, $content_template, $view_id ) {
		$content_template_has_beaver = ( get_post_meta( $content_template->ID, '_toolset_user_editors_editor_choice', true ) == 'beaver' );
		if ( $content_template_has_beaver ) {
			$attributes['builder'] = $this->editor->getId();
		}
		return $attributes;
	}
	
	/**
	* Display a warning on post edit pages when:
	*   - Beaver Builder is active on that post
	*   - The post is using a Content Template that also has Beaver Builder active
	*
	* @param $post WP_Post object
	*
	* @since 2.2
	*/
	
	public function prevent_nested( $post ) {
		
		$beaver_post_types = FLBuilderModel::get_post_types();
		
		if ( in_array( $post->post_type, $beaver_post_types ) ) {
			$post_has_ct	= get_post_meta( $post->ID, '_views_template', true );
			$ct_has_beaver	= false;
			if ( $post_has_ct ) {
				$ct_has_beaver = ( get_post_meta( $post_has_ct, '_toolset_user_editors_editor_choice', true ) == 'beaver' );
			}
			$post_has_beaver = get_post_meta( $post->ID, '_fl_builder_enabled', true );
			if (
				$ct_has_beaver 
				&& $post_has_beaver
			) {
				$post_type_object = get_post_type_object( $post->post_type );
				$ct_title = get_the_title( $post_has_ct );
				?>
				<div class="toolset-alert toolset-alert-error">
					<p><strong><?php echo sprintf( 
						__( '%1$s %2$s design inside %2$s templates may cause problems', 'wpv-views' ), 
						'<i class="fa fa-exclamation-triangle fa-lg" aria-hidden="true"></i>',
						$this->editor->getName(), 
						$this->editor->getName()
					); ?></strong></p>
					<p>
						<?php echo sprintf(
							__( 'You are using %1$s to design this page, but there is already a template <em>%2$s</em> created by %3$s for %4$s. This may work, but could produce visual glitches. Please consider using %5$s only for the template OR for this page.', 'wpv-views' ),
							$this->editor->getName(),
							$ct_title,
							$this->editor->getName(),
							'<em>' . $post_type_object->labels->name . '</em>',
							$this->editor->getName()
						); ?>
					</p>
					<p>
						<?php echo sprintf(
							__( '%1$sDesigning templates with %2$s%3$s.', 'wpv-views' ),
							'<a href="#" target="_blank">',
							$this->editor->getName(),
							'</a>'
						); ?>
					</p>
				</div>
				<?php
			}
		}
		
	}
	
	public function register_inline_editor_action_buttons( $content_template ) {
		$content_template_has_beaver = ( get_post_meta( $content_template->ID, '_toolset_user_editors_editor_choice', true ) == 'beaver' );
		?>
		<button 
			class="button button-secondary js-wpv-ct-apply-user-editor js-wpv-ct-apply-user-editor-<?php echo esc_attr( $this->editor->getId() ); ?>" 
			data-editor="<?php echo esc_attr( $this->editor->getId() ); ?>" 
			<?php disabled( $content_template_has_beaver );?>
		>
			<?php echo esc_html( $this->editor->getName() ); ?>
		</button>
		<?php
	}
}