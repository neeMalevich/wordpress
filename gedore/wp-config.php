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
define( 'DB_NAME', 'gedore' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '7Ml]N#kSMz;lsn8NzT^t7-qc1wEt#s7xD&dm}9#~Co(D(Lyg>9Cd&;rFma/Q#l0[' );
define( 'SECURE_AUTH_KEY',  'RrGUW GvXD9kNRoZCC4*: DFlKA!hoL`64_RmLZo_?8Er<6,a1R}eP~#A^du?k32' );
define( 'LOGGED_IN_KEY',    'QF-b>+YP%R+AWVL0B=:R(GrZ=zDr4vp1gmr`t7UQU`$*Lls/R0TKUvHeUO.pObgo' );
define( 'NONCE_KEY',        'g#pB/ylMpOk&,&Wu4CuLUnE0ex4;mt[8>jkNXH|q99Y}/7eR!Q1##~ThQV<K`n -' );
define( 'AUTH_SALT',        'L62m3R%CD&[e]mU%wPUz?XLJy}/BA?P;xdyg>C>hJQtl~NYmJ}2s1fw}yuL_a5}{' );
define( 'SECURE_AUTH_SALT', ';mLH#$Lm|yDppn1E9YpLucZj{E(zl,`aKPXoq45E5y8hKiL@7Fd$l@sci~w?mt>X' );
define( 'LOGGED_IN_SALT',   '3Wfu39lLTeezevId;X-<==V*:XVWnNCN8Z.4Q]#Rb3dt8vq-Vo;:(fE8@I1[a:/,' );
define( 'NONCE_SALT',       'nU%3h@>:y4WwX>G)nT2a:O;T&f!I,tv][&hH{T^kgE[*BrOwuPl7|Ew/-i02..6Q' );

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
