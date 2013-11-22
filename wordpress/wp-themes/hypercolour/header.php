<!DOCTYPE html>
<html>
<head>
	<title><?php
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;
	
		wp_title( '|', true, 'right' );
	
		// Add the blog name.
		bloginfo( 'name' );
	
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
	
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
	
		?></title>
	<meta charset="utf-8" />
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
	<script type="text/javascript" src="_includes/script/iphone_viewport_scaling.js"></script>
	<!-- iphone Safari Viewport Scaling Bug: http://webdesignerwall.com/tutorials/iphone-safari-viewport-scaling-bug -->
	
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/normalize.css" />	
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" language="javascript" charset="utf-8" src="<?php bloginfo('template_directory'); ?>/menu.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/jquery.videobackground.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44695057-1', 'hypercolour.co.uk');
  ga('send', 'pageview');

</script>

</head>

<body>


            <header id="topnav">
              <div id="nav">
                <ul>
                	<?php wp_nav_menu( array( 'items_wrap' => '%3$s' ) ); ?>
                	<!--  http://codex.wordpress.org/Function_Reference/wp_nav_menu -->     
                </ul>
              </div>
              <a href="#" id="navbtn">Nav Menu</a>        
               <div id="logo">
              	<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/hypercolour_logo.svg"> </a>
      			</div>	
      
            </header><!-- @end #topnav -->


<div id="page" class="clearfix">