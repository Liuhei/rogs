<?php get_header(); ?>
        <div id="content-article">
           <div id="inner-content-article">
               <main id="main">
                <section id="post-page-section">
                    <?php echo the_category(); ?><span class="category-date-top"><?php echo the_time('Y.n.j'); ?></span>
                    <h1 class="post-title"><?php echo the_title(); ?></h1>
                    <p class="post-thumbnail">
                    <?php if ( has_post_thumbnail() ) {
                        echo get_the_post_thumbnail();
                    } else { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/DonutsShop.jpg" width="500">  
                    <?php } ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                        the_content();
                    endwhile; else: ?>
                        <p></p>
                    <?php endif; ?>
                    </p>
                </section>

                <?php
                    $original_post = $post;
                    global $post;

                    $tags = get_the_tags($post->ID);
                    if ($tags) {
                        $tag_ids = array();
                        foreach( $tags as $each_tag ){
                            $tag_ids[] = $each_tag->term_id;
                            $args = array(
                                'tag__in' => $tag_ids,
                                'post__not_in' => array($post->ID),
                                'posts_per_page'=> 4,
                                'ingnore_sticky_posts'=> 1
                            );
                    }
                   
                    $related_query = new wp_query( $args );
                    while( $related_query->have_posts() ) { $related_query->the_post();
                ?>
                <div class="related-thumb" href="<?php the_permalink()?>">
                    <div class="related-left">
                        <a href="<?php echo the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <div class="related-right">
                        <p class="related-right-title"><a class="related-right-link" href="<?php echo the_permalink() ?>"><?php the_title(); ?></a></p>
                        <?php the_category(); ?>
                    </div>
                </div>
                <? }
                }
                $post = $original_post;
                wp_reset_query();
                ?>
                
                
               </main>
            <?php get_sidebar(); ?>
         </div>
        </div>
        <?php get_footer(); ?>