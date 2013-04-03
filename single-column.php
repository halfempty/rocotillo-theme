<?php 

/*
Template Name Posts: Simple Template
*/

get_header(); ?>
	
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

				<?php $rocotillo = get_post_meta($post->ID,'_rocotillo',TRUE); ?>


				<div class="columntitle">
					<a href="">The Title of Krystal&rsquo;s Column</a>
				</div>

				<div class="simple">

				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 

				<p class="postdate">By <strong>Krystal Halfmann Mullins</strong>. Posted <?php the_date(); ?>.</p>

				<?php the_content(); ?>

				<?php comments_template(); ?>


				</div>

				<div class="simplesidebar">

					<?php get_template_part('parts/krystal'); ?>

					<h3>My Links</h3>

					<ul>
						<li><a href="">My blog, Home Made Austin</a></li>
						<li><a href="">Home Made Austin on Twitter</a></li>
						<li><a href="">Home Made Austin on Pinterest</a></li>
						<li><a href="">Home Made Austin on Facebook</a></li>
					</ul>

					<?php get_template_part('parts/twitterbox') ?>
				</div>

			<?php endwhile; ?>

		<?php else : ?>
			<p>Page not found.</p>
		<?php endif; ?>

<?php get_footer(); ?>