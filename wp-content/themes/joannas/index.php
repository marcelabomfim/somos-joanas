<?php get_header();?>

<main class="page-noticias fadeIn">
    <h1 class="titulo11">Notícias</h1>

    <div class="conteudo-wp">
        <div class="container">    
            <?php echo get_theme_mod('set_banner_texto') ?>
        </div>
    </div>

	<section class="artigos">
		<div class="container">

			<div class="bloco">
				<?php         
					if(have_posts()) :         
					while(have_posts()):
						 the_post();
				?>

				<?php get_template_part('content', get_post_format()); ?>

				<?php
					endwhile;
						 wp_reset_postdata(); 
					endif;
				?>
			</div>
			
		</div>		
	</section>
</main>
<?php get_footer(); ?>