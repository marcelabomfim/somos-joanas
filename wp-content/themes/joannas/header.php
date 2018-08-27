<!DOCTYPE html>
<html lang="pt-BR">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <title><?php the_title(); ?> - Somos Joannas</title>
    <meta name=”description” content="Olá, sou Mariana Somos Joannas Desenvolvedora Web e..." />
    <meta property="og:title" content="Somos Joannas">
    <meta property="og:site_name" content="Somos Joannas">
    <meta property="og:description" content="Olá, sou Mariana Somos Joannas Desenvolvedora Web e...">
    <meta property="og:image" content="http://www.somosjoannas.com.br/image/logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="354">
    <meta property="og:image:height" content="354">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.somosjoannas.com.br">

    <title><?php the_title(); ?> - Somos Joannas</title>
    
    <?php wp_head(); ?>
    
	</head>

<body <?php body_class('fadeIn'); ?>>
<body>
  <header class="header">
    <div class="header__links">
      <div class="menu">
        <input type="checkbox" class="menu__input" id="menu">
        <label for="menu" class="menu__toggle"><span></span></label>
        <nav class="menu__nav">
          <ul class="menu__list">
            <div class="menu__box">
              <li class="menu__item">
                <a href="#oquesomos" class="menu__item-link">O que somos</a>
              </li>
              <li class="menu__item active">
                <a href="#quemomos" class="menu__item-link">Quem somos</a>
              </li>
              <li class="menu__item">
                <a href="#somosjoannas" class="menu__item-link">Somos Joannas</a>
              </li>
            </div>
            <div class="menu__box">
              <li class="menu__item">
                <a href="#profissionaisvoluntarios" class="menu__item-link">Nossos Profissionais Voluntários</a>
              </li>
              <li class="menu__item">
                <a href="#querserumcolaborador" class="menu__item-link">Quer ser um Colaborador ou Profissional Voluntário?</a>
              </li>
            </div>
            <div class="menu__box">
              <li class="menu__item">
                <a href="#pesquisas" class="menu__item-link">Pesquisas sobre diversas formas de abuso e assédio</a>
              </li>
              <li class="menu__item">
                <a href="#precisadeajuda" class="menu__item-link">Você é vítima e precisa de ajuda?</a>
              </li>
            </div>
            <div class="menu__box">
              <li class="menu__item">
                <a href="#agradecimentos" class="menu__item-link">Agradecimentos</a>
              </li>
              <li class="menu__item">
                <a href="#redessociais" class="menu__item-link">Redes Sociais</a>
              </li>
              <li class="menu__item">
                <a href="#contatos" class="menu__item-link">Contatos</a>
              </li>
            </div>
          </ul>
          <div class="menu__search">
            <form action="#" class="search">
              <input type="search" class="search__input" placeholder="Digite aqui o que você procura...">
              <button type="submit" class="search__submit"></i></button>
            </form>
          </div>
        </nav>
        <ul class="featured">
          <li class="featured__item active" data-type="movepas">
            <a href="#movepas" class="featured__item-link">MOVEPAS</a>
          </li>
          <li class="featured__item" data-type="somosjoannas">
            <a href="#somosjoannas" class="featured__item-link">Somos Joannas</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="header__icons">
      <form action="#" class="search">
        <input type="search" class="search__input" placeholder="Digite aqui o que você procura...">
        <button type="submit" class="search__submit"></i></button>
      </form>
      <ul class="social">
        <li class="social__item">
          <a href="#" class="social__item-link">
            <img class="img-wp " src="<?php echo wp_get_attachment_url(get_theme_mod('set_email')); ?>">
          </a>
        </li>
        <li class="social__item">
          <a href="<?php echo get_theme_mod( 'set_redesocial_instagram' ); ?>" class="social__item-link">
            <img class="img-wp " src="<?php echo wp_get_attachment_url(get_theme_mod('set_insta')); ?>">
          </a>
        </li>
        <li class="social__item">
          <a href="<?php echo get_theme_mod( 'set_redesocial_facebook' ); ?>" class="social__item-link">
            <img class="img-wp swing" src="<?php echo wp_get_attachment_url(get_theme_mod('set_face')); ?>">
          </a>
        </li>
      </ul>
    </div>
  </header>