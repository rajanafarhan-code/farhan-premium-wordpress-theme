<?php
get_header();
?>
<main>
    <section class="page-header">
        <div class="container">
            <div class="page-header-inner">
                <div class="eyebrow">Latest</div>
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </section>

    <section class="content-section">
        <div class="container page-content">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-content' ); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div style="margin-bottom: 24px;">
                                <?php the_post_thumbnail( 'large' ); ?>
                            </div>
                        <?php endif; ?>
                        <h2><?php the_title(); ?></h2>
                        <p><em><?php echo esc_html( get_the_date() ); ?> • <?php the_category( ', ' ); ?></em></p>
                        <?php the_content(); ?>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="card">
                    <p>Nothing found here.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php
get_footer();
