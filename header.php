<!doctype html>
<!-- Foundation 3 for IE 8 and earlier Solution thanks to this article: http://zurb.com/article/1204/getting-foundation-and-ie8-to-play-nice -->
<!--[if lt IE 9]>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation3/normalize.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation3/foundation.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation3/app.css">
<![endif]-->
<!-- Foundation 4 for IE 9 and earlier -->
<!--[if gt IE 8]><!-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/foundation3/modernizr.foundation.js"></script>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title>D A Y D R E A M • P R O J E C T</title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon.png" />

	<!-- Enable Startup Image for iOS Home Screen Web App -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png" />

	<!-- Startup Image iPad Landscape (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<!-- Startup Image iPad Portrait (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<!-- Startup Image iPhone (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load.png" media="screen and (max-device-width: 320px)" />
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lobster|Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic|Ubuntu:400,400italic,300italic,300,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    


<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<!-- Hello Bar -->
    
 <!-- <script type="text/javascript" src="//www.hellobar.com/hellobar.js"></script>
<script type="text/javascript">
    new HelloBar(7655,5051);
</script> -->

<div class="contain-to-grid">
 <?php //echo do_shortcode( '[responsive_slider]' ); ?>
 
<!-- Foundation 3 for IE 8 and earlier Solution thanks to this article: http://zurb.com/article/1204/getting-foundation-and-ie8-to-play-nice -->
<!--[if lt IE 9]>
<section class="top-bar-section">
<nav class="top-bar">
<div class="small-12 large-8 columns">
<div class="small-12 large-4 columns">
<ul id="menu-footer-nav" class="inline-list right">
<li id="menu-item-716" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-716"><a href="http://daydreamproject.com/portfolio/" title="DAYDREAM•PROJECT" rel="home">DAYDREAM•PROJECT</a></li>
<li id="menu-item-716" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-716"><a href="http://daydreamproject.com/portfolio/experience/">EXPERIENCE</a></li>
<li id="menu-item-719" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-719"><a href="http://daydreamproject.com/portfolio/category/noteworthy/">NEWS</a></li>
<li id="menu-item-717" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-717"><a href="http://daydreamproject.com/portfolio/objective/">OBJECTIVE</a></li>
<li id="menu-item-718" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-718"><a href="http://daydreamproject.com/portfolio/about-2/">ABOUT</a></li>
<li id="menu-item-715" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-715"><a href="http://daydreamproject.com/portfolio/contact/">CONTACT</a></li>
</ul>	
</div>
</div>
  
</section>
</nav>
<![endif]-->
 
 <!-- Foundation 4 for IE 9 and earlier -->
<!--[if gt IE 8]><!-->
	<!-- Starting the Top-Bar -->
	<nav class="top-bar">
	    <ul class="title-area">
	        <li class="name">
	        	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	        </li>
			<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	    </ul>
	    <section class="top-bar-section">
	    <?php
	        wp_nav_menu( array(
	            'theme_location' => 'primary',
	            'container' => false,
	            'depth' => 0,
	            'items_wrap' => '<ul class="left">%3$s</ul>',
	            'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
	            'walker' => new reverie_walker( array(
	                'in_top_bar' => true,
	                'item_type' => 'li'
	            ) ),
	        ) );
	    ?>
	    <ul class="right">
	    	<li class="divider hide-for-small"></li>
	    	<li class="has-form"><?php //get_search_form(); ?></li>
	    </ul>
	    </section>
       
	</nav>
	<!-- End of Top-Bar -->
<!--<![endif]-->
    
    
    
</div>
