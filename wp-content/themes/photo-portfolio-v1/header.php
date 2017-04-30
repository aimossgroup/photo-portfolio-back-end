<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="свадебный,фотограф,семейное фото, липецк,липецкая область,фотокнига,видеосъемка">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Фото и видео съемка в Липецке">
    <meta name="author" content="Александр Волков">
	<title>Фотограф в Липецке - Александр</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Custom css -->
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Infant:400,400i&amp;subset=cyrillic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic" rel="stylesheet">
	<link href="https://file.myfontastic.com/xKMz3zpWFsBMUrsHAXm7CZ/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/styles.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/0a05054cbd.js"></script>
    <!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php wp_head(); ?>
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
				<a class="navbar-brand" href="index.html">Александр Волков</a>
	    	</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
				<?php  wp_nav_menu( array(
                        'theme_location'  => 'navbar',
                        'menu'            => 'Menu', 
                        'container'       => 'div', 
                        'container_class' => 'collapse navbar-collapse', 
                        'container_id'    => 'bs-example-navbar-collapse-1',
                        'menu_class'      => 'nav navbar-nav', 
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    ) );
?>
<!--			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">

					<li class="active"><a href="#">Главная <span class="sr-only">(current)</span></a></li>
					<li><a href="portfolio.html">Портфолио</a></li>
					<li><a href="prices.html">Услуги и Цены</a></li>
					<li><a href="testimonials.html">Отзывы клиентов</a></li>
					<li><a href="contacts.html">Контакты</a></li>
					<li>
						<ul class="social_nav">
							<li><a href=""><i class="fa fa-skype"></i></a></li>
							<li><a href="http://vk.com" target="_blank"><i class="fa fa-vk"></i></a></li>
							<li><a href=""><i class="fa fa-whatsapp"></i></a></li>
						</ul>				
					</li>  -->      
				</ul>
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
