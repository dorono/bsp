<!doctype html>
<html <?php echo themify_get_html_schema(); ?> <?php language_attributes(); ?>>
<head>
<?php
/** Themify Default Variables
 @var object */
	global $themify; ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<!-- reset viewport for mobile -->


<title itemprop="name"><?php wp_title(); ?></title>

<?php
/**
 *  Stylesheets and Javascript files are enqueued in theme-functions.php
 */
?>

<!-- wp_header -->
<?php wp_head(); ?>


<?php if(is_page( 2397 )) { // facebook conversion tracking code ?>
	<script type="text/javascript">
		var fb_param = {};
		fb_param.pixel_id = '6006642379059';
		fb_param.value = '0.00';
		(function(){
			var fpw = document.createElement('script');
			fpw.async = true;
			fpw.src = '//connect.facebook.net/en_US/fp.js';
			var ref = document.getElementsByTagName('script')[0];
			ref.parentNode.insertBefore(fpw, ref);
		})();
	</script>
	<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/offsite_event.php?id=6006642379059&amp;value=0" /></noscript>
<?php } ?>


</head>

<body <?php body_class(); ?>>

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
