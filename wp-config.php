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
define( 'DB_NAME', 'forgebit_test' );

/** MySQL database username */
define( 'DB_USER', 'forgebit_test' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ftB4dMH4cczhAK5K' );

/** MySQL hostname */
define( 'DB_HOST', 'sql581.your-server.de' );

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
define( 'AUTH_KEY',         'pnBMZe<z2a0iC1i?*?inEr9wlR25Whm5{n(:^S[kC?Ud?a^Vj&7&P{#5dc9BQo*8' );
define( 'SECURE_AUTH_KEY',  '%F$dWz^).JiAZ^~.ytjdr]I7lHmGP[G3!I3(;,>,/`Lvh?k>VXC<_.]XWP1zMZ&z' );
define( 'LOGGED_IN_KEY',    'rRfu_tfp@.ZQjf$an|V,o-^O>{@/*DGeZMuysjt?F0iQd0_5j^Y?`DCaeOi`[dWG' );
define( 'NONCE_KEY',        '#<j6>,.#sV_vpLdE.1JQq`ue$FY|(=/$58a[b,O+ik@g1lcNvaQ{~+(e$mK?dw|*' );
define( 'AUTH_SALT',        'S_UQ#AL^:l3+~Y5v`U4)p/2*+NrqI{~Oycydhhl*-)O-(+$=(MvIN#5qd38I]#]?' );
define( 'SECURE_AUTH_SALT', '5hDo@v.5HSQBrv51`SxJ+lVpZ3m$RlI-KT!>VLX#<7df4[ePxo;LU[`$(mP{n&u8' );
define( 'LOGGED_IN_SALT',   'X[FN2K*!X@JXX(U|mm@QSvwFa/$B 9+2[Ugk^9,Ffkj{F*fq3*@+.~._7)?=iJm=' );
define( 'NONCE_SALT',       '0EI~jC=^7:egMZ6}cCg:xk4>NQ,Vqn2TMgl3S0PPS;#K<MMU?}@A@*Lkg5zUqwAg' );

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
