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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '!>u0&NP1Cf)Ad=<]d([KAG8*tm3Ve;#JU9.S9B.wNR^xo4F>))pjb!FEZM>?L(hc' );
define( 'SECURE_AUTH_KEY',  ':dGsdR?:kDH>qd cLC%CK@##u$+?s[WiUI|:,_`eBit]I[3:[H1rA:I>I~rvi@AM' );
define( 'LOGGED_IN_KEY',    'OmcQ-aXHW/gCLWo-6|_vca}<_7]:Qp5u&Ywcz77Lh3Z1j7S]^<h;yx-.P$Oz*[|>' );
define( 'NONCE_KEY',        '_P?6Ky>5V?#1>)AHLdp53UNke ).A3^n2e-y5]L&ThXGgb* fH6h6|UH%)-k8Ar_' );
define( 'AUTH_SALT',        'YAC@36X*QjeGBu<e8%K47 yWLwhdMPvW3vJQo;M/n}%iFH;yC8rJNoXgY}@w>x@`' );
define( 'SECURE_AUTH_SALT', '? f|=Z?c.)oa<|Q./kk`=x fCo-/%}kUx%wf`68*X&YY*EOheCP4=&ReqOvvl#q-' );
define( 'LOGGED_IN_SALT',   'My3xVDIw]l}%sE.%wW4tPt+DaIXVyH1>I!VqU(9(dyO9ntMy5pYk+b%^|<% %AQ/' );
define( 'NONCE_SALT',       '_p!.tuNM|Xd`P*WLt4I?5#Ol4u<g1]7c*}cxBU?/OtdOE$[&03hDU~N(suf^=JT?' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
