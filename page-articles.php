<?php 

/* Template Name: Articles */

get_header(); 

  wp_reset_postdata();
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $args = array(
	'paged' => $paged
  );

  $list_of_posts = new WP_Query( $args ); 


 $i = 0; ?>


			<?php  while ( $list_of_posts->have_posts() ): $list_of_posts->the_post(); ?>
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

<?php get_footer(); ?>