<?php get_header(); ?>
<div class="page_wrapper">
	<!-- PORTFOLIO 
	==========================================================-->
	<main class="portfolio_page container">
		<section class="portfolio_tabs">
			<input type="radio" name="portfolio_tab" id="tab-1" checked>
			<input type="radio" name="portfolio_tab" id="tab-2">
			<input type="radio" name="portfolio_tab" id="tab-3">
			<input type="radio" name="portfolio_tab" id="tab-4">
			<input type="radio" name="portfolio_tab" id="tab-5">
			<nav class="tab_controls"">
				<label for="tab-1">Свадьба</label><label for="tab-2">Love Story</label><label for="tab-3">Венчание и Крещение</label><label for="tab-4">Мероприятия</label><label for="tab-5">Видеосъемка</label>
			</nav>
			<div class="gallery_wrapper row">
				<div class="photoshoot tab1 col-lg-4 col-md-4 col-sm-4">
					<img class="img-responsive" src="img/ph-1.jpg">
					<div class="photoshoot_text">
						<p class="photoshoot_description"><b>Марина</b> + <b>Александр</b></p>
						<a href="" class="hover_link">Посмотреть</a>
					</div>
				</div>
				<div class="photoshoot tab1 col-lg-4 col-md-4 col-sm-4">
					<img class="img-responsive" src="img/ph-2.jpg">
					<div class="photoshoot_text">
						<p class="photoshoot_description"><b>Настя</b> + <b>Игорь</b></p>
						<a href="" class="hover_link">Посмотреть</a>
					</div>
				</div>
				<div class="photoshoot tab1 col-lg-4 col-md-4 col-sm-4">
					<img class="img-responsive" src="img/ph-3.jpg">
					<div class="photoshoot_text">
						<p class="photoshoot_description"><b>Павел</b> + <b>Елена</b></p>
						<a href="" class="hover_link">Посмотреть</a>
					</div>
				</div>
				<div class="photoshoot tab1 col-lg-4 col-md-4 col-sm-4">
					<img class="img-responsive" src="img/ph-4.jpg">
					<div class="photoshoot_text">
						<p class="photoshoot_description"><b>Иван</b> + <b>Мария</b></p>
						<a href="" class="hover_link">Посмотреть</a>
					</div>
				</div>
				<div class="photoshoot tab5 col-lg-4 col-md-4 col-sm-4">
					<video src="vid/..."></video>
					<div class="photoshoot_text">
						<p class="photoshoot_description"><b>Венчание</b></p>
						<a href="" class="hover_link">Посмотреть</a>
					</div>
				</div>
				
				<!--add more articles-->
			</div>
		</section>
		<section class="video"></section>
	</main>
</div> <!-- .page_wrapper end -->

<?php get_footer(); ?>