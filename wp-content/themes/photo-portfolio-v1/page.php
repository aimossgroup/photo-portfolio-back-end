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


<?php the_post(); ?>
<?php the_content(); ?>










<?php get_footer(); ?>