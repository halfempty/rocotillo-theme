<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title><?php wp_title( '&mdash;', true, 'right' ); ?>
			Rocotillo
		<?php $site_description = get_bloginfo( 'description', 'display' );

		if ( $site_description && ( is_home() || is_front_page() ) )
			echo ' &mdash; ' . $site_description;
		if ( $paged >= 2 || $page >= 2 )
			echo ' &mdash; ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
		?></title>
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" />

	<script type="text/javascript" src="http://fast.fonts.com/jsapi/51b11d53-b76f-4c9e-9f60-de07bb972cf4.js"></script>	
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

	<?php wp_head(); ?>
	
</head>

<!--[if IE]> <body class="legacy"> <![endif]-->
<!--[if !IE]><!--> <body> <!--<![endif]-->

<div class="header">
	<div class="margin">
		<h1><a href="<?php echo home_url(); ?>">Rocotillo</a></h2>
		<p class="tagline"><?php echo get_bloginfo('description'); ?></p>

		<ul class="languages">
		<?php
			global $wp_query;
			$postid = $wp_query->post->ID;
			$rocotillohead = get_post_meta($postid,'_rocotillo',TRUE);
		?>
		<?php if ( $rocotillo['english'] !== '' ) : ?>
			<li class="<?php echo get_template_part('parts/lang/english-class'); ?>"><a href="<?php echo $rocotillohead['english']; ?>">english</a></li>
		<?php else: ?>
			<li class="<?php echo get_template_part('parts/lang/english-class'); ?>"><a href="http://blog.rocotillo.com/en/">english</a></li>
		<?php endif; ?>

		<?php if ( $rocotillo['spanish'] !== '' ) : ?>
			<li class="<?php echo get_template_part('parts/lang/spanish-class'); ?>"><a href="<?php echo $rocotillohead['spanish']; ?>">español</a></li>
		<?php else: ?>
			<li class="<?php echo get_template_part('parts/lang/spanish-class'); ?>"><a href="http://blog.rocotillo.com/es/">español</a></li>
		<?php endif; ?>
	
		</ul>

	</div>
</div>

<div class="content">
	<div class="margin">
		
		<div class="subnav">
			<?php echo get_template_part('parts/lang/social'); ?>		
			<?php wp_nav_menu( array( 'theme_location' => 'top-navigation' ) ); ?>
		</div>