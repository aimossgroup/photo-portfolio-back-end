
	<?php

get_header(); ?>



	<!-- SLIDER
	=================================================== -->
	<div id="carousel-top" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-top" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-top" data-slide-to="1"></li>
			<li data-target="#carousel-top" data-slide-to="2"></li>
			<li data-target="#carousel-top" data-slide-to="3"></li>
			<li data-target="#carousel-top" data-slide-to="4"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/img-1.jpg" alt="photo">
				<div class="carousel-caption">
	        	<!-- ADD CAPTION IF NEEDED -->
				</div>
	    	</div>
			<div class="item">
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/img-2.jpg" alt="photo">
				<div class="carousel-caption">
				<!-- ADD CAPTION IF NEEDED -->
				</div>
			</div>
			<div class="item">
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/img-3.jpg" alt="photo">
				<div class="carousel-caption">
				<!-- ADD CAPTION IF NEEDED -->
				</div>
			</div>
			<div class="item">
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/img-4.jpg" alt="photo">
				<div class="carousel-caption">
				<!-- ADD CAPTION IF NEEDED -->
				</div>
			</div>
			<div class="item">
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/img-5.jpg" alt="photo">
				<div class="carousel-caption">
				<!-- ADD CAPTION IF NEEDED -->
				</div>
			</div>
				
		</div> <!-- /.carousel-inner -->

	  	<!-- Controls -->
		<a class="left carousel-control" href="#carousel-top" role="button" data-slide="prev">
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-top" role="button" data-slide="next">
			<span class="sr-only">Next</span>
		</a>
	</div><!--/.carousel -->
	<!-- ABOUT 
	===========================================================-->
	<section class="container-fluid about light">
		<div class="row">
			<div class="about__photo col-lg-6 col-md-6"></div>
			<div class="about__text col-lg-6 col-md-6">
				<h2 class="about__h2 h_divider">О себе <span class="text-muted">Фото и Видео съемка</span></h2>
				<p class="about__p">ДОБАВИТЬ ФОТО С БЕЛЫМ ФОНОМ Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, excepturi hic unde eligendi obcaecati ullam sint porro a voluptatem ut natus, laboriosam accusantium dolor nisi sequi maiores at totam impedit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, excepturi hic unde eligendi obcaecati ullam sint porro a voluptatem ut natus, laboriosam accusantium dolor nisi sequi maiores at totam impedit.</p>
				<a class="button about__button" href="testimonials.html">Отзывы</a>
			</div>
		</div>
	</section>
		<!-- ABOUT 
	===========================================================-->
	<section class="container-fluid about dark">
		<div class="row">
			<div class="about__photo col-lg-6 col-md-6"></div>
			<div class="about__text col-lg-6 col-md-6">
				<h2 class="about__h2 h_divider">О себе <span class="text-muted">Фото и Видео съемка</span></h2>
				<p class="about__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, excepturi hic unde eligendi obcaecati ullam sint porro a voluptatem ut natus, laboriosam accusantium dolor nisi sequi maiores at totam impedit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, excepturi hic unde eligendi obcaecati ullam sint porro a voluptatem ut natus, laboriosam accusantium dolor nisi sequi maiores at totam impedit.</p>
				<a class="button about__button" href="testimonials.html">Отзывы</a>
			</div>
		</div>
	</section>
	<!-- PORTFOLIO 
	==========================================================-->
	<section class="container portfolio">
		<h2  class="portfolio__h2 h_divider">Портфолио</h2>
		<div class="row">
			<div class="portfolio__block col-lg-4 col-md-4 col-sm-4">
				<img class="portfolio__img" src="<?php bloginfo('template_url'); ?>/img/wedding-360x360.jpg" alt="...">
				<div class="portfolio__description">
					<a class="button portfolio__button" href="">Свадьба</a>
				</div>
			</div>
			<div class="portfolio__block col-lg-4 col-md-4 col-sm-4">
				<img class="portfolio__img" src="<?php bloginfo('template_url'); ?>/img/love-360x360.jpg" alt="...">
				<div class="portfolio__description">
					<a class="button portfolio__button" href="">Love Story</a>
				</div>
			</div>
			<div class="portfolio__block col-lg-4 col-md-4 col-sm-4">
				<img class="portfolio__img" src="<?php bloginfo('template_url'); ?>/img/church-360x360.jpg" alt="...">
				<div class="portfolio__description">
					<a class="button portfolio__button" href="">Whatever</a>
				</div>
			</div>
		</div>
	</section>

	<!-- FOOTER 
	==========================================================-->
	<?php

    get_footer();
    ?>
    
	