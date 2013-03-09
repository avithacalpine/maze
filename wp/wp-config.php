<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sample');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'OS)F =N(?cTmu~bjS!c9Eo+V%?&yuM5H^j+tfZgnaJ#=A:E/$dx|Z`i@3&(+hwQQ');
define('SECURE_AUTH_KEY',  '`![X,za(-n^aHQkYXyLP@mu|>S99L>2,:MH3w{ryH9mVtza)jGfjRsrzTcNnuJ7.');
define('LOGGED_IN_KEY',    '7i?>tcUc/B0EYHzbRfa<}M:-z&0i[hx]k!7isXRU_hl K#_+QPQ<t U#zTXvYgRv');
define('NONCE_KEY',        'NIFoEbYx-+rF>eY/u#5;x8d!>SGGRH-1`d_$Hy/K-_wEx%S.K1|L{$)o,IUl6xbF');
define('AUTH_SALT',        'hATrRFe2ST~Ks<S+9P:8vIND;@5WJ=]yB@MWwHr0>?BL}&e;2|H0zY #Mi0i&3C.');
define('SECURE_AUTH_SALT', 'H0dH/WVUZ:zsx._4/xmUd)3w#r:Y6!y<c0ZCmJ#QX7=-ZFeGp%3fZ8T~-uiCHh55');
define('LOGGED_IN_SALT',   'S_(qn#&hpq/h]8<47Bxy8}3u?yo{;*aYs.VUW0uQ:.m0*E^3AwbYq[*deF5]%Ni ');
define('NONCE_SALT',       'g1P}aZGzrhV|9lrJIC8p!3|_b]TY:M`ygRR[XW8x _+}deagpiY_hXLp.7@l/>GJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
