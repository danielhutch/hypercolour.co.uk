<?php 

/*

	Template Name: About Page

*/


get_header(); ?>

<!--
<p>This is the about.php file</p>
-->
	

<div id="about">
	
	<div id="about-wrapper">


		
		<?php if ( have_posts() ) : while  ( have_posts() ) : the_post(); ?>
		
			<h1> <?php the_title(); ?> </h1>
			<?php the_content(); ?>
			
		
		<?php endwhile; else: ?>
		
			<p>There are no posts</p>
		
		
		<?php endif; ?>
		
		
		
	</div>

</div>

<?php get_footer(); ?>