<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
define('DB_NAME', 'photoport');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'F6#YqtPVg3Xa9yZjb{(KE(GArR9un(^C<384iTZ>AQb~[O:$,5GJuI3|SF 1@Y&}');
define('SECURE_AUTH_KEY',  '4]U]h]r].kGPmR,{pG4?#Q4*pj4+w%KQF3mensbnWz2]SvUD22.39;M)e:]GQtkg');
define('LOGGED_IN_KEY',    'zDdoIfI@Q5_Tgk#u#Z-8AnE:N-^; #m@?g5R!3ql[)UX<wWp=.Ohx?ng!h!d8c&+');
define('NONCE_KEY',        'mvl{TlG}n1#`2e#0y:IR#REf5x6}Wc:kw!b)U*XB+sgi4B$w8I*OH%)[F-tfPKiZ');
define('AUTH_SALT',        'iD_|B`aTZ%l&f&hkF( fFwAZEUb|-s>~vGW{Y34vq9p7@n%o!S:Jh!I8x!=t_/>y');
define('SECURE_AUTH_SALT', 'IqQzwVExu5@fWU7<y0,]f@L,;i}hhTpq.dhe31)=~wV/lAko$(n/q`Yq_90ZR`jI');
define('LOGGED_IN_SALT',   '_yk&w#An[s>`mL[3e$4+z5caH:SVEE:+/%+5L9 d(3(it)p!v26fI@(Xa>VBm.|*');
define('NONCE_SALT',       '6D0MAQS@wql-v vb_UJVL 66VI8i#Lxt4,}FFpHmu96atD((a5w.Dpo{<*[h3q19');

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

define('VP_ENVIRONMENT', 'verion_press_test');
/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
