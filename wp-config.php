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
define( 'DB_NAME', 'bem-postma' );

/** MySQL database username */
define( 'DB_USER', 'bem-postma' );

/** MySQL database password */
define( 'DB_PASSWORD', 'YT2oDyTggCeKkJOV' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'e!4X$xgoq+i{a%B^y:?E(q0C.EF6!R7dz2I^j(UProny| 4vNjv%VaRdxc<OE%-W' );
define( 'SECURE_AUTH_KEY',  ';.$~Y{q03>t[R]r_d~]w3X)a`=1K8#V! md#//}]Vy9b$^bL)Y&!Oq sVf=Y-N/2' );
define( 'LOGGED_IN_KEY',    '<Y%|u:*?O$1F3*>3i.jYl:NQXVGj.mixNqny+K9wb%`N!q8P24U5G[4ocI[bR]j2' );
define( 'NONCE_KEY',        'SpE]@ Wwl8=lw(Ym.V~31%7yk*@@RO_xfg2|}KADho1l+W){%!1?z!i]pvS=23lD' );
define( 'AUTH_SALT',        '4C(hzj*>eYwR%Kh)@izXv:R;jHWq@ory cj&NH}F(t )6lP&3Lz#u;%aV|J1YRl,' );
define( 'SECURE_AUTH_SALT', 'cBWc8-R0]zL$w@W?%Nw>MLzEx]eG 1B_RMCd mW0~6uf{s>0q>Ja 4mQ||?l*G{c' );
define( 'LOGGED_IN_SALT',   'epJ,W?YOTvdRI!=_cp6.?qvBZ(H9(`h$[=K>-Lt-{hNS[,Sr~2g*`q>r%s$L8Kmh' );
define( 'NONCE_SALT',       'v64{%a#LB/H.H:qgvIoxe5*CJ,Uzn<%#P|SwDu5>mSR=8ZmNtlJ&U$h@ABl1q2i8' );

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
