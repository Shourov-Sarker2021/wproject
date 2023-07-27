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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpp_project' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '6!2cm=N+]YRgrz8bSQ8yod$T+OORS~, eirBg,e^)Z@C*_G@samoN(/srKt286?:' );
define( 'SECURE_AUTH_KEY',  'X,?.ItK-}4Vq1PX3;6 RHR%( I4AL enyUD?r?nt7H  vGrK`?M~RqQ4}$0HrT#F' );
define( 'LOGGED_IN_KEY',    'DGa6`~rpIaIm]04N+yMx*gRCmnD+|K/HtoV,|-nG_^.of`t(h*N(1B1K!ko;zSAI' );
define( 'NONCE_KEY',        'Ocq_M)KCmNCY-Y1gHtYX@V&,~F3I!C_xgVEc6pZ9pY*v!Wb`A.+;}/ZE|#*{kmHW' );
define( 'AUTH_SALT',        '9T,864syj{l<*Y43<w6wgJ#6xi.#6wiEtHn&PUfr_oj}j.QQl]?B;l:.uSLlmizV' );
define( 'SECURE_AUTH_SALT', ',{NFc0!*m4(b:PX!pvr/Nfk@!o_-&99{m5^`.SBQmj<VH@eH:|D)wdQwxk^scnMH' );
define( 'LOGGED_IN_SALT',   'sg;T:_(l|yw1*&hV~9b(8i+Q)|22vI&L$YOW.U~b 6>EtN$peg3J7{cxvdT7v?YX' );
define( 'NONCE_SALT',       '#.:O^rc%H&^IG~,P5vtmI$zSf}R3Ak#iTy%Jj&piU#Y5`#z_*rHXml[*.OK1+s .' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

