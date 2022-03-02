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
define( 'DB_NAME', 'mariage' );

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
define( 'AUTH_KEY',         '|CuJ;55#f&xF#ef{i~8J+s;S]^?K(2F%?f KTN{$RZ2JLINK`ZOJGD9N,lis}|*-' );
define( 'SECURE_AUTH_KEY',  'ldLr[a$qUHQOxq+h+g?PV,_Hh`]Ni{lM&SR%]8b8#rJDNcx3K2:74wHs,v=GPA]:' );
define( 'LOGGED_IN_KEY',    'Zd[6%hC|D(_&9V-BsY{mw-Q9#Ldpe=MYZ61G^VURS*5WkQ^xv]Hq+|_@)lfGv=lU' );
define( 'NONCE_KEY',        '3nmu.@:<xht8<*bwTk(i/PVp8~gcAf%~SobiXSHpm[}7wDC*1/a49MkAs&Bx*gNS' );
define( 'AUTH_SALT',        '2o7T}YOF*}U<en_Tix=?:gKvFxt@{Emz@d%dtk!q-9$GM8Dh-7Ti(~d`Pcp}h?Bl' );
define( 'SECURE_AUTH_SALT', 'PhAHhT013(vvuc*z1j<Iev|%1;(jW&D5x]j7OY6Tr@E #)9|n^Pd7?,!}w`2[WH|' );
define( 'LOGGED_IN_SALT',   'kGWhn)9_v[g#czY7vh8E4[s^|0I^jUaeMayysa*$f6/IrsML@zJx=YP`W:tH=:rK' );
define( 'NONCE_SALT',       'F&0[Ym:ajW9>K?I%%,rRrYM!2>#iqhpVnnjX$gc>]o_=Z$Hrt2Aot65u8Tg&IQjI' );

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
