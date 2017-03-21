<?php

// Включает поддержку темой меню навигации ( в админке появляется соответствующая опция ) 
add_action( 'after_setup_theme', 'wpt_setup' );
if ( ! function_exists( 'wpt_setup' ) ):
	function wpt_setup() {
		register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
	}
endif;

// Подключаем файл wp_bootstrap_navwalker.php в тему для подключения меню бутстрапа к WordPress
require_once('wp_bootstrap_navwalker.php');

// Добавляем иконки соц.сетей после генерации меню 
add_filter( 'wp_nav_menu_items', 'social_icons_add', 10, 2 );
function social_icons_add ( $items, $args ) {
        $items .= '
		<li>
			<ul class="social_nav">
				<li><a href=""><i class="fa fa-skype"></i></a></li>
				<li><a href="http://vk.com" target="_blank"><i class="fa fa-vk"></i></a></li>
				<li><a href=""><i class="fa fa-whatsapp"></i></a></li>
			</ul>
		</li>';
	return $items;
}

// регистрируем стили
add_action( 'wp_enqueue_scripts', 'register_my_theme_styles' );

// регистрируем файл стилей и добавляем его в очередь
function register_my_theme_styles() {
	wp_register_style( 'my-theme-styles', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'my-theme-styles' );
}
// регистрируем скрипты
add_action( 'wp_enqueue_scripts', 'register_my_theme_scripts' );

// регистрируем файл скриптов и добавляем его в очередь
function register_my_theme_scripts() {
	wp_register_script( 'my-theme-scripts', get_template_directory_uri() . '/js/styles.js' );
	wp_enqueue_script( 'my-theme-scripts' );    
}

?>