<?php get_header(); ?>
        <div id="content">
           <div id="inner-content-article">
               <main id="main">
                <section>
                   <h1 id="h1-top">
                   <?php
                        if(is_category()){
                            single_cat_title();
                        } else if(is_tag()){
                            single_tag_title();
                        } else if(is_month()){
                            echo get_the_date('F Y');
                        } else {
                            echo 'Archive';
                        }
                    ?>
                    </h1>
                    <?php if (have_posts()):
                        while (have_posts()):the_post(); ?>
                            <div class="category-box-category">
                                <div class="category-box-img">
                                    <a href="<?php echo esc_url(get_the_permalink()); ?>">
                                        <?php if ( has_post_thumbnail() ) {
                                            echo get_the_post_thumbnail();
                                        } else { ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/DonutsShop.jpg" width="500">  
                                        <?php } ?>
                                    </a>
                                </div>
                                <div class="category-box-contents">
                                    <h2 class="category-title-category"><a href="<?php echo esc_url(get_the_permalink()); ?>"><?php the_title(); ?></a></h2>
                                    
<!--
                                    <div class="category-contents-category">
                                        <?php the_excerpt(); ?>
                                    </div>
-->
                                    <div class="readmore-category">
                                        <div class="readmore-inner">
                                            <a href="<?php echo esc_url(get_the_permalink()); ?>">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                    endwhile;
                    endif; 
                    ?>
                </section>
               </main>
    <?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>