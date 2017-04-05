<?php
//полное скрытие верхней панели от всех start 
function hide_toolbar() {
?>
<style type="text/css">
    .show-admin-bar {
        display: none;
    }
</style>
<?php
}
function wph_disable_toolbar() {
    add_filter('show_admin_bar', '__return_false');
    add_action('admin_print_scripts-profile.php', 'hide_toolbar');
}
add_action('init', 'wph_disable_toolbar', 9);
add_filter('show_admin_bar', '__return_false');


// Убираем большинство мета-боксов на странице редактирования страниц
function remove_extra_meta_boxes() {
	remove_meta_box( 'postcustom' , 'page' , 'normal' ); // произвольные поля для страниц
	remove_meta_box( 'commentstatusdiv' , 'page' , 'normal' ); // разрешить комментарии для страниц
	remove_meta_box('slugdiv','page','normal'); // ярлык
	remove_meta_box('pageparentdiv','page','side'); // родительская страница
	remove_meta_box('authordiv','page','side'); // автор
}
add_action( 'admin_menu' , 'remove_extra_meta_boxes' );

// Удаляем виджеты в консоли
function remove_dashboard_widgets() {
global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['bbp-dashboard-right-now']);
// Вручную указываем - какие виджеты удалять
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);      // "Активность"
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);     // "Быстрый черновик"
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);         // "Новости WordPress"
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);     // "На виду"
	remove_action('welcome_panel', 'wp_welcome_panel');                              // "Добро пожаловать"
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

// Очищаем wp_head();
function remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
	remove_action( 'wp_head', 'feed_links_extra', 3 ); 
	remove_action( 'wp_head', 'feed_links', 2 );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'index_rel_link' );
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
	remove_action( 'wp_head', 'wp_generator' );
}
add_action( 'widgets_init', 'remove_recent_comments_style' );

// Скрываем неиспользуемые пункты и подпункты меню в админке
function remove_menus_and_submenu_items(){
	remove_menu_page( 'index.php' );                                              // Консоль
	remove_menu_page( 'edit-comments.php' );                                        // Комментарии
	remove_menu_page( 'edit.php' );                                                 // Записи
	remove_submenu_page( 'plugins.php', 'plugin-editor.php' );                      // Плагины/Редактор
	remove_submenu_page('users.php', 'users.php' );                                 // Пользователи/Все пользователи
	remove_submenu_page('users.php', 'user-new.php' );                              // Пользователи/Добавить нового
	remove_submenu_page('users.php', 'profile.php' );                               // Пользователи/Ваш профиль
	remove_menu_page( 'tools.php' );                                                // Инструменты
	remove_submenu_page( 'options-general.php', 'options-general.php' );            // Настройки/Общие
	remove_submenu_page( 'options-general.php', 'options-writing.php' );            // Настройки/Написание
	// remove_submenu_page( 'options-general.php', 'options-reading.php' );            // Настройки/Чтение
	remove_submenu_page( 'options-general.php', 'options-discussion.php' );         // Настройки/Обсуждение
	remove_submenu_page( 'options-general.php', 'options-media.php' );              // Настройки/Медиафайлы
	remove_submenu_page( 'options-general.php', 'options-permalink.php' );          // Настройки/Постоянные ссылки
}
add_action( 'admin_menu', 'remove_menus_and_submenu_items' );

// Удаляем уведомления о необходимости обновить WordPress
add_filter('pre_site_transient_update_core',create_function('$a', "return null;"));
wp_clear_scheduled_hook('wp_version_check');

// Регистрируем и подключаем стили bootstrap.min.css
add_action( 'wp_enqueue_scripts', function(){ wp_enqueue_style( 'bootstrap_styles', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', null, null ); } );

// Регистрируем и подключаем стили шрифтов Сormorant+Infant
add_action( 'wp_enqueue_scripts', function(){ wp_enqueue_style( 'сormorant+infant', 'https://fonts.googleapis.com/css?family=Cormorant+Infant:400,400i&amp;subset=cyrillic', null, null ); } );

// Регистрируем и подключаем стили шрифтов Poiret+One
add_action( 'wp_enqueue_scripts', function(){ wp_enqueue_style( 'poiret+one', 'https://fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic', null, null ); } );

// Регистрируем и подключаем скрипт Fontawesome
add_action( 'wp_enqueue_scripts', function(){ wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/0a05054cbd.js', null, null ); } );

// Регистрируем и подключаем скрипт Fontawesome
add_action( 'wp_enqueue_scripts', function(){ wp_enqueue_script( 'navbar_transformation', get_template_directory_uri() . '/js/navbar_transform.js', null, null ); } );


// Регистрируем стили
add_action( 'wp_enqueue_scripts', 'register_my_theme_styles' );

// Регистрируем файл стилей и добавляем его в очередь
function register_my_theme_styles() {
	wp_register_style( 'my-theme-styles', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'my-theme-styles' );
}

// Регистрируем скрипты
add_action( 'wp_enqueue_scripts', 'register_my_theme_scripts' );

// Регистрируем файл скриптов и добавляем его в очередь
function register_my_theme_scripts() {
	wp_register_script( 'my-theme-scripts', get_template_directory_uri() . '/js/styles.js' );
	wp_enqueue_script( 'my-theme-scripts' );    
}

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

?>