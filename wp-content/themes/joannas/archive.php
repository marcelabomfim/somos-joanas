<?php get_header(); ?>

<main class="page-noticias fadeIn">
    <h1 class="titulo11">Notícias</h1>

    <section class="artigos">
        <div class="container">
            <div class="bloco col-md-10">
                <?php         
                    if(have_posts()) :         
                    while(have_posts()):
                            the_post();    
                ?>

                <?php get_template_part('content', get_post_format()); ?>

                <?php
                    endwhile;
                    the_posts_pagination(array(
                        'next_text'		=>	'<i class="mais mostrar-itens" ">Mais Notícias</i>'
                        )); ?>

                        <?php  
                            wp_reset_postdata(); 
                    endif;
                ?>
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