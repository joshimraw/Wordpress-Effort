<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo(); ?>">
<meta name="viewport" content="width=device-width" >
<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wp-container">
	<!-- Site Header -->
	<header class="site-header">
		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		<h5><?php bloginfo('description'); ?>
			<?php if(is_page(about-me)){ ?>
		- Thank you for viewing about me
		<?php } ?>

		</h5>

		<?php
		$args = array(
			'theme_location' => 'primary'
			);
		 ?>
		<nav class="site-nav">
			<?php wp_nav_menu( $args ); ?>
		</nav>
	</header>
	<!-- Site Header END -->