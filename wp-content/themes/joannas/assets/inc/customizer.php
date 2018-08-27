<?php

function meupersonalizador($wp_customize){
		// Seção Logo Rodape
		$wp_customize->add_section( 'sec_logo_rodape', array(
			'title'			=> 'Logo Rodape',
			'description'	=> 'Informe a logo do rodape'
		));
		// Imagem 
		$wp_customize->add_setting( 'set_logo_rodape_img', array(
			'default'	=> ''
		));

		$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_logo_rodape_img', array(
			'label'		=> 'Logo do rodape',
			'width'		=> 212,
			'height'	=> 125,
			'section'	=> 'sec_logo_rodape',
			'settings'	=> 'set_logo_rodape_img'
		)));

		// Seção Logo Rodape
		$wp_customize->add_section( 'sec_logo_rodape2', array(
			'title'			=> 'Logo Rodape Dois',
			'description'	=> 'Informe a logo do rodape'
		));
		// Imagem 
		$wp_customize->add_setting( 'set_logo_rodape_img2', array(
			'default'	=> ''
		));

		$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_logo_rodape_img2', array(
			'label'		=> 'Logo do rodape',
			'width'		=> 156,
			'height'	=> 96,
			'section'	=> 'sec_logo_rodape2',
			'settings'	=> 'set_logo_rodape_img2'
		)));
		// Link logo
	

		$wp_customize->add_setting( 'set_logo_rodape_img22', array(
			'type'		=> 'theme_mod',
			'default'	=> ''
		));

		$wp_customize->add_control( 'ctrl_link_logo2', array(
			'label' 	=> 'URL logo',
			'description'	=> 'Digite a URL externa da logo',
			'section'		=> 'sec_logo_rodape2',
			'settings'		=> 'set_logo_rodape_img22',
			'type'			=> 'textarea'
		) );
	
		// Texto Notícias
		$wp_customize->add_section( 'sec_banner', array(
				'title'			=> 'Texto Notícias',
				'description'	=> 'Informe o texto da Página de Notícias'
			));
	
			$wp_customize->add_setting( 'set_banner_texto', array(
				'type'		=> 'theme_mod',
				'default'	=> ''
			));

			$wp_customize->add_control( 'ctrl_banner_texto', array(
				'label' 	=> 'Texto Notícias',
				'description'	=> 'Digite o texto da Página de Notícias',
				'section'		=> 'sec_banner',
				'settings'		=> 'set_banner_texto',
				'type'			=> 'textarea'
			) );
	
	
		// Texto Interno Pesquisa
		/*$wp_customize->add_section( 'sec_pesquisa', array(
				'title'			=> 'Texto Pesquisa',
				'description'	=> 'Informe o texto da Página de Artigo'
			));
	
			$wp_customize->add_setting( 'set_pesquisa_texto2', array(
				'type'		=> 'theme_mod',
				'default'	=> ''
			));

			$wp_customize->add_control( 'ctrl_pesquisa_texto2', array(
				'label' 	=> 'Texto Interno Pesquisa',
				'description'	=> 'Digite o texto do Interno Campo de Pesquisa',
				'section'		=> 'sec_pesquisa',
				'settings'		=> 'set_pesquisa_texto2',
				'type'			=> 'textarea'
			) );*/
	
			
		// Texto Pesquisa
		/*$wp_customize->add_section( 'sec_pesquisa', array(
				'title'			=> 'Texto Pesquisa',
				'description'	=> 'Informe o texto da Página de Artigo'
			));
	
			$wp_customize->add_setting( 'set_pesquisa_texto1', array(
				'type'		=> 'theme_mod',
				'default'	=> ''
			));

			$wp_customize->add_control( 'ctrl_pesquisa_texto1', array(
				'label' 	=> 'Texto Pesquisa',
				'description'	=> 'Digite o texto do Campo de Pesquisa',
				'section'		=> 'sec_pesquisa',
				'settings'		=> 'set_pesquisa_texto1',
				'type'			=> 'textarea'
			) );*/
	
		// Texto Serviços
		/*$wp_customize->add_section( 'sec_servico', array(
				'title'			=> 'Texto Serviços',
				'description'	=> 'Informe o texto da Página de Artigo'
			));
	
			$wp_customize->add_setting( 'set_servico_texto', array(
				'type'		=> 'theme_mod',
				'default'	=> ''
			));

			$wp_customize->add_control( 'ctrl_servico_texto', array(
				'label' 	=> 'Texto Pesquisa',
				'description'	=> 'Digite o texto do Serviços',
				'section'		=> 'sec_servico',
				'settings'		=> 'set_servico_texto',
				'type'			=> 'textarea'
			) );*/
	
		// Texto Serviços Fale Conosco
		/*$wp_customize->add_section( 'sec_servico', array(
				'title'			=> 'Texto Serviços',
				'description'	=> 'Informe o texto da Página de Artigo'
			));
	
			$wp_customize->add_setting( 'set_servico_texto1', array(
				'type'		=> 'theme_mod',
				'default'	=> ''
			));

			$wp_customize->add_control( 'ctrl_servico_texto1', array(
				'label' 	=> 'Título Fale Conosco',
				'description'	=> 'Digite o Título Fale Conosco',
				'section'		=> 'sec_servico',
				'settings'		=> 'set_servico_texto1',
				'type'			=> 'textarea'
			) );
	/*
		// Botão Texto 
			$wp_customize->add_setting( 'set_banner_btn_texto', array(
				'type'		=> 'theme_mod',
				'default'	=> ''
			));

			$wp_customize->add_control( 'ctrl_banner_texto_btn', array(
				'label' 	=> 'Texto do Botão',
				'description'	=> 'Digite o texto do botão',
				'section'		=> 'sec_banner',
				'settings'		=> 'set_banner_btn_texto',
				'type'			=> 'text'
			) );
		// Botão Link
			$wp_customize->add_setting( 'set_banner_btn_link', array(
				'type'		=> 'theme_mod',
				'default'	=> ''
			));

			$wp_customize->add_control( 'ctrl_banner_btn_link', array(
				'label' 	=> 'Link do Botão',
				'description'	=> 'Digite o link do botão',
				'section'		=> 'sec_banner',
				'settings'		=> 'set_banner_btn_link',
				'type'			=> 'text'
			) );

	// Seção de Banner 2
		$wp_customize->add_section( 'sec_banner2', array(
			'title'			=> 'Banner Central',
			'description'	=> 'Informe as informações do banner central'
		));
	
		// Titulo
			$wp_customize->add_setting( 'set_banner2_titulo', array(
				'type'		=> 'theme_mod',
				'default'	=> ''
			));

			$wp_customize->add_control( 'ctrl_banner2_titulo', array(
				'label' 	=> 'Titulo',
				'description'	=> 'Digite o titulo do banner',
				'section'		=> 'sec_banner2',
				'settings'		=> 'set_banner2_titulo',
				'type'			=> 'text'
			) );
	
		// Texto
			$wp_customize->add_setting( 'set_banner2_texto', array(
				'type'		=> 'theme_mod',
				'default'	=> ''
			));

			$wp_customize->add_control( 'ctrl_banner2_texto', array(
				'label' 	=> 'Texto',
				'description'	=> 'Digite o texto do banner',
				'section'		=> 'sec_banner2',
				'settings'		=> 'set_banner2_texto',
				'type'			=> 'textarea'
			) );
	
		
		

	// Seção de Banner 3
		$wp_customize->add_section( 'sec_banner3', array(
			'title'			=> 'Banner Rodapé',
			'description'	=> 'Informe as informações do banner rodapé'
		));
	
		// Texto
			$wp_customize->add_setting( 'set_banner3_texto', array(
				'type'		=> 'theme_mod',
				'default'	=> ''
			));

			$wp_customize->add_control( 'ctrl_banner3_texto', array(
				'label' 	=> 'Texto',
				'description'	=> 'Digite o texto do banner',
				'section'		=> 'sec_banner3',
				'settings'		=> 'set_banner3_texto',
				'type'			=> 'textarea'
			) );
	
		// Botão Texto 
			$wp_customize->add_setting( 'set_banner3_btn_texto', array(
				'type'		=> 'theme_mod',
				'default'	=> ''
			));

			$wp_customize->add_control( 'ctrl_banner3_texto_btn', array(
				'label' 	=> 'Texto do Botão',
				'description'	=> 'Digite o texto do botão',
				'section'		=> 'sec_banner3',
				'settings'		=> 'set_banner3_btn_texto',
				'type'			=> 'text'
			) );
		// Botão Link
			$wp_customize->add_setting( 'set_banner3_btn_link', array(
				'type'		=> 'theme_mod',
				'default'	=> ''
			));

			$wp_customize->add_control( 'ctrl_banner3_btn_link', array(
				'label' 	=> 'Link do Botão',
				'description'	=> 'Digite o link do botão',
				'section'		=> 'sec_banner3',
				'settings'		=> 'set_banner3_btn_link',
				'type'			=> 'text'
			) );
		*/
	
	// Seção Informações do Contato
		$wp_customize->add_section( 'sec_infocontato', array(
			'title'			=> 'Contato',
			'description'	=> 'Informe a endereço, telefone e email.'
		));
		// Slug formulario contato
			/*$wp_customize->add_setting( 'set_infocontato_slug', array(
				'type'		=> 'theme_mod',
				'default'	=> ''
			));

			$wp_customize->add_control( 'ctrl_infocontato_slug', array(
				'label' 	=> 'Shortcode',
				'description'	=> 'Digite o slug',
				'section'		=> 'sec_infocontato',
				'settings'		=> 'set_infocontato_slug',
				'type'			=> 'text'
			) );*/
	
		// Iframe Mapa Endereço
			$wp_customize->add_setting( 'set_infocontato_mapa', array(
				'type'		=> 'theme_mod',
				'default'	=> ''
			));

			$wp_customize->add_control( 'ctrl_infocontato_mapa', array(
				'label' 	=> 'Endereço',
				'description'	=> 'Cole aqui o iframe do mapa',
				'section'		=> 'sec_infocontato',
				'settings'		=> 'set_infocontato_mapa',
				'type'			=> 'textarea'
			) );
	
		// Endereço
			$wp_customize->add_setting( 'set_infocontato_endereco', array(
				'type'		=> 'theme_mod',
				'default'	=> ''
			));

			$wp_customize->add_control( 'ctrl_infocontato_endereco', array(
				'label' 	=> 'Endereço',
				'description'	=> 'Digite o endereço',
				'section'		=> 'sec_infocontato',
				'settings'		=> 'set_infocontato_endereco',
				'type'			=> 'text'
			) );
			
	
	
		// Telefone
			$wp_customize->add_setting( 'set_infocontato_telefone', array(
				'type'		=> 'theme_mod',
				'default'	=> ''
			));

			$wp_customize->add_control( 'ctrl_infocontato_telefone', array(
				'label' 	=> 'Telefone',
				'description'	=> 'Digite o telefone',
				'section'		=> 'sec_infocontato',
				'settings'		=> 'set_infocontato_telefone',
				'type'			=> 'text'
			) );

			// Telefone2
			$wp_customize->add_setting( 'set_infocontato_telefone2', array(
				'type'		=> 'theme_mod',
				'default'	=> ''
			));

			$wp_customize->add_control( 'ctrl_infocontato_telefone2', array(
				'label' 	=> 'Telefone Dois',
				'description'	=> 'Digite o telefone',
				'section'		=> 'sec_infocontato',
				'settings'		=> 'set_infocontato_telefone2',
				'type'			=> 'text'
			) );
	

		// Email
			$wp_customize->add_setting( 'set_infocontato_email', array(
				'type'		=> 'theme_mod',
				'default'	=> ''
			));

			$wp_customize->add_control( 'ctrl_infocontato_email', array(
				'label' 	=> 'E-mail',
				'description'	=> 'Digite o e-mail',
				'section'		=> 'sec_infocontato',
				'settings'		=> 'set_infocontato_email',
				'type'			=> 'text'
			) );
	
	
			// Celular
			$wp_customize->add_setting( 'set_infocontato_celular', array(
				'type'		=> 'theme_mod',
				'default'	=> ''
			));

			$wp_customize->add_control( 'ctrl_infocontato_celular', array(
				'label' 	=> 'Celular',
				'description'	=> 'Digite o celular',
				'section'		=> 'sec_infocontato',
				'settings'		=> 'set_infocontato_celular',
				'type'			=> 'text'
			) );


	// Rede Social
		$wp_customize->add_section( 'sec_redesocial', array(
			'title'			=> 'Redes sociais',
			'description'	=> 'Informe o url do facebook e instagram.'
		));

		// Email
		// Imagem 
		$wp_customize->add_setting( 'set_email', array(
			'default'	=> ''
		));

		$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_email', array(
			'label'		=> 'Ícone email',
			'width'		=> 73,
			'height'	=> 73,
			'section'	=> 'sec_redesocial',
			'settings'	=> 'set_email'
		)));

		// Facebook
		$wp_customize->add_setting( 'set_redesocial_facebook', array(
			'type'		=> 'theme_mod',
			'default'	=> ''
		));

		$wp_customize->add_control( 'ctrl_redesocial_facebook', array(
			'label' 	=> 'Facebook',
			'description'	=> 'Digite o URL do facebook',
			'section'		=> 'sec_redesocial',
			'settings'		=> 'set_redesocial_facebook',
			'type'			=> 'text'
		) );

		// Imagem 
		$wp_customize->add_setting( 'set_face', array(
			'default'	=> ''
		));

		$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_face', array(
			'label'		=> 'Ícone Facebook',
			'width'		=> 73,
			'height'	=> 73,
			'section'	=> 'sec_redesocial',
			'settings'	=> 'set_face'
		)));
	
	
		// Youtube
			$wp_customize->add_setting( 'set_redesocial_youtube', array(
				'type'		=> 'theme_mod',
				'default'	=> ''
			));

			$wp_customize->add_control( 'ctrl_redesocial_youtube', array(
				'label' 	=> 'Youtube',
				'description'	=> 'Digite o URL do youtube',
				'section'		=> 'sec_redesocial',
				'settings'		=> 'set_redesocial_youtube',
				'type'			=> 'text'
			) );

			// Imagem 
			$wp_customize->add_setting( 'set_you', array(
				'default'	=> ''
			));

			$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_you', array(
				'label'		=> 'Ícone Youtube',
				'width'		=> 73,
				'height'	=> 73,
				'section'	=> 'sec_redesocial',
				'settings'	=> 'set_you'
			)));
	
	
		// Instagram
			$wp_customize->add_setting( 'set_redesocial_instagram', array(
				'type'		=> 'theme_mod',
				'default'	=> ''
			));

			$wp_customize->add_control( 'ctrl_redesocial_instagram', array(
				'label' 	=> 'Instagram',
				'description'	=> 'Digite o URL do instagram',
				'section'		=> 'sec_redesocial',
				'settings'		=> 'set_redesocial_instagram',
				'type'			=> 'text'
			) );

			// Imagem 
			$wp_customize->add_setting( 'set_insta', array(
				'default'	=> ''
			));

			$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_insta', array(
				'label'		=> 'Ícone Instagram',
				'width'		=> 73,
				'height'	=> 73,
				'section'	=> 'sec_redesocial',
				'settings'	=> 'set_insta'
			)));
		
	
		/*// Iframe
			$wp_customize->add_setting( 'set_redesocial_iframefb', array(
				'type'		=> 'theme_mod',
				'default'	=> ''
			));

			$wp_customize->add_control( 'ctrl_redesocial_iframefb', array(
				'label' 	=> 'Iframe do Facebook',
				'description'	=> 'Digite o iframe do facebook',
				'section'		=> 'sec_redesocial',
				'settings'		=> 'set_redesocial_iframefb',
				'type'			=> 'textarea'
			) );*/


/*
	// Seção Serviços

	$wp_customize->add_section( 'sec_servicos', array(
		'title'			=> 'Serviços',
		'description'	=> 'Seção para os serviços'
	));

	// Serviço 1 - Título
	$wp_customize->add_setting( 'set_servicos1_titulo', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_servicos1_titulo', array(
		'label' 	=> 'Título para o serviço 1',
		'description'	=> 'Informe o título',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos1_titulo',
		'type'			=> 'text'
	) );

	// Serviço 1 - Descrição
	$wp_customize->add_setting( 'set_servicos1_descricao', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_servicos1_descricao', array(
		'label' 	=> 'Descrição para o serviço 1',
		'description'	=> 'Informe a descrição',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos1_descricao',
		'type'			=> 'textarea'
	) );

	// Serviço 1 - Imagem
	$wp_customize->add_setting( 'set_servicos1', array(
		'default'	=> ''
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_servicos_item1', array(
		'label'		=> 'Imagem do Serviço 1',
		'width'		=> 200,
		'height'	=> 200,
		'section'	=> 'sec_servicos',
		'settings'	=> 'set_servicos1'
	)));



	// Serviço 2 - Título
	$wp_customize->add_setting( 'set_servicos2_titulo', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_servicos2_titulo', array(
		'label' 	=> 'Título para o serviço 2',
		'description'	=> 'Informe o título',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos2_titulo',
		'type'			=> 'text'
	) );

	// Serviço 2 - Descrição
	$wp_customize->add_setting( 'set_servicos2_descricao', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_servicos2_descricao', array(
		'label' 	=> 'Descrição para o serviço 2',
		'description'	=> 'Informe a descrição',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos2_descricao',
		'type'			=> 'textarea'
	) );


	// Serviço 2 - Imagem
	$wp_customize->add_setting( 'set_servicos2', array(
		'default'	=> ''
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_servicos_item2', array(
		'label'		=> 'Imagem do Serviço 2',
		'width'		=> 200,
		'height'	=> 200,
		'section'	=> 'sec_servicos',
		'settings'	=> 'set_servicos2'
	)));




	// Serviço 3 - Título
	$wp_customize->add_setting( 'set_servicos3_titulo', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_servicos3_titulo', array(
		'label' 	=> 'Título para o serviço 3',
		'description'	=> 'Informe o título',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos3_titulo',
		'type'			=> 'text'
	) );

	// Serviço 3 - Descrição
	$wp_customize->add_setting( 'set_servicos3_descricao', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_servicos3_descricao', array(
		'label' 	=> 'Descrição para o serviço 3',
		'description'	=> 'Informe a descrição',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos3_descricao',
		'type'			=> 'textarea'
	) );


	// Serviço 3 - Imagem
	$wp_customize->add_setting( 'set_servicos3', array(
		'default'	=> ''
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_servicos_item3', array(
		'label'		=> 'Imagem do Serviço 3',
		'width'		=> 200,
		'height'	=> 200,
		'section'	=> 'sec_servicos',
		'settings'	=> 'set_servicos3'
	)));*/
}
add_action( 'customize_register', 'meupersonalizador' );
