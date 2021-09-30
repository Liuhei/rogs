<?php
/**
 * Template Name: No Sidebar!
 * Discription: このページでサイドバーを非表示にし、メインコンテンツのみを表示します。
 */
?>
    <?php get_header(); ?>
    <?php if (have_posts()):
    while (have_posts()):the_post(); ?>
    <section id="content">
        <div id="main">
            <section>
                <h1>
                    <?php the_title(); ?>
                </h1>
                <div>
                    <?php the_content(); ?>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/DonutsShop.jpg" width="500">
            </section>
        </div>
        <?php 
        endwhile;
        endif; ?>
    </section>
    <?php get_footer(); ?>
