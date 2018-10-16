<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'development');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', '172.25.3.1');

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
define('AUTH_KEY',         '9`%~[#ZW]%+Bq8)nJ,yz{U% 7s=;]!X{zVU[n(}}/,ctTI<di=87Zwd@>Jz_,75*');
define('SECURE_AUTH_KEY',  '=]AFGNtuPs/QS>HP9k`UjK?J1^xT[Jk_t0PM-A-c=,k|pSm8F9U=B4X]>r@Unub%');
define('LOGGED_IN_KEY',    '}o,9[]T1jsC:~PJjqiLV?c](h%LP1GpsDgX:$e1dn5L*bva_sQdc?1zq`m/$2]W!');
define('NONCE_KEY',        'fj+zZ/svoyjbVs-_9*OWAR`u%1nF,|}.@j,ZbR]q`Y0sq1Ic~I%;YMr>Kns#D[sR');
define('AUTH_SALT',        'AGI3?K<a,HO:Dm%[QmYXdbg,}K*?Wx eT_f@.Tdao-)M%#^O6AIu|>MW_,ZT:BX/');
define('SECURE_AUTH_SALT', 'S%Gw6_J12VN+L~:w6AmG*wD#y|kNB kFIUOf^nwJ/R}Pax9VN*`]0HW|E^cyD@;Z');
define('LOGGED_IN_SALT',   'GO^PG:^KRF@jMQN%~|8NRY*KUasf+ddu_O-cDt$uVb.CAxe6~JJyhKAY@w3xlTyM');
define('NONCE_SALT',       'HJKH+vXo&:+(F+s)@CDKI{Ew+hSF/~EpyC8Z3ksr#SR?,+?GS[J4g5R6<X~<@ p%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
