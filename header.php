<!doctype html>

<!--[if lt IE 7]>
<html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]>
<html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]>
<html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">

	<?php // Google Chrome Frame for IE ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title(''); ?></title>

	<?php // mobile meta (hooray!) ?>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<!--[if IE]>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<![endif]-->
	<?php // or, set /favicon.ico for IE10 win ?>
	<meta name="msapplication-TileColor" content="#f01d4f">
	<meta name="msapplication-TileImage"
	      content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php // wordpress head functions ?>
	<?php wp_head(); ?>
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
	<?php // end of wordpress head ?>

	<?php // drop Google Analytics Here ?>
	<?php // end analytics ?>

</head>

<body <?php body_class(); ?>>
	<div class="navbar navbar-fixed-top <?php if ( is_user_logged_in() ) { echo 'logged-in'; } ?> ">

		<div class="navbar-inner">

			<div class="container">

				<a class="navbar-btn visible-phone visible-tablet" data-toggle="collapse" data-target=".nav-collapse"
				   href="#main-menu-panel">
						<i class="icon-align-justify"></i>
				</a>

			<a class="brand" href="<?php echo home_url(); ?>"></a>

			<ul class="nav">
				<li>
					<a class="p2pu-tab" href="#">
						<i class="icon-chevron-sign-down p2pu-tab-icon"></i>
					</a>
				</li>
			</ul>

			<?php wp_nav_menu(
				array(
					'theme_location' => 'Main Nav',
					'container_class' => 'nav-collapse collapse mindevices-side-menu',
					'menu_class' => 'nav'
				)); ?>

			<ul class="nav pull-right">

				<li>

			        <a target="_blank" href="https://twitter.com/p2pu" class="rsslink">
					    <i class="icon-twitter"></i>
				    </a>

			    </li>

				<li>

			        <a target="_blank" href="https://www.facebook.com/P2PUniversity" class="rsslink">
					    <i class="icon-facebook"></i>
				    </a>

			    </li>

				<li>

					<a target="_blank" href="<?php echo apply_filters( 'pagelines_branding_rssurl', get_bloginfo('rss2_url') );?>" class="rsslink">
						<i class="icon-rss"></i>
					</a>

				</li>




            </ul>

		</div>

	</div>

</div>

