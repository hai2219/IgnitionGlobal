<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php wp_title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
	<div id="wrapper">
		<header id="header">
			<div class="left">
			<h1 id="site-title">
				<a rel="home" href="<?php bloginfo('home') ?>">
						<img width="250" height="100" alt="Logo" src="<?php print get_template_directory_uri() ?>/images/logo.png">
					</a>
								
			</h1>
			</div>
			
			<div class="right">
			<div class="contact">
			<div class="phone">+65 8888 8888</div>
			<div class="email">info@.ignition.com</div>
			
			</div>
			<div class="search"><?php get_sidebar( 'header' ); ?></div>
			
			<nav id="access">
				<a class="nav-show" href="#access">Show Navigation</a>
				<a class="nav-hide" href="#nogo">Hide Navigation</a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary_nav' ) ); ?>
				<div class="clear"></div>
			</nav><!-- #access -->
			</div>
		</header><!-- #header -->