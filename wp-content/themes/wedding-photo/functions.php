<?php

/* Включает поддержку темой меню навигации ( в админке появляется соответствующая опция ) */
add_action( 'after_setup_theme', 'wpt_setup' );
if ( ! function_exists( 'wpt_setup' ) ):
	function wpt_setup() {
		register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
	}
endif;

/* Подключаем файл wp_bootstrap_navwalker.php в тему */
require_once('wp_bootstrap_navwalker.php');


	add_filter( 'wp_nav_menu_items', 'your_custom_menu_item', 10, 2 );
function your_custom_menu_item ( $items, $args ) {
        $items .= '<li>Show whatever</li>';

    return $items;
}

?>