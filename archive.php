<?php

get_header();
if(have_posts()):
	?>
		<h2><?php 
		if(is_category() ){
			single_cat_title();
		}elseif(is_tag() ){
			echo "Tag here";
		}elseif(is_author()){
			the_post();
			echo 'Author archives: '. get_the_author();
			rewind_posts();

		}elseif(is_day()){
			echo "Daily archive ". get_the_date();
		}elseif(is_month()){
			echo "Month archive ". get_the_date('F Y');
		}elseif(is_year()){
			echo "Daily archive ". get_the_date('Y');
		}else{
			echo "Archive";
		}


		?></h2>
	<?php
	while(have_posts()): the_post(); ?>
	<article class="post <?php if(has_post_thumbnail() ){ ?>has-thumbnail <?php } ?>">

	<div class="post-thumbnail">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
	</div>

	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<p class="post-info">
		<?php the_time('F j, Y g:i a') ?> | by 
		<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>

		</p>
		

	<p><?php the_content('Continue'); ?>
		
	</p>
	</article>
	
	<?php endwhile;
	else:
	echo '<p>No content found</p>';
	endif;
get_footer();

?>