<?php
get_header();
?>
<main>
    <section class="page-header">
        <div class="container">
            <div class="page-header-inner">
                <div class="eyebrow">Search</div>
                <h1><?php printf( esc_html__( 'Search results for: %s', 'farhan-premium-agency' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            </div>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            <?php if ( have_posts() ) : ?>
                <div class="grid-3">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article class="card">
                            <div class="portfolio-content">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 25 ) ); ?></p>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <div class="card"><p>Nothing matched your search.</p></div>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php
get_footer();
