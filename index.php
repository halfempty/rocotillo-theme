<?php get_header(); ?>

	<ul class="languages">
		<li class="<?php echo get_template_part('parts/lang/english-class'); ?>"><a href="http://blog.rocotillo.com/en/">english</a></li>
		<li class="<?php echo get_template_part('parts/lang/spanish-class'); ?>"><a href="http://blog.rocotillo.com/es/">español</a></li>
	</ul>
	
		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>
				<?php $rocotillo = get_post_meta($post->ID,'_rocotillo',TRUE); ?>
					<div class="itemwrapper">
						<?php if ( $rocotillo['format'] == 'quick') : ?>
							<div class="quickitem">
								<div class="thumbbox">

									<a href="<?php the_permalink(); ?>"><img src="<?php echo $rocotillo['thumbnail']; ?>" alt="" /></a>
								</div>

								<div class="textbox">
									<h6><?php echo get_template_part('parts/lang/quickbite'); ?></h6>
									<h2><a href="<?php the_permalink(); ?>"><?php echo $rocotillo['headline']; ?></a></h2> 

								<div class="meta">
									<p><?php echo $rocotillo['byline']; ?></p>
									<p class="last"><?php echo $rocotillo['publishline']; ?></p>
								</div>
								</div>

							</div>
				
						<?php else: ?>
							<div class="listingitem">
								<div class="thumbbox"><a href="<?php the_permalink(); ?>"><img src="<?php echo $rocotillo['thumbnail']; ?>" alt="" /></a></div>

								<div class="textbox">
								<h2><a href="<?php the_permalink(); ?>"><?php echo $rocotillo['headline']; ?></a> <span><?php echo $rocotillo['subhead']; ?></span></h2> 

								<div class="meta">
									<p><?php echo $rocotillo['byline']; ?></p>
									<p class="last"><?php echo $rocotillo['publishline']; ?></p>
								</div>
								</div>

							</div>
					
						<?php endif; ?>

					</div>

			<?php endwhile; ?>

		<?php else : ?>
			<p>Page not found.</p>
		<?php endif; ?>

<?php get_footer(); ?>