<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'at');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'eVebNI4g4Tp?[Re,N_,.SNHA>C}vHa#i*rVZL_5pYg5e~(bMcY$wG7+RmmqjO3RI');
define('SECURE_AUTH_KEY',  'ViRK|EQ aO]/j8X.&#v(IX+^beY{QXkfY1ULq|q*.AVl#CH&^;??h~_#!Y[gVY[<');
define('LOGGED_IN_KEY',    'YxlgQKl3aJ9Mm~7mSMN+vwS[Yh&~lVU!?{I/P9lhp_Tp9-588Nd^(Gag,r@SWk=}');
define('NONCE_KEY',        't=`-m}qlNg8lQ9Fky.|U@T>ZA,I$D+}-4:#8Y7W|5t~]WFbx@)|4odC1]QHCV:Sg');
define('AUTH_SALT',        '<|_3hU-UkiP1!!xdsq|8Vkk8Jt>M]&8:aGM3E5P#_|4Cm~+IQ1RJk._v-I2 ?//B');
define('SECURE_AUTH_SALT', '2b1Qd`zK{T]I|@}ggc&8AAI`Mmu$0Gd]bk<kc0CrTemTu`+,?bkr#Kq|t0cin+^a');
define('LOGGED_IN_SALT',   'vW]r:9+0d<av <1(~Vh<m3v+d4iV5x0T4$v6Q[C#LP}ep*Sz|Or-UM1L*T86Hg%N');
define('NONCE_SALT',       'L2EsXMjHXp=$037eWWds|.wm^y!_h79Oegl+(ZG#1]X>oc/`E,^YjyK5ah_B8slz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
