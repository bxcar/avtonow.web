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
define( 'WP_HOME', 'http://1280850.webdev47.web.hosting-test.net');
define( 'WP_SITEURL', 'http://1280850.webdev47.web.hosting-test.net');
define('DB_NAME', 'webdev47_avtonow');

/** Имя пользователя MySQL */
define('DB_USER', 'webdev47_avtonow');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'wgy698t7');

/** Имя сервера MySQL */
define('DB_HOST', 'webdev47.mysql.tools');

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
define('AUTH_KEY',         'wjtCx;0Y4[U8LmsH=0)$ey)tJ<JMr8{!h@;m)(0GKKU~pm-(WjLm wrA-bR/IIr0');
define('SECURE_AUTH_KEY',  'zp4?Rz1(R`JiN,g6484P>ToJf-gkjL4#|1t/ZN3JTd)2tYB]X8!d?~WU.IH+!L2C');
define('LOGGED_IN_KEY',    'B6oxT8$$?Iyp[StR*w,*)kaWO#ra|!j}F-wjsOvJxXax,EVax)!KoC;zVia3,[Xg');
define('NONCE_KEY',        '-tyTc,7|}K8[Yg1?)gp6WP 3=UAnZUGmVrS jtUdoV%V0wIIeRi43|S(BY[i%7cW');
define('AUTH_SALT',        'T+d-h1R_}v 3gFPwcnt6hkp#Q{9~bo98.Hs6FGq8;yskPua8-~/tAer6jM<!34v/');
define('SECURE_AUTH_SALT', '~VP9^VyTPi{YtN[>}).Twpo~eeAIxXJ%[n/z|C:H$87t6?XLPHeC7 ys{+QTn6t|');
define('LOGGED_IN_SALT',   'C TKTwOCJxKrhG|!FiJti.l`&+Pc8Fcpq<#6(<%!2n.,Ru2>b5qV@!-l]5|]!_D;');
define('NONCE_SALT',       'R-RJ|2JM}Be)TECpK.6)}Fg,uqR,%[x2?$Ombio25]@P5]h7PI/HO^2$W]*34I.L');

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
