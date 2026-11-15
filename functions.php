<?php

function farhan_premium_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 64,
        'width'       => 220,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style.css' );

    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'farhan-premium-agency' ),
            'footer'  => __( 'Footer Menu', 'farhan-premium-agency' ),
        )
    );
}
add_action( 'after_setup_theme', 'farhan_premium_theme_setup' );

function farhan_premium_theme_enqueue_assets() {
    $theme_version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'farhan-premium-theme-style', get_stylesheet_uri(), array(), $theme_version );
    wp_enqueue_script( 'farhan-premium-theme-script', get_template_directory_uri() . '/assets/js/theme.js', array(), $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'farhan_premium_theme_enqueue_assets' );

function farhan_premium_register_sidebars() {
    register_sidebar(
        array(
            'name'          => __( 'Footer One', 'farhan-premium-agency' ),
            'id'            => 'footer-one',
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name'          => __( 'Footer Two', 'farhan-premium-agency' ),
            'id'            => 'footer-two',
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'farhan_premium_register_sidebars' );

function farhan_premium_customizer( $wp_customize ) {
    $wp_customize->add_section( 'farhan_premium_contact', array(
        'title'    => __( 'Farhan Contact Details', 'farhan-premium-agency' ),
        'priority' => 30,
    ) );

    $settings = array(
        'website_owner' => __( 'Website Owner', 'farhan-premium-agency' ),
        'business_email' => __( 'Business Email', 'farhan-premium-agency' ),
        'whatsapp_link' => __( 'WhatsApp Link', 'farhan-premium-agency' ),
        'address' => __( 'Business Address', 'farhan-premium-agency' ),
        'facebook_url' => __( 'Facebook URL', 'farhan-premium-agency' ),
        'instagram_url' => __( 'Instagram URL', 'farhan-premium-agency' ),
        'linkedin_url' => __( 'LinkedIn URL', 'farhan-premium-agency' ),
    );

    foreach ( $settings as $key => $label ) {
        $wp_customize->add_setting( 'farhan_premium_' . $key, array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ) );

        $wp_customize->add_control( 'farhan_premium_' . $key, array(
            'label'    => $label,
            'section'  => 'farhan_premium_contact',
            'type'     => 'text',
        ) );
    }
}
add_action( 'customize_register', 'farhan_premium_customizer' );

function farhan_premium_social_links() {
    return array(
        'facebook' => get_theme_mod( 'farhan_premium_facebook_url', 'https://facebook.com' ),
        'instagram' => get_theme_mod( 'farhan_premium_instagram_url', 'https://instagram.com' ),
        'linkedin' => get_theme_mod( 'farhan_premium_linkedin_url', 'https://linkedin.com' ),
    );
}

function farhan_premium_contact_details() {
    return array(
        'owner'  => get_theme_mod( 'farhan_premium_website_owner', 'Farhan' ),
        'email'  => get_theme_mod( 'farhan_premium_business_email', 'hello@example.com' ),
        'phone'  => get_theme_mod( 'farhan_premium_whatsapp_link', '' ),
        'address' => get_theme_mod( 'farhan_premium_address', 'Your Business Address' ),
    );
}

function farhan_premium_get_primary_menu() {
    if ( has_nav_menu( 'primary' ) ) {
        wp_nav_menu(
            array(
                'theme_location' => 'primary',
                'menu_class'     => 'menu',
                'container'      => false,
                'fallback_cb'    => 'farhan_premium_menu_fallback',
            )
        );
        return;
    }

    farhan_premium_menu_fallback();
}

function farhan_premium_menu_fallback() {
    $menu_items = array(
        'Home' => home_url( '/' ),
        'About Us' => home_url( '/about-us/' ),
        'Services' => home_url( '/services/' ),
        'Portfolio' => home_url( '/portfolio/' ),
        'Pricing' => home_url( '/pricing/' ),
        'Blog' => home_url( '/blog/' ),
        'Contact' => home_url( '/contact-us/' ),
    );

    echo '<ul class="menu">';
    foreach ( $menu_items as $label => $url ) {
        echo '<li><a href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a></li>';
    }
    echo '</ul>';
}

function farhan_premium_process_contact_form() {
    if ( ! isset( $_POST['farhan_contact_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['farhan_contact_nonce'] ) ), 'farhan_contact_action' ) ) {
        return;
    }

    $name    = isset( $_POST['full_name'] ) ? sanitize_text_field( wp_unslash( $_POST['full_name'] ) ) : '';
    $email   = isset( $_POST['email_address'] ) ? sanitize_email( wp_unslash( $_POST['email_address'] ) ) : '';
    $service = isset( $_POST['service_required'] ) ? sanitize_text_field( wp_unslash( $_POST['service_required'] ) ) : '';
    $message = isset( $_POST['project_description'] ) ? sanitize_textarea_field( wp_unslash( $_POST['project_description'] ) ) : '';

    if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
        wp_safe_redirect( add_query_arg( 'contact_status', 'error', wp_get_referer() ) );
        exit;
    }

    $to      = get_theme_mod( 'farhan_premium_business_email', get_option( 'admin_email' ) );
    $subject = 'New Client Inquiry from ' . $name . ' - ' . $service;
    $body    = "Name: {$name}\nEmail: {$email}\nService: {$service}\n\nProject Details:\n{$message}";
    $headers = array( 'Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $email );

    $sent = wp_mail( $to, $subject, $body, $headers );

    if ( $sent ) {
        wp_safe_redirect( add_query_arg( 'contact_status', 'success', wp_get_referer() ) );
    } else {
        wp_safe_redirect( add_query_arg( 'contact_status', 'error', wp_get_referer() ) );
    }
    exit;
}
add_action( 'admin_post_nopriv_farhan_contact_submit', 'farhan_premium_process_contact_form' );
add_action( 'admin_post_farhan_contact_submit', 'farhan_premium_process_contact_form' );

function farhan_premium_get_default_portfolio() {
    return array(
        array(
            'title' => 'Brand Identity System',
            'category' => 'Brand Design',
            'excerpt' => 'Luxury identity approach built for a high-converting digital brand.',
        ),
        array(
            'title' => 'B2B SaaS Platform',
            'category' => 'Web Development',
            'excerpt' => 'Scalable marketing platform with frictionless onboarding flows.',
        ),
        array(
            'title' => 'Ecommerce Launch',
            'category' => 'Commerce UX',
            'excerpt' => 'Conversion-focused storefront with fast product discovery experiences.',
        ),
        array(
            'title' => 'AI Startup Website',
            'category' => 'Product Marketing',
            'excerpt' => 'Clean product narrative that turned leads into enterprise conversations.',
        ),
        array(
            'title' => 'Growth Campaign System',
            'category' => 'Digital Marketing',
            'excerpt' => 'Full funnel campaign system with landing pages and reporting dashboards.',
        ),
        array(
            'title' => 'International Agency Site',
            'category' => 'Agency Growth',
            'excerpt' => 'Premium presence for an international creative services business.',
        ),
    );
}

function farhan_premium_get_services() {
    return array(
        array(
            'title' => 'Web Development',
            'icon' => '⚡',
            'text' => 'High-performance business websites, landing pages, and web applications built for conversion and scale.',
        ),
        array(
            'title' => 'Website Designing',
            'icon' => '✦',
            'text' => 'Modern premium interfaces designed to improve clarity, engagement, and user trust across every screen.',
        ),
        array(
            'title' => 'Graphic Designing',
            'icon' => '◈',
            'text' => 'Brand identities, marketing creatives, and polished visual systems built to stand out in crowded markets.',
        ),
        array(
            'title' => 'Digital Marketing',
            'icon' => '◎',
            'text' => 'Strategic growth campaigns that amplify visibility, leads, and sales through modern digital channels.',
        ),
        array(
            'title' => 'SEO Optimization',
            'icon' => '↗',
            'text' => 'Technical and content-driven search strategies to increase visibility and help your site rank with intent.',
        ),
        array(
            'title' => 'UX & Strategy',
            'icon' => '▣',
            'text' => 'Research-heavy blueprints to improve user experience, conversion journeys, and brand clarity.',
        ),
    );
}

function farhan_premium_page_hero( $page_title, $description ) {
    echo '<section class="page-header"><div class="container"><div class="page-header-inner"><div class="eyebrow">Farhan</div><h1>' . esc_html( $page_title ) . '</h1><p>' . esc_html( $description ) . '</p></div></div></section>';
}

function farhan_premium_get_footer_menu() {
    if ( has_nav_menu( 'footer' ) ) {
        wp_nav_menu(
            array(
                'theme_location' => 'footer',
                'container'      => false,
                'menu_class'     => 'footer-menu',
            )
        );
    }
}
