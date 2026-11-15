<?php
get_header();
?>
<main>
    <section class="page-header">
        <div class="container">
            <div class="page-header-inner">
                <div class="eyebrow">404</div>
                <h1>Page not found</h1>
                <p>The page you requested could not be located.</p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn">Return home</a>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
