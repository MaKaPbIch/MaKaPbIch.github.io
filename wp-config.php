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
define('DB_NAME', 'makkir');

/** Имя пользователя MySQL */
define('DB_USER', 'Makkir');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '10Wotblitz');

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
define('AUTH_KEY',         'xkU#WM*SPh^l&+si53_14r)<[kTnS;vwNxG!T*.e?,/ )<#UA91<v$o.0FyD1PI>');
define('SECURE_AUTH_KEY',  '3C4}h-[) /YkoP[;~^CsoDu`N]jp:8V@DX>!Kw[?ySxjZ{Ib%fZ)7),I!|SIZUT}');
define('LOGGED_IN_KEY',    'nDH^}5<c2DSXM/II@YficmS$6`wcf<{7)8;b3bFoP|&myAmw7#uTF}AY[FcpwN&[');
define('NONCE_KEY',        'F#@:TxB~?G?Z6Z@,#-9Zr:$jDn{%gZ!5daus!tY|YbrV^6-lMMc:G+&&C06I]0eu');
define('AUTH_SALT',        'futN!?ON!je`QK2Vz;D+UPwhx3]j0L7m:(ea?N?$ce*:qUqE%jwcb6va<T/}$}q0');
define('SECURE_AUTH_SALT', 'R4zmi?e~Xwl0b538MJGUI;OXSX>E?s.]?_pyO#V|Rds(0DpOdR#{e~1#t0VS8)qE');
define('LOGGED_IN_SALT',   '|C2ac&5eCWOc+y2Pl`o-^ oUkr=|%&uuou`GnCpm;Kh#Bbkw]-0d7$JHY~/;<NV)');
define('NONCE_SALT',       '=7sjE3UYTRpy<kFNV>6cINY2<~PYd/ tzGsY,jb!Oe%GNxL[ciF}[.LN]h.qwL`s');

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
