<?php
/**
 * Header template.
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="site-shell">
    <header class="site-header">
        <div class="container nav-wrap">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <span class="brand-mark">F</span>
                    <span class="brand-text">
                        <strong><?php bloginfo( 'name' ); ?></strong>
                        <small>Agency</small>
                    </span>
                <?php endif; ?>
            </a>

            <nav class="main-nav" aria-label="Primary navigation" id="primary-navigation">
                <?php farhan_premium_get_primary_menu(); ?>
            </nav>

            <a class="nav-cta" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Let’s Talk</a>
            <button class="nav-toggle" aria-label="Toggle menu" aria-expanded="false">
                ☰
            </button>
        </div>
    </header>
