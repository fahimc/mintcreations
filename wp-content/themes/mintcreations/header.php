<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Mint_Creations
 * @since Mint Creations 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
<script src="<?php echo get_template_directory_uri(); ?>/lib/com/fahimchowdhury/parallaxjs-fc-v0.2-min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/src/main.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/lib/com/greensock/TweenLite.js"></script> 
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/lib/com/greensock/plugins/CSSPlugin.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/lib/com/greensock/plugins/CSSRulePlugin.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/lib/com/greensock/plugins/ScrollToPlugin.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/lib/com/greensock/easing/EasePack.js"></script>
<title><?php wp_title( '|', true, 'right' ); ?></title>

</head>

<body>
	