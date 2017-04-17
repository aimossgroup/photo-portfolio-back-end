<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package photo-portfolio-v1
 */

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<?php wp_head(); ?> 
	<meta charset="UTF-8">
	<meta name="keywords" content="свадебный,фотограф,семейное фото, липецк,липецкая область,фотокнига,видеосъемка">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="Aimoss">
	<title><?php bloginfo('name'); ?> - <?php the_title(); ?></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Custom css -->
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Infant:400,400i&amp;subset=cyrillic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic" rel="stylesheet">
	<link href="https://file.myfontastic.com/xKMz3zpWFsBMUrsHAXm7CZ/icons.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/styles.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/0a05054cbd.js"></script>
	<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>
<body>
	<!-- NAV BAR 
	===================================================-->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Александр Волков</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<!-- Код ниже ставиться на место соответствующего кода bootstrap -->
				<?php /* Primary navigation */	
					wp_nav_menu( array(
						'menu' => 'top_menu',
						'depth' => 0,
						'container' => false,
						'menu_class' => 'nav navbar-nav',
						'walker' => new wp_bootstrap_navwalker())
					);
				 ?>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav> 
	<!--NAVBAR transformation on scroll ========================================== -->
	<script>
		$(window).scroll(function() {
			if ($(this).scrollTop() > 100){ // Set position from top to add class
			$('.navbar').addClass("shrink");
			} else {
			$('.navbar').removeClass("shrink");
			}
		});
	</script>
