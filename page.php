<?php

get_header();
if(have_posts()):
	while(have_posts()): the_post(); ?>
	<article class="post page">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<p class="post-info">
		<?php the_time('F j, Y g:i a') ?> | by 
		<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
		</p>
		
	<p2><?php the_content(); ?></p2>
	</article>
	
	<?php endwhile;
	else:
	echo '<p>No content found</p>';
	endif;
get_footer();

?>