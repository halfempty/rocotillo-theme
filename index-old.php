<?php get_header(); ?>
	
		<?php if (have_posts()) : ?>
			<?php $i = 0; ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php $rocotillo = get_post_meta($post->ID,'_rocotillo',TRUE); ?>
				<?php if ( $i === 0) {
					$class = "first";
				} elseif ( $i === 1 ) {
					$class = "second";
				} else {
					$class = "third";			
				} ?>
					<div class="listingitem <?php echo $class; ?>">
						<div class="thumbbox"><a href="<?php the_permalink(); ?>"><img src="<?php echo $rocotillo['thumbnail']; ?>" alt="" /></a></div>

						<div class="textbox">
						<h2><span><?php echo $rocotillo['subhead']; ?></span> <a href="<?php the_permalink(); ?>"><?php echo $rocotillo['headline']; ?></a></h2> 

						<div class="meta">
							<p><?php echo $rocotillo['byline']; ?></p>
						</div>
						</div>

					</div>
					
					<?php 
					if ( $i === 2 ) {
						$i = 0;
					} else {
						$i++;
					} 
					?>
			<?php endwhile; ?>

		<?php else : ?>
			<p>Page not found.</p>
		<?php endif; ?>

<?php get_footer(); ?>