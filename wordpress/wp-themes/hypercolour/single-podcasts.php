<?php get_header(); ?>
<!--
<p>This is the single-podcasts.php file</p>
-->
<div id="podcast-wrapper">

		<?php if ( have_posts() ) : while  ( have_posts() ) : the_post(); ?>
		
			<h1> <?php the_title(); ?> </h1>
			<div id="podcast-image">
				<img src="<?php the_field('podcast_main'); ?>" alt="" />
			</div>
			
			
			<audio controls>
			 <source src="<?php the_field('podcast_media_url'); ?>"
			         type='audio/mpeg'>
			 <p>Your user agent does not support the HTML5 Audio element.</p>
			</audio>
			
			<br />
			
			<a href="<?php the_field('podcast_media_url'); ?>">Download (right click + save target as)</a>
			
			<br />
			<br />
			
			<p><?php the_field('podcast_description'); ?></p>
			
			<br />
			<br />
			
			
			<p>Tracklist: <br /> <?php the_field('podcast_tracklist'); ?></p>
		
			
		
		<?php endwhile; else: ?>
		
			<p>There are no posts</p>
		
		
		<?php endif; ?>

</div>


<?php get_footer(); ?>