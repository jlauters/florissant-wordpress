<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="title" content="Florissant Database">
    <meta name="description" content="Florissant fossilized plant speciment database project website">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php 
        wp_head(); 

        $site_url = site_url();

        echo <<<EOHTML
<script type="text/javascript">
    siteurl = '{$site_url}';
</script>

EOHTML;

    ?>
</head>

<body <?php body_class(); ?>>

  <div id="eyebrow" class="container-fluid">
      <div class="container">
          <div class="row header-row">
              <div class="col-sm-4 col-xs-10">
                  <a class="homelink" href="<?php echo home_url(); ?>"><h1>Florissant Database</h1></a>
              </div>
              
              <div class="visible-xs col-xs-2 text-left mobile-nav-toggle">
                  <i class="fa fa-bars fa-2x mobile-menu" onclick="toggleMobileNav();"></i>
              </div>

              <div class="col-sm-6 hidden-xs">
                  <nav role="navigation">
				    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu nav nav-pills' ) ); ?>
			      </nav>
              </div>

              <div class="col-sm-2 hidden-xs">
                  <div class="text-right search-button">
                      <i class="fa fa-search fa-2x" onclick="toggleSearchForm();"></i>
                  </div>
              </div>

          </div>

          <div class="row search-form-container">
              <div class="container">
                  <div class="col-sm-10">
                      <form id="searchform" method="get" action="index.php" class="search">
                          <input type="text" name="s" id="s" placeholder="type what you're looking for ....">
                      </form>
                  </div>

                  <div class="col-sm-2 text-right search-button">
                      <i class="fa fa-times fa-2x" onclick="toggleSearchForm();"></i>
                  </div>
              </div>
          </div>


      </div>
  </div>

  <div id="page" class="hfeed site container">

	<header >
		<div class="header-main row">
            <div class="col-sm-12 text-center logo-container">
                <img src="<?php get_theme_image('florissant_bg.jpg'); ?>" class="img-responsive">
            </div>
		</div>

	</header><!-- #masthead -->

	<div id="main" class="site-main">
