<?php 

/*

	Template Name: Contact Page

*/


get_header(); ?>

<!--
<p>This is the contact.php file</p>
-->
	
<div id="contact-wrapper">



	
	<?php if ( have_posts() ) : while  ( have_posts() ) : the_post(); ?>
	
		<h1> <?php the_title(); ?> </h1>
		<?php the_content(); ?>
		
	
	<?php endwhile; else: ?>
	
		<p>There are no posts</p>
	
	
	<?php endif; ?>
	
	
	
</div>

<?php get_footer(); ?>