

<?php 

/*

	Template Name: Releases Page

*/

get_header(); ?>
<!--
<p>This is the releases.php file</p>
-->

<div id="releases">



	<?php

		$args = array(

			'post_type' => 'releases'

		);

		$the_query = new WP_Query( $args );

	?>



		<div id="tiles" class="clearfix">
			<div id="tileswrap" class="clearfix">
				<?php if ( have_posts() ) : while  ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="tile-wrap">
					<div class="tile">
						<a href='<?php the_permalink() ;?>'>
							<img src="<?php the_field( 'release_artwork' ); ?>" alt=""/>
							<div class="tile-text">
								<h3>  <?php the_field( 'release_artist' ); ?> &ndash; <?php the_title(); ?></h3>
								
								<h5><?php the_field( 'release_cat_number' ); ?> / <?php the_field( 'release_format' ); ?> / <?php the_field( 'release_date' ); ?></h5>
								
							</div>
						</a>
					</div>
				</div>
					<?php endwhile; else: ?>
			</div>
		</div>
			
			<p>There are no posts</p>
			
			<?php endif; ?>

</div>

		
		<?php get_footer(); ?>