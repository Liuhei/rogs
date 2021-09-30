<?php get_header(); ?>
<div id="content">
    <div id="inner-content-article">
        <main id="main">
            <section id="post-page-section">
                <h1 class="post-title"><?php echo the_title(); ?></h1>
                <?php if ( has_post_thumbnail() ) { ?>
                    <p class="post-thumbnail"><?php the_post_thumbnail(); ?></p>
                <?php } ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                endwhile; endif; ?>
            </section>
        </main>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>