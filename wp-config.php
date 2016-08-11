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
define('DB_NAME', 'study');

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
define('AUTH_KEY',         'ovDw~B).H]-q`p9/ndGVD0od?>f6h!^U_+W]a}_sO!E2Wz(5yup8A]zJw]gNne+I');
define('SECURE_AUTH_KEY',  'K-m=CxehHYUU~2}ppT)^u)dk_8/(81RFRf_6@SW6tNxWRysQkC.Kk(f~Z.q4c%cl');
define('LOGGED_IN_KEY',    'ECTy SpQqsR8!g3|4)JtvDQjCyCFvenp;N;`M.:HAHu/ Q?dbX6i/mZ,B@?kHW+x');
define('NONCE_KEY',        '*C:W6vj@ge7*cV4*9q,el|PmXz4|6n}GZcd<UAv&LqD|T)VFn5R~Y!#`^OR$WpAv');
define('AUTH_SALT',        'wbWutK*)~01yLT8_>+_vygteY/S5X%!&0cK*C^+l]xWaclJ]WNzhnUOO69AX!31-');
define('SECURE_AUTH_SALT', '6!Su+Y,*BWB8_]puExM@>NyVX>4A-kYyi!(3a&8Kbsx4:rJyOV1_VR~e_[+[?UW7');
define('LOGGED_IN_SALT',   'V;rd_0/wlr{+6jfI!`Ed!]8i&!P@_p_dSq@}#Ue+yie|&;R9TokkJN1y?Sl<I3Am');
define('NONCE_SALT',       '}N[8m`c|c5Q~NhIYm8Hn@s(X{gBQ(zt>cwm[(s!@nY<;;fL9cH88b=|c$rLzi.Zc');

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
