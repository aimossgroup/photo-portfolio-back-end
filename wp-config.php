<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'photo-portfolio');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'p|]l_:`=dM)R(`?Jh?Q/&NAIW kVfjEgOZt}?RaK@M~1,,v8D _E.-se(S4c2$hG');
define('SECURE_AUTH_KEY',  'P]A_8&teu,x$({VN!5;K?lu}65kOL/pm:>spnh2@JrPFUkWJitAmz7-LKz+Ns=6<');
define('LOGGED_IN_KEY',    '-.?H?PoG;+ioqtTA@Aq#_+n/ktgWZ:d1)#`/Fg&a`c)|03( i*kf!=K&.R*36m]H');
define('NONCE_KEY',        '1!D3HKEEO#W%~}Z8.Q|O5Lu5I?kORXsg]mZAowV({FXIdos+OuS3!/#&|+^gV6av');
define('AUTH_SALT',        '>EdBK/d3*U)24j?W5`r~8w=,;`1;l^Q`67N<73_ac^L$%FR)w9vgF(`Ge;,d!L]p');
define('SECURE_AUTH_SALT', '4oMf<%k(( D3*VX|E5Xvs1CV >#^Qa$5>Asl4l^^aNgRa>)Ta%?H(?HQ=7/6)YW`');
define('LOGGED_IN_SALT',   'tD!)!,<NRUir%>Mdenysx)*M|YiAOLY1RCr688:g3QE%csE5,x]4?zB24M{a]GY*');
define('NONCE_SALT',       'AkC3IIV2Yj|RxlE>^gGZa6 Ui ng!nZZ3/2%4=:&lL@Q7[mWKw^5XmU4e7wL@,14');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
