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

		<ul class="social">
		<li class="tinyletter"><a href="http://tinyletter.com/rocotillo" title="<?php echo get_template_part('parts/lang/subscribe-tinyletter'); ?>"><span>TinyLetter</span></a></li>
		<li class="twitter"><a href="http://twitter.com/rocorecipes" title="<?php echo get_template_part('parts/lang/subscribe-twitter'); ?>"><span>Twitter</span></a></li>
		<li class="pinterest"><a href="http://pinterest.com/rocorecipes/" title="<?php echo get_template_part('parts/lang/subscribe-pinterest'); ?>"><span>Pinterest</span></a></li>
		</ul>
	</div>
</div>

<div class="content">
	<div class="margin">