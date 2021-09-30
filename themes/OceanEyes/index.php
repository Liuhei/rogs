<?php get_header(); ?>
<div id="fp-content">
    <div class="fp-inner">
        <div id="fp-slide-wrap">
            <?php get_template_part( 'template-parts/front/front', 'slide' ); ?>
        </div>
        <div id="fp-content-wrap">
            <div id="fp-recent-wrap">
                <div id="latest-box">
                    <p class="latest-content" id="latest-1">LATEST<br>ARTICLES</p>
                    <p id="fp-arrow-1" class="latest-arrow">➡</p>
                    <p id="fp-arrow-2" class="latest-arrow arrow-show">➡</p>
                    <p id="fp-arrow-3" class="latest-arrow">➡</p>
                    <p id="fp-arrow-4" class="latest-arrow">➡</p>
                </div>
                <div id="fp-posts-wrap">
                    <?php
                        $the_query = new WP_Query( array(
                            'posts_per_page' => 3
                        ));
                        if ( $the_query->have_posts() ):
                            while ( $the_query->have_posts() ):
                                $the_query->the_post();
                                get_template_part( 'template-parts/front/front', 'recent' );
                            endwhile;
                        endif; 
                    ?>
                </div>
            </div>
            <div id="fp-intro-wrap" class="hidden-wrap">
                <?php get_template_part( 'template-parts/front/front', 'intro' ); ?>
            </div>
            <div id="fp-category-wrap">
                <?php get_template_part( 'template-parts/front/front', 'category' ) ?>
            </div>
            <div id="fp-add-box">
                <div id="fp-add-inner">
                    <p id="fp-add-title">サイト制作・保守依頼</p>
                    <p id="fp-add-content">HTML/CSS/Javascript、さらにWordpress/PHPまで案件をお受けしております。「とりあえず連絡してみるか」という感じでOKです。ぜひお気軽にメッセージをお送りください。</p>
                    <a id="fp-add-button" href="<?php echo esc_url(site_url('/contact-form')); ?>">相談してみる</a>
                </div>
            </div>
        </div>
<?php get_footer(); ?>
        