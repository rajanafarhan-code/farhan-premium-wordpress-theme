<?php
/**
 * Footer template.
 */
?>
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        <span class="brand-mark">F</span>
                        <span class="brand-text">
                            <strong><?php bloginfo( 'name' ); ?></strong>
                            <small>Agency</small>
                        </span>
                    </a>

                    <p>
                        Premium digital strategy, design, branding and web development for modern businesses ready to grow across borders.
                    </p>

                    <div class="social-links">
                        <?php foreach ( farhan_premium_social_links() as $network => $url ) : ?>
                            <?php if ( ! empty( $url ) ) : ?>
                                <a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noreferrer noopener" aria-label="<?php echo esc_attr( ucfirst( $network ) ); ?>">
                                    <?php
                                    $icon = '◌';
                                    if ( 'facebook' === $network ) { $icon = 'f'; }
                                    if ( 'instagram' === $network ) { $icon = '◎'; }
                                    if ( 'linkedin' === $network ) { $icon = 'in'; }
                                    echo esc_html( $icon );
                                    ?>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="footer-column">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/web-development/' ) ); ?>">Web Development</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/website-designing/' ) ); ?>">Website Designing</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/graphic-designing/' ) ); ?>">Graphic Designing</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/digital-marketing/' ) ); ?>">Digital Marketing</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>">Portfolio</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>">Pricing</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Contact</h3>
                    <p><?php echo esc_html( get_theme_mod( 'farhan_premium_website_owner', 'Farhan' ) ); ?></p>
                    <p><a href="mailto:<?php echo esc_attr( get_theme_mod( 'farhan_premium_business_email', 'hello@example.com' ) ); ?>"><?php echo esc_html( get_theme_mod( 'farhan_premium_business_email', 'hello@example.com' ) ); ?></a></p>
                    <p><?php echo esc_html( get_theme_mod( 'farhan_premium_address', 'Your business address' ) ); ?></p>
                </div>
            </div>

            <div class="footer-bottom">
                <span>© <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</span>
                <span><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a></span>
            </div>
        </div>
    </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
