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
define( 'DB_NAME', 'weller' );

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
define( 'AUTH_KEY',         'YHi]l<NF1irLs2%i$3a]i2b?(`{2F4-,u4(Pn/bqdU_/[:G=3Gy)p.0j(xV$yqS.' );
define( 'SECURE_AUTH_KEY',  'ONAQzTF${gjL&|#zyur9U CDT%e%JtCuBD57I-ybR!G[U&eYY`EMUT&H.L(A=`Fg' );
define( 'LOGGED_IN_KEY',    'mw{n~^LsL?+e,1I[?R/E:Z}W4vp?/]9h9{NL]%x_)iRc1,FJ~l?JDkQ}:uqO:r?y' );
define( 'NONCE_KEY',        'mMNZulC6?qM*T/Ed=AK[ 46f*uTKk>;CTk:MFEmLfUy(PvMayK+{4Kb)it@,Kt`w' );
define( 'AUTH_SALT',        '*n#Ak3?Lu;Z1eoj`.g})WL(sf%JGtSqK$NhPJ9FQaYnp|FH&DN]g%aJ#:Zidcsn@' );
define( 'SECURE_AUTH_SALT', '`Bmy/97T7<ABj)Uz$!`ZP];L5 ;d~<%2pHlKpHYH(TG~pcoJ*1tggIp1:B|yUoYB' );
define( 'LOGGED_IN_SALT',   '8E4i^<~nigmInXR,dX7Sy]|wjl]IlJQT#e:yR_S;qq{s}1-VI6r/]X$;Y0T-$6Sl' );
define( 'NONCE_SALT',       'pc$S2*7:Z=Xb:J+I:jQRO9iS/uC#:9aT}(l/0)^tuX`kpa4ZbO##j:Tj.5ikE}`}' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
