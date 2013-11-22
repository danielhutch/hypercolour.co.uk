<?php get_header(); ?>
<!--
<p>This is the home.php file serving as the blog listing page</p>
-->
<div id="blog-wrapper">

	<?php if ( have_posts() ) : while  ( have_posts() ) : the_post(); ?>
	
		<?php get_template_part( 'content', 'post'); ?>
	
	<?php endwhile; else: ?>
	
		<p>There are no posts</p>
	
	<?php endif; ?>
	
</div>

<?php get_footer(); ?>



