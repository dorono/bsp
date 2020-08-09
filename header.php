<!doctype html>
<html <?php echo themify_get_html_schema(); ?> <?php language_attributes(); ?>>
<head>
<?php
/** Themify Default Variables
 @var object */
	global $themify; ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<!-- reset viewport for mobile -->
	
<meta property="og:url"           content="http://www.bestsaxophonewebsiteever.com/bulletproof-saxophone-playing" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="<?php wp_title(); ?>" />
<meta property="og:description"   content="<? echo get_bloginfo( 'description' ); ?>" />
<meta property="og:image"         content="http://www.bulletproofsaxophoneplaying.com/wp-content/uploads/bsp-website-product-img.jpg" />	
<!-- <meta property="fb:app_id" content="203897113733044" /> -->

	
<link rel="canonical" href="http://www.bestsaxophonewebsiteever.com/bulletproof-saxophone-playing">
<title itemprop="name"><?php wp_title(); ?></title>

<?php
/**
 *  Stylesheets and Javascript files are enqueued in theme-functions.php
 */
?>

	
	
<!-- wp_header -->
<?php wp_head(); ?>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '909075279152522');
fbq('track', "PageView");
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=909075279152522&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>

<body <?php body_class(); ?>>

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=203897113733044&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	

	
	
<?php themify_body_start(); //hook ?>
<div id="pagewrap" class="hfeed site">

	<div id="headerwrap">

		<div id="nav-bar">
			<div class="pagewidth clearfix">
				<?php if (function_exists('wp_nav_menu')) {
					wp_nav_menu(array('theme_location' => 'top-nav' , 'fallback_cb' => '' , 'container'  => '' , 'menu_id' => 'top-nav' , 'menu_class' => 'top-nav'));
				} ?>
			</div>
		</div>
		<!-- /nav-bar -->

		<?php themify_header_before(); //hook ?>
		<header id="header" class="pagewidth">
        	<?php themify_header_start(); //hook ?>

			<hgroup>
				<?php echo themify_logo_image('site_logo'); ?>

				<!--<div class="header-widget" id="header-widget-1">
					<?php /*dynamic_sidebar('header-widget-1'); */?>
				</div>

				<div class="header-widget" id="header-widget-2">
					<?php /*dynamic_sidebar('header-widget-2'); */?>
				</div>-->
			</hgroup>
			<!--/header widget -->


			<?php themify_header_end(); //hook ?>
		</header>
		<!-- /#header -->
        <?php themify_header_after(); //hook ?>

	</div>
	<!-- /#headerwrap -->

	<div id="body" class="clearfix">

	<?php themify_layout_before(); //hook ?>
