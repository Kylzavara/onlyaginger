<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(' | ', true, 'right'); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="stylesheet" href="/wordpress/wp-content/themes/blankslate/style2.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="/wordpress/wp-content/themes/blankslate/reset.css" type="text/css" media="screen"/>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header>
<div id="branding">
<div id="site-title"><?php if ( is_singular() ) {} else {echo '<h1>';} ?><a href="<?php echo home_url() ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a><?php if ( is_singular() ) {} else {echo '</h1>';} ?></div>
<p id="site-description"><?php bloginfo( 'description' ) ?></p>
</div>
<nav>

<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>
</header>
<div id="container">
<header>
	<div id="social">
		<div id="social_container">
			<ul>
				<li id="twitter"><a href="#"></a></li>
				<li id="facebook"><a href="#"></a></li>
			</ul>
		</div>	
	</div>
	<div class="clear"></div>
	<div id="nav">
		<div class="container">
			<div id="ribbon">
				<div id="ribbon_left"></div>
				<div id="ribbon_pattern"></div>
				<div id="ribbon_right"></div>
			</div>
			<div id="logo">
				<a href="index.php"><img src="/wordpress/wp-content/themes/blankslate/images/logo.png" alt="logo"/></a>
			</div>
		</div>
	</div>
</header>