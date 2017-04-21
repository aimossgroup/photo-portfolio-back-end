<?php get_header(); ?>

	<div class="page_wrapper">
	<!-- SERVICES 
	==========================================================-->
	<main class="services">
		<section class="container services_description">
			<h2  class="header_h2 h_divider">Фотосессии</h2>
			<div class="row">
				<article class="col-lg-6 col-md-6 col-sm-6 services__photo">
					<h3 class="header_h3">Свадебная съемка</h3>
					<?php the_field('svadebnaya'); ?>
				</article>
				<article class="col-lg-6 col-md-6 col-sm-6 services__photo">
					<h3 class="header_h3">Съемка венчания или крещения</h3>
					<?php the_field('venchanie_kreshenie'); ?>
				</article>
			</div>
			<div class="row">
				<article class="col-lg-6 col-md-6 col-sm-6 services__photo">
					<h3 class="header_h3">Love Story или семейная съемка</h3>
					<?php the_field('love_story_family'); ?>
				</article>
				<article class="col-lg-6 col-md-6 col-sm-6 services__photo">
					<h3 class="header_h3">Съемка мероприятий</h3>
					<?php the_field('meropriyatiya'); ?>
				</article>
			</div>
		</section>

		<section class="services__video services_description" id="servicesvideo">
			<h2 class="video_h2 h_divider">Видеосъемка</h2>
			<div class="container">
				<div class="col-lg-6 col-md-6 col-sm-6 text_wrapper">
					<?php the_field('video_opisanie'); ?>
				</div>
				<video class="col-lg-6 col-md-6 col-sm-6 col-xs-12" controls poster="">
					<source src="<?php the_field('video_rolik'); ?>" type=video/mp4>
				</video>
			</div>
		</section>

		<section class="container services_description" id="servicesextras">
			<h2  class="header_h2 h_divider">Дополнительные услуги</h2>
			<div class="row">
				<article class="col-lg-6 col-md-6 col-sm-6 services__extras">
					<h3 class="header_h3">Фотокнига</h3>
					<?php the_field('fotokniga'); ?>
				</article>
				<article class="col-lg-6 col-md-6 col-sm-6 services__extras">
					<h3 class="header_h3">Конвертирование любых видео форматов</h3>
					<?php the_field('convertirovanie'); ?>
				</article>
			</div>
			<div class="row">
				<article class="col-lg-6 col-md-6 col-sm-6 services__extras">
					<h3 class="header_h3">Создание слайд-шоу</h3>
					<?php the_field('slideshow'); ?>
				</article>
				<article class="col-lg-6 col-md-6 col-sm-6 services__extras">
					<h3 class="header_h3">Свадебный сайт</h3>
					<?php the_field('swdebniy_sait'); ?>
				</article>
			</div>
		</section>
		<aside class="container aside_note services_description">
			<p>С нетерпением жду возможности с Вами работать!<br>Свяжитесь со мной удобным для Вас способом <span class="icon-forward"></span></p>
		</aside>
	</main>
	</div> <!-- .page_wrapper end -->
<?php get_footer(); ?>