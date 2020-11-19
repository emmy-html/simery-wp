<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;400;900&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
<header>
    <div class="content-wrapper">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-moon"></i></a>
        <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </nav>
    </div>  
</header>
<main>