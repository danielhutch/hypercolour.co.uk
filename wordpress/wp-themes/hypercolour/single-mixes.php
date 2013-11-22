<?php get_header(); ?>
<!--
<p>This is the single-mixes.php file</p>
-->
<div id="mix-wrapper">

		<?php if ( have_posts() ) : while  ( have_posts() ) : the_post(); ?>
		
			<h1> <?php the_title(); ?> </h1>
			<div id="mix-image">
				<img src="<?php the_field('mix_main'); ?>" alt="" />
			</div>
			
			
			<br />
			
			<?php the_field('soundcloud_player'); ?>
			
			<br />
			<br />
			
			<?php the_field('mix_info'); ?>
			
			<br />
			<br />
			
		
		
			
		
		<?php endwhile; else: ?>
		
			<p>There are no posts</p>
		
		
		<?php endif; ?>

</div>


<?php get_footer(); ?>