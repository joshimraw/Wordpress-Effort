<?php
/*
Template Name: Specail Layout
*/
get_header();
if(have_posts()):
	while(have_posts()): the_post(); ?>

	<article class="post page">
		<h2><?php the_title(); ?></h2>

		<!-- info box -->
		<div class="info-box">
			<h4>Disclaimer Title</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, temporibus. Nobis quaerat, expedita commodi velit.</p>
		</div><!-- info box -->

		<p2><?php the_content(); ?></p2>
	</article>
	
	<?php endwhile;
	else:
	echo '<p>No content found</p>';
	endif;
get_footer();

?>