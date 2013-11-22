<?php get_header(); ?>

<div id="blog-wrapper">



		<?php if ( have_posts() ) : while  ( have_posts() ) : the_post(); ?>
		
			<?php get_template_part( 'content', 'post'); ?>
		
		<?php endwhile; else: ?>
		
			<p>There are no posts</p>
		
		<?php endif; ?>
		


</div>

<?php get_footer(); ?>

