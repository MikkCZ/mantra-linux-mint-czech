<?php
/**
 * The Header
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Cryout Creations
 * @subpackage mantra
 * @since mantra 0.5
 */
 ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
<?php  	cryout_seo_hook(); ?>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="https://plus.google.com/114676587388452854332" rel="publisher"/>
<link href='http://fonts.googleapis.com/css?family=Titillium+Web&subset=latin-ext' rel='stylesheet' type='text/css'>
<?php
 	cryout_header_hook();
	wp_head(); 
?>
	<?/*<script type="text/javascript">
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-39944089-1', 'linux-mint-czech.cz');
		ga('send', 'pageview');
	</script>*/?>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-39944089-1']);
		_gaq.push(['_trackPageview']);
		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; 

		ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';

		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head>
<body <?php body_class(); ?>>

<?php cryout_body_hook(); ?>

<div id="wrapper" class="hfeed">

<?php cryout_wrapper_hook(); ?>

<header id="header">
	<div id="masthead">
		<div id="branding" role="banner" >
			<?php cryout_branding_hook(); ?>
			
			<!-- +1 button  -->
			<div style="position: relative; left: 91%; top: 10px;">
				<div class="g-plusone" data-href="http://www.linux-mint-czech.cz/"></div>
			</div>
			<!-- end +1 button -->
			
			<div style="clear:both;"></div>
		</div><!-- #branding -->

		<!--<nav id="access .menu-bg1">-->
      	<nav id="access" class="jssafe" role="navigation">

			<?php cryout_access_hook();?>			

			<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
				<div>
					<input type="text" size="10" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
					<input type="submit" id="searchsubmit" value="Hledat na webu" class="btn" />
				</div>
			</form>

			</nav><!-- #access -->
		</div><!-- #masthead -->
	<div style="clear:both;"> </div>

</header><!-- #header -->
<div id="main">
	<div  id="forbottom" >
		<?php cryout_forbottom_hook(); ?>

		<div style="clear:both;"> </div>
		
		<?php cryout_breadcrumbs_hook();?>
							
