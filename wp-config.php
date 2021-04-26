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
define( 'DB_NAME', 'assignment2' );

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
define( 'AUTH_KEY',         'ChV}?%.5_J>^3B&gLhrn=Gxms?[}<:1h,]m1{x_8X&SZ-H+~SO~?R8pneMvo&f>h' );
define( 'SECURE_AUTH_KEY',  'NErc({!nEwc;n?$L+UdKI+l[bPacrhO<?HXg?I2R-OQ{|r~6u=GE`UVn};&Y4YZU' );
define( 'LOGGED_IN_KEY',    '`!(Z~AzQ.~ob!-<0a/OoRG;BP<0-NwE0BN?:eNQh{L-aYxF<Goh 3_~yi<vD)D$p' );
define( 'NONCE_KEY',        'R wX-;VfVVew~YM>-j)j-O#/ArQQAS{4VV/b#h>=75QDCA1j_fR44<l;ZBkWhI|X' );
define( 'AUTH_SALT',        'g@[/{dm8!_X<,D/9KQv|QZqFKx>TJgF6}Wk]E^)bd>EQ$KdVpfV*Fv@s+w>f@-S+' );
define( 'SECURE_AUTH_SALT', 'gm50Z?R;_Tl4ekk_eOIMO!I9`CiK4QGS&UR=G/D$]} )w2qISNQRdY+8@DaAA7:B' );
define( 'LOGGED_IN_SALT',   'Ei$VFP?((s}7K]XY&UnKrh+u)Af@%P7jf5l_|kAsUImA@IN5IG68]7u7s/GdhAuP' );
define( 'NONCE_SALT',       'D^=tdAXHVpvT;[zRtK#?3Ad{78gm2Jc!]S*dUv;)Gf}U>_3I}JcjHs+T0M*ipE~l' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '_wp_';

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
define( 'WP_DEBUG_LOG', true);
define( 'WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);