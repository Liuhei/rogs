<div id="fp-posts-box">
	<a href="<?php the_permalink(); ?>"><img class="fp-posts-left" src="<?php the_post_thumbnail_url(); ?>"></a>
	<div class="fp-posts-right">
		<p class="fp-posts-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
		<p class="fp-posts-date"><?php the_date(); ?></p>
		<?php the_category(); ?>
	</div>
</div>