<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>" >

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	
	<!-- <meta name="viewport" content="width=device-width"> -->
	<meta name="viewport" content="width=1024px;">
	
	
	<link rel="shortcut icon" href="/favicon.png?v=2" type="image/x-icon">
	
	<script src="http://fast.fonts.net/jsapi/d67145d5-efca-4afd-bee6-dc076ee60e26.js"></script>
	
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/SSUhtml5audio.css">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" >

	<script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/vendor/css_browser_selector.js"></script>


<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<!--[if lt IE 7]>
	  	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  	<![endif]-->

<div class="anchor-container">
	<div class="header-container">
		<header class="clearfix">
			<div class="nav-container">
				<nav class="clearfix">
					<?php wp_nav_menu( array( 'container_class' => 'main-menu', 'theme_location' => 'primary' ) ); ?>
					<div class="logo"></div>
					<form id="searchform" action="<?php bloginfo('home'); ?>/" method="get">
						<input class="inlineSearch" type="text" name="s" value="search" onblur="if (this.value == '') {this.value = 'search';}" onfocus="if (this.value == 'search') {this.value = '';}" />
						<input type="hidden" name="post_type" value="product" />
						<input class="inlineSubmit" id="searchsubmit" type="submit" alt="Search" value=" " />
					</form>
				</nav>
			</div>
		</header>
	</div>