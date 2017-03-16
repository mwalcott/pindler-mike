<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="google-site-verification" content="aZF8BlWumXfiYF3nVAQGcYFYPaVnZ85AD9XlA5jnqp8" />
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimumscale=1.0, maximum-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-title" content="Pindler">
<title><?php wp_title(' | ', true, 'right'); ?></title>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<link rel="shortcut icon" sizes="196x196" href="<?php echo get_stylesheet_directory_uri(); ?>/pindler-bookmark-icon.jpg">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/pindler-bookmark-icon.jpg">
<link rel="profile" href="http;/gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="stylesheet" href="http://www.pindler.com/wp-content/plugins/shortcodes-ultimate/assets/css/content-shortcodes.css?ver=4.9.0" type="text/css" />
<!--<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />-->
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
<?php if (is_front_page()) { ?>
<script>
var ath = addToHomescreen({
    skipFirstVisit: true,
    startDelay: 0,
    lifespan: 20,
    displayPace: 1440,
    maxDisplayCount: 1,
    message: 'Add our website to your home screen: tap %icon and then "Add to Home Screen"'
});
</script>
<?php } ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper">
		<div id="header">
			<div class="company-logo content">
				<div class="grid-100">
					<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Pindler-Logo.png" alt="Pindler" /></a>
					<img class="nav-mobile-trigger" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-menu.png" />
				</div>
			</div><!-- .company-logo -->
			<div id="navigation">
				<div class="content">
					<div class="grid-100">
						<div class="nav-containers">
							<img class="mobile-nav-close" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-nav-close.png" />
							<div class="nav-login-container">
								<?php wp_nav_menu( array( 'theme_location' => 'nav-login', 'menu_class' => 'nav-login', 'container' => '' ) ); ?>
								<div class="login-popup">
					<form method="POST" action="/cgi-bin/FCcgi.exe?w3exec=custportal&w3serverpool=cust&callingpage=logon" name="Form1">
						<div class="login-user"><input type="text" name="w3user" size="9" placeholder="Account #" /></div>
						<div class="login-pass"><input type="password" name="w3userpass" size="25" placeholder="Password" /></div>
						<div class="login-submit"><input type="submit" value="Login" /></div>
					</form>
		<a class="brown-button" href="/sign-up/">Register for Online Account</a>
<a class="brown-button" href="/login/">Forgot Password?</a>
	</div>							</div>
							<div class="nav-main-container">
								<?php wp_nav_menu( array( 'theme_location' => 'nav-website', 'menu_class' => 'nav-website', 'container' => '' ) ); ?>
							</div>
						</div>
					</div>
				</div>
			</div><!-- #navigation -->
		</div><!-- #header -->
		<div id="main" class="<?php if (is_front_page()) { echo 'home-page'; } else { echo 'inside-page'; } ?> clearfix">