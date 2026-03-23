<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="site-header__inner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-header__logo">
            <?php bloginfo( 'name' ); ?>
        </a>

        <nav class="site-header__nav" aria-label="Primary navigation">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'menu_class'     => 'nav__list',
                'container'      => false,
            ]);
            ?>
        </nav>
    </div>
</header>
