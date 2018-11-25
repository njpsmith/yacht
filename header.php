<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->


	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png?v=2">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		
		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>
		<?php /*// drop Google Analytics Here ?>
		<?php */ // end analytics ?>



		<!--[if IE 8 ]> 
			<style>
				
			</style>
		<![endif]-->

    	<!--[if IE 9 ]> 
			<style>
				
			</style>
		<![endif]-->
	</head>

		
	<body <?php body_class();?> itemscope itemtype="http://schema.org/WebPage">

		<div class="main-container">

			<header class="l-header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
				<div class="inner-header max-width-inner">

          <div class="header-left">
            <div class="logo" itemscope itemtype="http://schema.org/Organization">
              <a href="<?php echo home_url(); ?>" rel="nofollow">
                <img src="<?php echo get_template_directory_uri(); ?>/library/images/Icons/Homepage/titan-logo-white@2x.png" alt="SUPERYACHT COMMUNICATION SPECIALISTS">
              </a>
            </div>
          </div>

          <div class="header-right">
            <div class="hamburger js-hamburger">
              <img src="<?php echo get_template_directory_uri(); ?>/library/images/Icons/Navigation/nav-menu@2x.png" alt="MENU">
            </div>
          </div>
				</div>
			</header>


			<nav class="l-nav">
				<div class="max-width-inner">
					<div class="inner-header">
	          <div class="header-left">
	            <div class="logo" itemscope itemtype="http://schema.org/Organization">
	              <a href="<?php echo home_url(); ?>" rel="nofollow">
	                <img src="<?php echo get_template_directory_uri(); ?>/library/images/Icons/Homepage/titan-logo@2x.png" alt="SUPERYACHT COMMUNICATION SPECIALISTS">
	              </a>
	            </div>
	          </div>

	          <div class="header-right">
	            <div class="hamburger js-hamburger">
	              <img src="<?php echo get_template_directory_uri(); ?>/library/images/Icons/Navigation/nav-close@2x.png" alt="CLOSE">
	            </div>
	          </div>
	        </div>

					<div class="l-nav__items">
						<ul>
							<li><a href="">home</a></li>
							<li><a href="">about</a></li>
							<li><a href="">services</a></li>
							<li><a href="">projects</a></li>
							<li><a href="">recommendations</a></li>
							<li><a href="">team</a></li>
							<li><a href="">contact</a></li>
						</ul>

						<div class="l-nav__social">
							<a href="https://www.instagram.com/titan.marine.networks" target="_blank" class="l-insta"></a>
							<a href="https://www.linkedin.com/company/titan-marine-networks/" target="_blank" class="l-linked-in"></a>
							<a href="https://twitter.com/titanmarine/" target="_blank" class="l-twitter"></a>
						</div>
					</div>
				</div>
			</nav>

				