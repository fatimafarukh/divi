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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'divi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PxL.odh+-[=@i> F,<W_X&~7V^&<zQ^uzz##x0YO@Z_Xx/oj[YM/T,a|j]}|6j2p' );
define( 'SECURE_AUTH_KEY',  'YI^0F6,)t=/?9$ODfk(kgxl8*;s|:!Zsh~%6+I6IVuvrDy[qPI,YT9~xvs5zQ>P^' );
define( 'LOGGED_IN_KEY',    '>eN(5RS/=a)1}wvm0Za$)6?nL`#WG?$B:A.dB+WM5X{dYW!}N$ClWwMw1w~_Z^T4' );
define( 'NONCE_KEY',        '%(~qzZ @YTb.e`a+/[{`skv<t+=U6VEkqHIJBsGJ2U;*[74)ltcLWK.H#6H$wOE;' );
define( 'AUTH_SALT',        '1Y@!bb`:m~)KSIh8;lp8bnABL7O!bt&pf8?o`*-P+hCX87}1ux24JH@uJGO:ic,n' );
define( 'SECURE_AUTH_SALT', 'liH];fR-:AI4.O@8,xzYyGl2kr?Dtc 2o14{W1]L{pWR.RVPmC!XR? S2L@EudG6' );
define( 'LOGGED_IN_SALT',   'GvCW>68RgeoW!KH3Jy,fwxEIiSY%+::/eT-inc-|[keq2|3-M+Gs#}Qxhv(1r:uq' );
define( 'NONCE_SALT',       'UjGd<?<$Sk%A3&-Cc%XFPV>t!(nrZ+)m13jaoML[6povPn0,-_#e9uh+f*/y+Sku' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
