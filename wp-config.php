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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'parabtissam' );

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
define( 'AUTH_KEY',         'NYt+-*<.hzJUUy=0RC)p7h%V2^HvO~[Qp}y{;C1?x!8D!c!]k9&y^ [[]z!yUT&$' );
define( 'SECURE_AUTH_KEY',  'B0MWh^SYo]rH p)Kp}wsF_xXe$rXUV(!QKg8y<{Tfx~i<&]jMXj*4XgE|qDim<XI' );
define( 'LOGGED_IN_KEY',    '_}dlZClL_2Iv2k sqiG@7UXHqq6-aE28+Kj/j&Qc^B)Y;^tG,eGu0]=[>;F%7+s2' );
define( 'NONCE_KEY',        'w}rJ_$pS|7@2?/GaKjabBmqwCI}~:|kf`dtzaHM~Fg-06*0?[y=7=I&rItO7~d9g' );
define( 'AUTH_SALT',        'G97H>Poi;f4C$x-tD?m`87(dn)66@ospw|T^|l.-8-cHkqc1vVB<39[/z}eIskxz' );
define( 'SECURE_AUTH_SALT', 'FY5H#`l0lW%<#k@+)-P?KooduHu_l9x.ZsKVNqw=E8^}(bv[ JEiUmwGO9$YrWSX' );
define( 'LOGGED_IN_SALT',   'i=<rzrikc$Ca:EAEfULi:h=V_* JW<6VQ3$,Jbw[KXDqHM$llPLCS`sY-hxBp58]' );
define( 'NONCE_SALT',       'dg=^J=M+:p;~vCK#`CElWIg%N/8uZ AZz> sx9Gf*WWS,Db>wqXsAZ%[p|SlL7s}' );

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
