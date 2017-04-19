<?php get_header(); ?>
		<div class="page_wrapper">
	<!-- SERVICES 
	==========================================================-->
	<main class="contacts_page">
		<div class="container">
			<div class="row">
				<section class="col-lg-6 col-md-6 col-sm-6 contacts_form">
					<h2 class="header_h2 h_divider">Напишите мне</h2>
						<?php the_post(); ?>
						<?php the_content(); ?>
				</section>
				<address class="col-lg-6 col-md-6 col-sm-6 contacts_list">
					<h2 class="header_h2 h_divider">Другие способы со мной связаться:</h2>
					<ul class="contacts">
						<li><a href="" target="_blank"><i class="fa fa-skype"></i><?php the_field('skype'); ?></a></li>
						<li><a href="" target="_blank"><i class="fa fa-whatsapp"></i><?php the_field('whatsapp'); ?></a></li>
						<li><a href="mailto:youremail@email.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i><?php the_field('email'); ?></a></li>
						<li><a href="tel:+799999999"><i class="fa fa-phone" aria-hidden="true"></i><?php the_field('tel_number'); ?></a></li>
					</ul>
					<ul class="social_nav">
						<li><a href="http://facebook.com" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://ok.ru" target="_blank" title="Одноклассники"><i class="fa fa-odnoklassniki"></i></a></li>
						<li><a href="http://vk.com" target="_blank" title="ВКонтакте"><i class="fa fa-vk"></i></a></li>
						<li><a href="http://instagram.com" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</address>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<h2 class="header_h2 h_divider">Где я работаю</h2>
				<p class="region_p"><?php the_field('were_i_work'); ?></p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1237038.978611304!2d38.12263581193958!3d52.73053667062379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x413a0ae76c129325%3A0xffa2891b7835686f!2sLipetsk+Oblast%2C+Russia!5e0!3m2!1sen!2sus!4v1492155122005" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</main>
	</div> <!-- .page_wrapper end -->
<?php get_footer(); ?>