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
define( 'DB_NAME', 'bartoman_bangla' );

/** MySQL database username */
define( 'DB_USER', 'bartoman_bangla' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xiY5y=lM92yG' );

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
define( 'AUTH_KEY',         '1l3!ZPDu-9~q3(;~fa5hE?p/&~vW|!|h|fOE6.u^KO>+%{~^s~u*Tz(j]6nMv%g4' );
define( 'SECURE_AUTH_KEY',  'jvJ]_I<?P46I/86)x4cdqu;SQgClm;|Y2PybWC*iqg@`Q U~5(k0@%<PC2Hm{2F#' );
define( 'LOGGED_IN_KEY',    'jJ29uQk$2efndEMdubyXb}mfIe_|_<^*>*Pyp;9O^&n^V81mdrAMOP<K_<&eMflj' );
define( 'NONCE_KEY',        'go*E)CfF.lzpre6=>2Yu+ 3#&_iZ+:e%ZMwmdQ.>)Qx/(!J0[Dx>O0g22g=u-f)j' );
define( 'AUTH_SALT',        '6sA#!mlJkxF0)|jEb/^!z+FMVb:Il&>q?VuDuat{Wdp%`K&[J=O0abzPMo%[EUYQ' );
define( 'SECURE_AUTH_SALT', 'V}Ri?ShUgE.SGc5e4PXnS]AGNc(7i:J=A|%]OVm!G u}bkbPbCvj$%5 a#A}cwud' );
define( 'LOGGED_IN_SALT',   'r@,:I2K6 =jk:BgsjPz{^qkS8{ozKL=CTW_i*x.o9C*FibI5}+T_UM#LMvjuvK9G' );
define( 'NONCE_SALT',       '3Fm=sE~2o :uS8.UJjH&(PY!nRohv&+7dHC<cE %0;T=yFWGustpELzfxt4tw+1Q' );

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
