<?php get_header(); ?>

<div class="page_wrapper">
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
					<iframe class="img-responsive" style="min-height: 315px;" src="https://www.youtube.com/embed/kMLkMonDckY" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="photoshoot tab1 col-lg-4 col-md-4 col-sm-4">
					<iframe class="img-responsive" style="min-height: 315px;" src="https://www.youtube.com/embed/kMLkMonDckY" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="photoshoot tab1 col-lg-4 col-md-4 col-sm-4">
					<iframe class="img-responsive" style="min-height: 315px;" src="https://www.youtube.com/embed/kMLkMonDckY" frameborder="0" allowfullscreen></iframe>
				</div>

				
				<!--add more articles-->
			</div>
		</section>
		<section class="video"></section>
	</main>
</div> <!-- .page_wrapper end -->

<?php get_footer(); ?>