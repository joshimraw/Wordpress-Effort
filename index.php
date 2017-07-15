<?php

get_header();
if(have_posts()):
	while(have_posts()): the_post(); ?>

	<article class="post page">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p2><?php the_content(); ?></p2>
	</article>
	
	<?php endwhile;
	else:
	echo '<p>No content found</p>';
	endif;
get_footer();

?>