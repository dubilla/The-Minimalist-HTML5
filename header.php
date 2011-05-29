<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php bloginfo('name'); if ( is_single() ) { _e('&raquo; Blog Archive', 
'minimalism'); } wp_title(); ?></title>
  <meta name="description" content="web development, html, css, javascript, html5, css3, web design, dan ubilla, books, movies, music">
  <meta name="author" content="Dan Ubilla">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media="all" -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
  <link rel="alternate" type="application/rss+xml" title="<?php printf(__('%s RSS Feed', 'minimalism'), get_bloginfo('name')); ?>" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="<?php printf(__('%s Atom Feed', 'minimalism'), get_bloginfo('name')); ?>" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <!-- All JavaScript at the bottom, except for Modernizr and Respond.
     Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries -->
  <!-- Don't forget to go ahead and make sure this works in all environments [DBU 05/29/2011]  -->
  <script src="http://localhost/clients/danubilla/0-js/libs/modernizr-1.7.min.js"></script>
  <script src="http://localhost/clients/danubilla/0-js/libs/respond.min.js"></script>

  <?php wp_head(); ?>
</head>
<body>
<div id="outer">
  <div id="wrap">
    <div id="navbar">
    	<ul id="primary-nav">
    		<li><a href="<?php echo get_option('home'); ?>/">Home</li>
    		<?php $categories = get_categories(array('type'=>'post'));
    			foreach($categories as $category) { ?>
       <li><a href="<?php echo get_category_link( $category->term_id ); ?>" title="<?php echo sprintf( __( "View all posts in %s" ), $category->name ); ?>"><?php echo $category->name; ?></a></li>
    
    		<?php } ?>
    	</ul>
    	<ul id="secondary-nav">
    		<li>
    			<a href="/portfolio">Portfolio</a>
          </li>
    	</ul>
    </div>
    <div id="page">
    
    
    <div id="header">
    	<div id="headerimg">
    		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
    		<div class="description"><?php bloginfo('description'); ?></div>
    	</div>
    </div>