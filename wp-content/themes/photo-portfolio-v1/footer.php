<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package photo-portfolio-v1
 */

?>
<!-- FOOTER 
	==========================================================-->
	<footer class="page_footer">
		<div class="container">
			<div class="brand-name col-lg-3 col-md-3">Александр</div>
			<div class="brand-name callnum col-lg-3 col-md-3"><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+799999999">999-99-99</a></div>
			<div class="page_footer__nav col-lg-6 col-md-6">
				<ul class="social_nav">
					<li><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="http://ok.ru" target="_blank"><i class="fa fa-odnoklassniki"></i></a></li>
					<li><a href="http://vk.com" target="_blank"><i class="fa fa-vk"></i></a></li>
					<li><a href="http://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="" target="_blank"><i class="fa fa-skype"></i></a></li>
					<li><a href="" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
					<li><a href="" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>

				</ul>				
			</div>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<!-- Bootsrap Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- BACK TO TOP BUTTON
	============================================================= -->
	<a href="#" class="back-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	<script type="text/javascript">
		$(window).scroll(function() {
			if ( $(window).scrollTop() > 300 ) {
				$('a.back-to-top').fadeIn('slow');
			} else {
				$('a.back-to-top').fadeOut('slow');
			}
		});
		$('a.back-to-top').click(function() {
			$('html, body').animate({
				scrollTop: 0
			}, 700);
			return false;
		});
	</script>
<?php wp_footer(); ?>

</body>
</html>

