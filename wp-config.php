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
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'K&U*jcno:^)!dZak?uBLd<47Z=ugAD`;BwFuxXe~yY2Am !/p%K}dZBM$yM5ILV1' );
define( 'SECURE_AUTH_KEY',  '1/T!pg4?i?Cm3<o8DYAH}|Wg0TZM:Tnz@?`Dlu8d-^I[mGCTaoLUUr)EKDKTiC)|' );
define( 'LOGGED_IN_KEY',    '*j230;Zmmz7l}&s,y}4d7Yr_wn5~mIdnmFZiK3wh,yTcJ_dabzUY%;LM]Ym.C!Y>' );
define( 'NONCE_KEY',        'h#`{@jNse#kY2FvUe SNAYOJG=)EICdIj/T qL^j7|35+`ex?np*3/1m+_3lpd?1' );
define( 'AUTH_SALT',        'fO7Sy{VtuZm9y*L-1RxH}ETB@nfC+^2_{]Z`{K+Bfb0Q>SwOk~xMDIROk<OSv5L1' );
define( 'SECURE_AUTH_SALT', 'T^r;wv7RqZVu46.sxEiP,*h3JQuuz,N+oIZ*CnY9dhs(m9e_d}[*7IOKb{7iB.8,' );
define( 'LOGGED_IN_SALT',   '1ckYkmky}A%!3+}B+k-bufk%(w~(+w:M`EnjiW?Yf~Q#ZIrl=PJW*I/}!)Uo1/tt' );
define( 'NONCE_SALT',       'G>nUoUTK_{~/ojzLmM3/k^53kgW|]aQtHr}z0<GW; j9<g9dSw_aj.Io<{4N5ld3' );

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
