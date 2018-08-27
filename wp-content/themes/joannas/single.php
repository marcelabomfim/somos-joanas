<?php get_header(); 
	the_post();
?>
<main class="single-post fadeIn">

	<section class="artigos">
		<div class="container">
			<div class="bloco col-md-10">
                <h2 class="titulo1"><?php the_title(); ?></h2>

                <div class="data"><?php the_date(); ?> <?php the_field('local') ?></div>

                <p class="publicacao">Publicado por <?php the_author(); ?></p>
                    <div class="banner"> 
                        <div class="img-wp" style="background-image:  url(<?php the_field('banner_blog'); ?>);"></div>
                
                    </div>
                    <div class="conteudo-wp">
                        <?php the_content(); ?>
                    </div>

                    <?php comment_form() ?>
            </div>
            
			<div class="bloco-dois col-md-2">
				<?php 
					if ( is_active_sidebar('sidebar-1')){
							dynamic_sidebar('sidebar-1'); 
					}
					
					?>
					
			</div>
		</div>		
    </section>

</main>
<?php get_footer(); ?>