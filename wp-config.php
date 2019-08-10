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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hehe_db' );

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
define( 'AUTH_KEY',         '?=+UNsMOI$W/Ts1>-;$qxQ5,z5gG|U^j_#M::6%]YP2.wQo4i7P9ld]rGcsDP`,E' );
define( 'SECURE_AUTH_KEY',  'BEsM+9&q@~);S>vMnNuKMk-<0n/Lf7|YG<,]Gm[jb{[jdx9xbu:^yH<Fwc;uPr=A' );
define( 'LOGGED_IN_KEY',    'iRNmx$g#rAE<|%oJtkwFxD#r8t#W*|&Tz=J5uU[.CD7tVN@pbqL{`CGXn>d4N3`~' );
define( 'NONCE_KEY',        '60z!e[gzz}~+rUZUb5r%.vG3u<=*o@0{kYu4S~28!rP|5_t,.zak>3}~n-k12T0_' );
define( 'AUTH_SALT',        '&IvC[5>ooRXAw@+Y f],_!53%09p[<X*BOX4:@KFm-8y_L,t>;sJ`~&zPtkN.TXo' );
define( 'SECURE_AUTH_SALT', '?[d+9V=vF<zi BX~8 &nXi9Ic_Va,Lgc`d2dzE~~*D(ufi5^nJ+n_TmM_S!5o+-|' );
define( 'LOGGED_IN_SALT',   'g`;uIw|3>).D@pxqAa|5nh8z[YBPyGC5=1I2k61o!TtrpRf-:w.@vmW*}wF&/Z_!' );
define( 'NONCE_SALT',       'frsZ5H,75L_+ZCt2wY!/;eO{{~!*+cF!sh+x]b>/Ifi<*3$ BF<N$l|Fq5DT(T+|' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
