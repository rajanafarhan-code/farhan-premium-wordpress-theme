<?php
get_header();
while ( have_posts() ) : the_post();
?>
<main>
    <section class="page-header">
        <div class="container">
            <div class="page-header-inner">
                <div class="eyebrow">Page</div>
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </section>

    <section class="content-section">
        <div class="container page-content">
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
</main>
<?php
endwhile;
get_footer();
