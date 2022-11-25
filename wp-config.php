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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Y8Seh?EA11OE)yQDVYh$/@6{Lf0`x,FdRf5$7BRNR(B&k)j`L0o-cUgMVO?P;i1{' );
define( 'SECURE_AUTH_KEY',  'Sy7;/I|*xJty[G=B4;>C<N2i1?]B$;}?^UDOoemj#*/aSNrc{]W#&E5NGUAvaQ%3' );
define( 'LOGGED_IN_KEY',    'N@^m-3CHBP<lJ4Vll<lCn8hH:g$d&j4d G0dDa0&#IVk`K*qQBW<qfo!eq$b2olU' );
define( 'NONCE_KEY',        '[m7K[ky5G~]@pJCV@iBZ.PW.=$v02^3tdq:3f;;Vx5Z5_9c=vmH5L3 bVQt#)O97' );
define( 'AUTH_SALT',        'M#(}hE2feWyLuQ`Bm]BThdNgyMO<zD0DUHvL*7an5VVzAK*397.uEoK+<`XY|uhS' );
define( 'SECURE_AUTH_SALT', '&<+5NfW~*y$Y2OuN4SV<!.i1ft=:}Zd6d`![Tq&!2r<2AUXG^j|yJ`77e`Kcbl0+' );
define( 'LOGGED_IN_SALT',   'WJw(<ocC><)*,*i/MZQ$5ko.BDw22rM!,ERY0{E28<EYV]{>@qmZg)a/U,RJ-l68' );
define( 'NONCE_SALT',       '^]asssWT~`f+bRNh3 K}yfZ]sQk0vTU_kq_>,bP0X:y4mTu8jJGF&:1K|OW4/NG3' );

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