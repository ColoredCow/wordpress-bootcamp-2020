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
define( 'DB_NAME', 'wp-bootcamp-2020' );

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
define( 'AUTH_KEY',         ' $.D6c1h[,w;^kt.24<Z/s9bvvG945`~[KV]d@/y-7H<nWb`o-<=T}(Lil0VrhHE' );
define( 'SECURE_AUTH_KEY',  '8xXo[g9.*J[IQ/zLO}4xQ*R%.Dh$cL8WtPc5(=suZq2T_]f|&BlJPYa8du8 GrM!' );
define( 'LOGGED_IN_KEY',    'Q&*x&ECNc5)3L2-0.vaAKy,s?1Lh*>`sC&z#bmk3+f<nH3wa9$H0a*Wk^uSL +m;' );
define( 'NONCE_KEY',        '![W+4P[pO.i}mI49q9xf6UMJM)TB qQx8Mc_{PGkd/!FnGsZH-%|{iIDbWUfT{FK' );
define( 'AUTH_SALT',        '<EF|DTWz4C^L=D^G4<l?iPaNcED,J>4LUCDwwc15t$._>x*+@ec)77,fD#+nvW)X' );
define( 'SECURE_AUTH_SALT', 'p|etXuzHM7+jhSs~yVSVW$u|x%>9ftBJlT5:;+%m%g.qyK/DUWe!o_Bo//wGja^G' );
define( 'LOGGED_IN_SALT',   'pS8DL^fWw 6>1}:Suo(V]Yqad6,UAjjC ZB%Jy:InlduPj~~I*D_{5i9wg9waJ=b' );
define( 'NONCE_SALT',       'MnG6VIx7#N`84Q,SJK9Z3I(6[7J+IcLIXyuHq1@!|D X:L7=OY#:(~ek&[|#ehro' );

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
