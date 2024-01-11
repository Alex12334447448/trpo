<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'sana' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']3njO!KIdB.(t}8*r&$291}KaGlMGu_l -}gYzzqAPG=S).kjomJQB3g9XuUU3&g' );
define( 'SECURE_AUTH_KEY',  '#AkP_d5]qP[R}{I E/^T^Dx.[l%tY(}K3]N*]9!*:?h!A -z?WXD,;rtI~5k#xEV' );
define( 'LOGGED_IN_KEY',    'F,VgV==Lbtx:C[^HKDWt*lKhTO/@/P(:hYAI_#B0SAD`Oh&U7~2Z5!xt+REG[3Jk' );
define( 'NONCE_KEY',        'Hd$<U::3z 7|NW#Pm`Zy^]{o{$S(,Pyz[PrC L%N8Vzk6{j%fj7jq4g}>P`2ij<3' );
define( 'AUTH_SALT',        'rr1&u5&M0DCZ6a:s1?b3{}A]dgk85#~G[#<,<+)t*!o2)Z$Vl!eJ w[#`H5&:b)K' );
define( 'SECURE_AUTH_SALT', 'M[V=ej7}WB&OQ(@-fKkM`Qu(OKD$k^>r7YlZ}A*p(6)E)V]W0mEA,f@rN(CXG QG' );
define( 'LOGGED_IN_SALT',   'jebYi<ThT]-_5/21#-D!Ho]4Ec(M(hN-q/Be.m%Uo+!$V!Y/Hze5{NRlY`f):JQZ' );
define( 'NONCE_SALT',       '.Gf,]y1s=Uk#9}e(&R|CE-8[9tC]*_FSnjQgtYvE1x%}c5+Ul!zJ9G`)RVa8qfkO' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
