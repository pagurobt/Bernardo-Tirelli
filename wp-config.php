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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'Be7,4vU?Ix}4E$FVSJh?cYia&*WA!H1?@N_{.rH7/Vf;p}%# ?oo=O}|8T]GPI^-' );
define( 'SECURE_AUTH_KEY',  'NyfzMmH8XzkMvyi0*;^&s{$zCz8qxmb[-[c&-pe[)3I!0xYpuPZyO.NG)Q3&abPJ' );
define( 'LOGGED_IN_KEY',    'W=0LcXTtT-Spe4(fI}8$gRr@v7N0qd%$!_Og<d#{(:9s]<^*Ks?H}OB3pnwJ`kZ)' );
define( 'NONCE_KEY',        'Tw.54/xhCMS8)GI@4Qihl?M(yZ[34r7[IXX-BnN@.+rGPvpiPo8mVQxl359w,eg_' );
define( 'AUTH_SALT',        '!hkh)-gN_lwY{A`6@H7Lq4)@KSU[=/5L$k~va7E]bz9Jv>--BtED/Uj:LOFP:6!`' );
define( 'SECURE_AUTH_SALT', '3n~e<rgsp]~4Z~4+/,G(TWxb;BRst?|pa>%<fcw{>4 _fmr+|~t72t_z_^FY_8uc' );
define( 'LOGGED_IN_SALT',   'W<Mx<xA_%cRf6Am_6|0<vM}y:PaXfd52kRj|rw)s4_5Hl?lK_(rqx+[J:1t8[%Fg' );
define( 'NONCE_SALT',       'byJjjk!Uv3_=:by/)dLv^f+|$J&ksB}xy.U5oT-i!c+FpY&e{Q<L!>o9Wc+}X1K)' );

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
