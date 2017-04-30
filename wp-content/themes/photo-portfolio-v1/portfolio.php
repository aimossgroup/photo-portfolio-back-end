<?php
/*
Template Name: Шаблон Портфолио
*/
 get_header(); ?>
	<!--	<div class="submenu-wrapper">-->
        <ul class="submenu">
            <?php
        $cat = array (2,3,5,6,7);	 /* массив из ID рубрик, которые будут выводиться, в другом Wordpress'е они могут быть другими. */
        /*Эти ID в консоли не отображаются, их показывает функция get_cat_ID( $cat_name )*/
        $args = array(
            'show_option_all'    => '',
            'show_option_none'   => __('Нет рубрик'),
            'orderby'            => 'id',
            'order'              => 'ASC',
            'show_last_update'   => 0,
            'style'              => 'list',
            'show_count'         => 0,
            'hide_empty'         => 0,
            'use_desc_for_title' => 0,
            'child_of'           => 0,
            'feed'               => '',
            'feed_type'          => '',
            'feed_image'         => '',
            'exclude'            => '1',
            'include'            => '',
            'hierarchical'       => false,
            'title_li'           => '',
            'number'             => NULL,
            'echo'               => 1,
            'depth'              => 0,
            'current_category'   => '',
            'pad_counts'         => 0,
            'taxonomy'           => 'category',
            'walker'             => 'Walker_Category',
            'hide_title_if_empty' => false,
            'separator'          => '',
        );
            wp_list_categories( $args ); ?>
        </ul>
    <!--</div>-->
	<div class="portfolio_page_wrapper">

	<!-- PORTFOLIO 
	==========================================================-->
	<!--<main class="portfolio_page container">
-->


	
<!--			<div class="gallery_wrapper row">-->

         <?php  $query = new WP_Query(array(
	                                       'post_type' => 'post'	)
                                            );    
              if   ( $query->have_posts() ) {            
                    while ( $query->have_posts() ) {
                    $query->the_post(); 
            ?>
           <div class="post">

                 <div class="photoshoot_text">
						<p class="photoshoot_description"><?php the_title(); ?></p>
						
					</div>
				
                   
						<?php the_content(); ?>
			       
				</div>
			<!--	</div>-->
				
				<?php } }
                wp_reset_postdata();
                ?>
				

 
	<!--</main>-->
    </div>
	<?php get_footer(); ?>