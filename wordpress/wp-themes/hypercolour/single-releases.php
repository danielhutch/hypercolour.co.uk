<?php get_header(); ?>
<!--
<p>This is the single-releases.php file</p>
-->
<div id="release-wrapper">

	<?php if ( have_posts() ) : while  ( have_posts() ) : the_post(); ?>

		
		<h1><?php the_field('release_artist'); ?> &ndash; <?php the_title(); ?></h1>

			<div id="release-artwork">
				<img src="<?php the_field( 'release_artwork' ); ?>" alt="" /> <br />
			</div>
			<div id="release-info">
				<h5>Catalogue Number:</h5><p> <?php the_field('release_cat_number'); ?></p>
				<h5>Formats:</h5><p> <?php the_field('release_format'); ?></p>
				<h5>Release Date:</h5><p> <?php the_field('release_date'); ?></p>
				<div id="buy-button">
					<a href="<?php the_field('buy_beatport'); ?>">Buy this release &rarr;</a>
				</div>

			</div>


		<br />
		<?php the_field('soundcloud_player'); ?>
		<br />
		<br />

		<div id="release-description">
			<h5>Tracklist:</h5><p> <?php the_field('tracklist'); ?></p>
			<br>
			<h5>Release Info:</h5><p><?php the_field('release_description'); ?></p>
		</div>
		

	<?php endwhile; else: ?>

		<p>There are no posts</p>


	<?php endif; ?>


</div>

<?php get_footer(); ?>