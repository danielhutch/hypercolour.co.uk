<?php 

/*

	Template Name: Mixes Page

*/

get_header(); ?>
<!--
<p>This is the mixes.php file</p>
-->
<div id="mixes">

	<?php

		$args = array(

			'post_type' => 'mixes'

		);

		$the_query = new WP_Query( $args );

	?>
<!-- THESE ARE THE SUBSCRIBE LINKS I CAN’T GET WORKING BECAUSE THERE’S NO XML FILE BEING MADE


	<div id="subscribe" class="clearfix">
			<div id="feedburner">
				<a href="http://feeds.feedburner.com/hypercolourmix">Subscribe with Feedburner &rarr;</a>
			</div>
			<div id="itunes">
				<a href="https://itunes.apple.com/gb/mix/hypercolour-mix/id588451070?mt=2">Subscribe with iTunes &rarr;</a>
			</div>
	</div>
-->
	<div id="tiles" class="clearfix">
		<div id="tileswrap" class="clearfix">
			<?php if ( have_posts() ) : while  ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="tile-wrap">
				<div class="tile">
					<a href='<?php the_permalink() ;?>'>

		<img src="<?php the_field( 'mix_thumbnail' ); ?>" alt=""/>
			<div class="tile-text">	
		<h3>  <?php the_title(); ?> </h3>
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