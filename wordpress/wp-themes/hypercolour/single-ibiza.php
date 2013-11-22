<?php get_header(); ?>
<!--
<p>This is the single-ibiza.php file</p>
-->
<div id="ibiza-wrapper">

		<?php if ( have_posts() ) : while  ( have_posts() ) : the_post(); ?>
		
			<h1> <?php the_title(); ?> </h1>
			<div id="ibiza-image">
				<img src="<?php the_field( 'ibiza_poster' ); ?>" alt="" /> <br />
			</div>
			<p><?php the_field('ibiza_description'); ?></p>
			<a href="http://www.ibiza-spotlight.com/night/promoters/hypercolour_i.htm">Buy Tickets</a>
			
		
		<?php endwhile; else: ?>
		
			<p>There are no posts</p>
		
		
		<?php endif; ?>
		
		
</div>

<?php get_footer(); ?>