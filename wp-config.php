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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Portfolio' );

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
define( 'AUTH_KEY',         '7P{GVakIH%4w4<~%dc] /%2aAM!j+9+_TIZE<#n/Wcs=A4`dsqLEzx$XFsiUoq4n' );
define( 'SECURE_AUTH_KEY',  ',39( C/Ls:B1?=,O@k:/^`(f=S]p:2F :,FIF_*nzwmEY`iH[e6zXG]%Ni2Qoe%h' );
define( 'LOGGED_IN_KEY',    'Wa|K]jKiCPuaD.S,N. m>1$N>oneEihIq*bS&r+dN}}!-I-h[Q~L/V&2Y|Oa_f~q' );
define( 'NONCE_KEY',        'x< ui&s;%I}izr:/: +wQ7}eH7r%qi).$Uqys^LN#Me]$sVY??ZeTV#1Z>b9RQ/<' );
define( 'AUTH_SALT',        '7qy4CWUw|vTE{?&sr.^i}+B;A.15g;FlLR#.0!HSeNXMV|uyVncdI&YZX8$[W-8R' );
define( 'SECURE_AUTH_SALT', '~KP&^,;<H;%IG~RFnm/)3+5wYA`h>gc-S)P<;cBHb!y$:3q<$vn3@{&ppg%w|1(!' );
define( 'LOGGED_IN_SALT',   'kz5EJ*I n@bj.^vgA)dnx~[G6a}wVgJRn5e^&/$(3.m.N<%T+9X{i5Wz*_pZ&C*e' );
define( 'NONCE_SALT',       '[A+:=68S57CjAv_LP1 xq).& 3G_UVA12zw1IOe n~t[ep+`>cm{ah$A-7d_ZD}%' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
