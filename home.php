<?php
get_header();
?>
<main>
    <section class="page-header">
        <div class="container">
            <div class="page-header-inner">
                <div class="eyebrow">Blog</div>
                <h1><?php wp_title( '' ); ?></h1>
                <p>Fresh ideas, digital strategy insights, and practical thinking for businesses building stronger online experiences.</p>
            </div>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            <?php if ( have_posts() ) : ?>
                <div class="grid-3">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article class="card">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="portfolio-visual" style="min-height: 200px; display: flex; align-items: center; justify-content: center;">
                                    <?php the_post_thumbnail( 'large' ); ?>
                                </div>
                            <?php endif; ?>
                            <div class="portfolio-content">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22 ) ); ?></p>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <div class="card">
                    <p>No posts yet. Publish your first blog entry to fill this section.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php
get_footer();
