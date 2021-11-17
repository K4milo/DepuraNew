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
define( 'DB_NAME', "depuranew" );


/** MySQL database username */
define( 'DB_USER', "root" );


/** MySQL database password */
define( 'DB_PASSWORD', "" );


/** MySQL hostname */
define( 'DB_HOST', "localhost" );


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
define( 'AUTH_KEY',         'uSIi/-OQaDGL?8pYxz&bdq`Fl]6. aQ~o7#0jjjIXRic4>]h?ZEfFh&c-Qw7iJ4Z' );

define( 'SECURE_AUTH_KEY',  '[_PA<&%CqA!]lO^>9|Ew2WYa@bs^+6`1cAF%K*J[z{sQ.4Oj0T(}&91(R#O*y)K_' );

define( 'LOGGED_IN_KEY',    'q@8G;Br#lJQS&(T)ozpMfTcAL{>XlIzKN/mCv^}$wFGRZ/q>Jx<D)1 4HzeU[i*]' );

define( 'NONCE_KEY',        'wbD8FQHF0XUwoW+o#a#^R~$Dn`)W14Hi/{Js+*f(#lDoJb%H__exQO6.ZfiXGWCZ' );

define( 'AUTH_SALT',        '?lE@ZEtwvhy 5k<,D H)K3HN^,8>c~wKdG&=yY*<KXU#5$m`^7+=_6G2k,Y+11-]' );

define( 'SECURE_AUTH_SALT', 'WMfNEQ}c,fph9lI6!P%d>~T*-SQ}hwO-Nt#Hd1VW+u3K_7MpyI3#FEY,wJ&Xl5t.' );

define( 'LOGGED_IN_SALT',   '2r5_$Ym>>>]RJpaUk<l5Z)(z4CXp|a1dT4y7|j<^vDz@OJ^[*t@5Yk;G$wlYW96&' );

define( 'NONCE_SALT',       'QjruiE7;=%<u9ddS(+V.KF#JR-/BC7laqd.0W(=]o.GbPl56>l[g%xFj9AbYw[dY' );


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
