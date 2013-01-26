<?php 

get_header(); 

  wp_reset_postdata();


  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $args = array(
	'posts_per_page' => 5,
	'paged' => $paged
  );

  $list_of_posts = new WP_Query( $args ); 

?>

			<div class="slideshow"><div class="slideinner">
			<?php  while ( $list_of_posts->have_posts() ): $list_of_posts->the_post(); ?>
				<?php $rocotillo = get_post_meta($post->ID,'_rocotillo',TRUE); ?>
				<a class="slideimage" style="display: none;" href="<?php the_permalink(); ?>">
					<img src="<?php echo $rocotillo['thumbnail']; ?>" alt="" />
				</a>					
			<?php endwhile; ?>

			<?php rewind_posts(); ?>

			<div class="slidestage">
			<?php  while ( $list_of_posts->have_posts() ): $list_of_posts->the_post(); ?>
				<?php $rocotillo = get_post_meta($post->ID,'_rocotillo',TRUE); ?>
				<div class="slidetext" style="display: none;">
					<h2><a href="<?php the_permalink(); ?>"><?php echo $rocotillo['headline']; ?></a> <span><?php echo $rocotillo['subhead']; ?></span></h2> 
					<p><?php echo $rocotillo['byline']; ?></p>
				</div>
			<?php endwhile; ?>
			</div>

			</div></div>
<?php get_footer(); ?>