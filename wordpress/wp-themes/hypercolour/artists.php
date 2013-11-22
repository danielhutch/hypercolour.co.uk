<?php 

/*

	Template Name: Artists Page

*/

get_header(); ?>
<!--
<p>This is the artists.php file</p>
-->

<div id="artists">

	<?php

		$args = array(

			'post_type' => 'artists'

		);

		$the_query = new WP_Query( $args );

	?>


	<div id="tiles" class="clearfix">
		<div id="tileswrap" class="clearfix">
			<?php if ( have_posts() ) : while  ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="tile-wrap">
				<div class="tile">
					<a href='<?php the_permalink() ;?>'>
					
						<img src="<?php the_field( 'artist_thumbnail' ); ?>" alt="" />
						<div class="tile-text">	
						<h3>  <?php the_title(); ?> </h2>
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