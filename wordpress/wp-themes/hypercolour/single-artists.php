<?php get_header(); ?>
<!--
<p>This is the single-artists.php file</p>
-->
<div id="artist-wrapper">

	<?php if ( have_posts() ) : while  ( have_posts() ) : the_post(); ?>

		<h1> <?php the_title(); ?> </h1>
		<div id="artist-image">
			<img src="<?php the_field( 'artist_image' ); ?>" alt="" /> <br />
		</div>
		<a href="<?php the_field('artist_soundcloud_url'); ?>">Artist Soundcloud</a> <br />
		<br />
		<a href="<?php the_field('artist_ra_url'); ?>">Artist Resident Advisor</a> <br />
		<br />
		<!--<a href="<?php the_field('artist_web_url'); ?>">Artist Website</a> <br />-->
		<p><?php the_field('artist_bio'); ?></p>

		

	<?php endwhile; else: ?>

		<p>There are no posts</p>


	<?php endif; ?>

</div>

<?php get_footer(); ?>