<?php



/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u872994712_MPaK9' );

/** Database username */
define( 'DB_USER', 'u872994712_QkggG' );

/** Database password */
define( 'DB_PASSWORD', 'B68wQyZyon' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '= (~$0=*X>7~/P4;aY&tYgr9/%geEt$CMyJ3/GlE7r2`>!7IH$ST($6.]7OZBV57' );
define( 'SECURE_AUTH_KEY',   '8J{;,+~)kDP_++#DR,0~5r)4Vx/B1KA$[I KG r>#,N_q45umL T/ $xg#K^&8-9' );
define( 'LOGGED_IN_KEY',     'K*T:cw{]^@<7YTZi@R+kaNrQUlBTT[JM8<knl>:=Z,n5z|KI>P#]WfnSnD[*KJ<,' );
define( 'NONCE_KEY',         '7=c.w^4r[DyUZZ>$5YS7`^ 9>>;UW@Bxa?V:Um@Z+_,NegxuE&Dw]8DdITczcnw[' );
define( 'AUTH_SALT',         '.]^pC!;eh_<0GV!Y _AGgs>s{W3nM?l#!p2:iqHVkmB8D6N-@Q[g)ZIbRz^vxP*_' );
define( 'SECURE_AUTH_SALT',  'yEHTDq!b[Hi=:cq=_laxggYnxsVm0p+:m{N^Dsqdv7EFJYv,/5{=FP%EZP7^?qNl' );
define( 'LOGGED_IN_SALT',    'vAoh+`#4.1{%l3SQ|%eP})6z9!fI/3[z!JUFPAXd| sk:RbBxv~,^hQSN2^=CP)8' );
define( 'NONCE_SALT',        '4!|U wHUB``=yAb%/|KrRl9}Hiio:F7jlEH+|N=@^[m}]$e5j7a{@*[A2#[$9Tym' );
define( 'WP_CACHE_KEY_SALT', '~Ppq$[cA)i3E,9z%,*Btcx1KGd~?f3N:zL1iHY/9SCA6P-~w?IsVoA0E!C{fycrh' );
define('JWT_AUTH_SECRET_KEY', 'secret');
define('JWT_AUTH_CORS_ENABLE', true);

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
