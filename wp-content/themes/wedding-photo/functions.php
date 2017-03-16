<?php

/* Включает поддержку темой меню навигации ( в админке появляется соответствующая опция ) */
add_action( 'after_setup_theme', 'wpt_setup' );
if ( ! function_exists( 'wpt_setup' ) ):
	function wpt_setup() {
		register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
	}
endif;

/* Подключаем файл wp_bootstrap_navwalker.php в тему для подключения меню бутстрапа к WordPress*/
require_once('wp_bootstrap_navwalker.php');

/* Добавляем иконки соц.сетей после генерации меню */
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

?>