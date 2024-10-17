<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blank-template-php' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'teste123' );

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
define( 'AUTH_KEY',         'H)<vEb+GkB:wKRfFDq02h[!r57M<d)2D]B>-s-<e#UO6y6T>,)UE#!NYmoi68~^N' );
define( 'SECURE_AUTH_KEY',  '>S$0m_7fyi2y)n5behJl,FD1O75NXREF|*<EXFvaJy:FGo<wZz{Y71V(}GHNT=`}' );
define( 'LOGGED_IN_KEY',    '3M;lSl~Z;JHNF1u|k0|#AiDRv]naKx;(K?Ig)O7YwLA- s]7r<r=0gWu(d(N%-@0' );
define( 'NONCE_KEY',        '2l% iG>T&cBXB`(wKzTtsoVTMCX`/uDzu$AH+(N](6_3V?Nj:6^UwjQ|~+|rbWe5' );
define( 'AUTH_SALT',        '=L`CTG]L&|[&NblF-HBJ-H|G0t1f`#X)m;c,?xXf}#R@C A-O@+QH5l3F,Z;~gld' );
define( 'SECURE_AUTH_SALT', '>7t6auyOdC VWm/~(l#~N61_8q[c&_|<BRyQRA0Sr%k{.vC7x-A:(SiEv{zUy(~?' );
define( 'LOGGED_IN_SALT',   '2;)Z:wXQmED6Oo-MZ>.nloIrL2$uw}zB<j*%)4kGS()U80z^MAo2l#45n- 89+QI' );
define( 'NONCE_SALT',       '<-/=y<!:{BZfxcWVdk`bO&NC`-_&X_b:^Px(dc&p)iCZ^y-qbd24wv, CC;i!{$ ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bt_wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
