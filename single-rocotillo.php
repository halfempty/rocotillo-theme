<?php 

/*
Template Name Posts: Rocotillo Fields
*/

get_header(); ?>
	
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

				<?php $rocotillo = get_post_meta($post->ID,'_rocotillo',TRUE); ?>

				<div class="single">

				<h2><a href="<?php the_permalink(); ?>"><?php echo $rocotillo['headline']; ?></a> <span><?php echo $rocotillo['subhead']; ?></span></h2> 

				<div class="meta">
					<p><?php echo $rocotillo['byline']; ?></p>
					<p class="last"><?php echo $rocotillo['publishline']; ?></p>
				</div>

				<?php the_content(); ?>

				<?php get_template_part('parts/twitterbox') ?>

				</div>

			<?php endwhile; ?>

		<?php else : ?>
			<p>Page not found.</p>
		<?php endif; ?>

<?php get_footer(); ?>