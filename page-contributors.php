<?php 

/* Template Name: Contributors */

get_header(); ?>

	<div class="contributors">
		
	<h2><?php the_title(); ?></h2>
	
	<?php
	
	$parent = get_category_by_slug('contributors');
	
	 $catargs = array(
		'parent'                   => $parent->term_id,
		'orderby'                  => 'count',
		'order'                    => 'desc'
	);
	

	$categories=get_categories($catargs);
		foreach($categories as $category) : 

			get_template_part('parts/'.$category->slug); ?>

				<ul class="contributions">
			<?php 
			 $postargs = array(
				'category_name'            => $category->slug,
				'orderby'                  => 'date',
				'order'                    => 'desc'
			);


			$posts=get_posts($postargs);
				foreach($posts as $post) : 
					setup_postdata( $post ); 
					$rocotillo = get_post_meta($post->ID,'_rocotillo',TRUE);
					?>

					<li><a href="<?php the_permalink(); ?>"><?php echo $rocotillo['headline']; ?></a> <span><?php echo $rocotillo['subhead']; ?></span></li> 

				<?php endforeach; ?>

				</ul>

		<?php endforeach; ?>

	</div>

<?php get_footer(); ?>