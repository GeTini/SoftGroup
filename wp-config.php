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
define('DB_NAME', 'getini');

/** Имя пользователя MySQL */
define('DB_USER', 'getini');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '7777987ghjcvbn');

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
define('AUTH_KEY',         '=qW,jVwL&F?/@pd>nkse Tl/Q=gi_[3cxOikXF;KSJqV9McXw1S<P2O`QJ{g/aiq');
define('SECURE_AUTH_KEY',  ';cLF*X$~A6Q`4lMbG,fE(SczRC[>ReTCXk>=&TBg3FW8XLV=_Pk__DPfRdgwD>5;');
define('LOGGED_IN_KEY',    'Az)j%,s~^hN=|RD.2znd%exu(CSZA+}iJGT9/ndg?{9fii|(]_Tv[BXf1qFbV0q5');
define('NONCE_KEY',        'D;zijfOQG3qjOSn+PCt~Y5V8E0X]%1BBYb1m}OZ;p)Wqw=l6S_g`3iEd{IH> &[m');
define('AUTH_SALT',        'V32oH:=y:CztK;Fu0ma;Qu]DJtxz>{]b4%52I0%A=`bULrSm5WS+Y0Zcb%R2D3+[');
define('SECURE_AUTH_SALT', '_|!s$ohW?]+YJzQgd|1z87ClY@@*YfU/{g!3d*,C |96K^z)[Nb#~9|/FC&I[]?3');
define('LOGGED_IN_SALT',   'bMG%P4d1!*tq3EAR6jj=9 <Z&jK5N^Pt64sP52iMBM?b=F{~esy(Xy~b(9ZgbEio');
define('NONCE_SALT',       'g#Mt WX%~Gi6a(-q+DUQ;L6lmEZ|/X.9}FB^-O9#B:gsG5G85t&b%ZNd^ipE?tY7');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'galaktica_';

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
