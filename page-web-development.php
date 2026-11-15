<?php
$services = farhan_premium_get_services();
get_header();
?>
<main>
    <?php farhan_premium_page_hero( 'Web Development', 'Custom, scalable and conversion-focused products engineered for modern business growth.' ); ?>

    <section class="content-section">
        <div class="container">
            <div class="grid-3">
                <?php foreach ( $services as $index => $service ) : ?>
                    <?php if ( $index >= 2 ) { break; } ?>
                    <article class="service-card">
                        <div class="icon-box"><?php echo esc_html( $service['icon'] ); ?></div>
                        <h3><?php echo esc_html( $service['title'] ); ?></h3>
                        <p><?php echo esc_html( $service['text'] ); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container feature-row">
            <div class="feature-box">
                <div class="eyebrow">Engineering</div>
                <h3>Fast websites that are built to scale.</h3>
                <p>We build sleek, secure and high-performing digital products with technical precision and conversion-minded thinking.</p>
                <ul class="list-bullets">
                    <li>Custom WordPress development</li>
                    <li>Landing pages and funnels</li>
                    <li>Optimized front-end experience</li>
                </ul>
            </div>
            <div class="feature-box">
                <div class="eyebrow">What you get</div>
                <div class="pill-grid">
                    <span class="pill">Responsive builds</span>
                    <span class="pill">SEO-ready markup</span>
                    <span class="pill">Conversion flows</span>
                    <span class="pill">Performance-first</span>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
