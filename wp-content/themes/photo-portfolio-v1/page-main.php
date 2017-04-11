<?php get_header(); ?>

<!-- SLIDER
=================================================== -->
<div id="carousel-top" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<?php if(have_rows('slider')) : ?>
			<?php $data_slide_to = 0; ?>
			<?php while(have_rows('slider')) : ?>
				<?php the_row(); ?>
				<?php 
					if($data_slide_to == 0){
						$active_target = ' class="active"';
					} else{
						$active_target = 'sdf';
					}
				?>
				<li data-target="#carousel-top" data-slide-to="<?php echo $data_slide_to; ?>" <?php echo $active_target; ?>></li>
				<?php $data_slide_to++; ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</ol>
	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
	<?php $firstimg = true; ?> 
		<?php if(have_rows('slider')) : ?>
			<?php while(have_rows('slider')) : ?>
				<?php the_row()?>
				<?php if($firstimg == true){
							$item_active = ' active';
						} else {
							$item_active = '';
				}?>
				<div class="item<?php echo $item_active; ?>">
					<img class="img-responsive" src="<?php echo get_sub_field('slide'); ?>" alt="photo">
					<div class="carousel-caption">
					</div>
				</div>
			<?php $firstimg = false; ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div> <!-- /.carousel-inner -->

  	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-top" role="button" data-slide="prev">
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-top" role="button" data-slide="next">
		<span class="sr-only">Next</span>
	</a>
</div><!--/.carousel -->

<!-- ACCENT MENU
======================================================== -->
<section class="accent-menu container">
	<?php if(have_rows('icons_block')) : ?>
		<?php while(have_rows('icons_block')) : ?>
			<?php the_row(); ?>
			<a href="" class="accent-menu-item icon-camera-1">
				<?php echo get_sub_field('icon_text_left'); ?>
			</a>
			<a href="" class="accent-menu-item icon-camera-streamline-video">
				<?php echo get_sub_field('icon_text_center'); ?>
			</a>
			<a href="" class="accent-menu-item icon-camera-1">
				<?php echo get_sub_field('icon_text_right'); ?>
			</a>
		<?php endwhile; ?>
	<?php endif; ?>
</section>

<!-- ABOUT 
===========================================================-->
<section class="container-fluid about dark">
	<div class="row">
		<div class="about__photo col-lg-6 col-md-6"></div>
		<div class="about__text col-lg-6 col-md-6">
			<h2 class="about__h2 h_divider">О себе <span class="text-muted">Фото и Видео съемка</span></h2>
			<p class="about__p">
				<?php the_field('about_me'); ?>
			</p>
			<a class="button about__button" href="testimonials.html">Отзывы</a>
		</div>
	</div>
</section>


<?php get_footer(); ?>