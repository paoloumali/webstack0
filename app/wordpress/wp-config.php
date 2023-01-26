<?php

# help wordpress understand it's https from proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

define( 'DISABLE_WP_CRON', 'true' );

define( 'WP_CACHE', true );
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
define( 'DB_USER', 'wordpress' );
/** Database password */
define( 'DB_PASSWORD', 'password' );
/** Database hostname */
define( 'DB_HOST', 'mysql' );
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
define( 'AUTH_KEY',         ',fA5]11Q9Wprg9gP$b_l7UACiz1 . 5Ku !?z>yGL>Fl0fiHXs!&W2R[38=TO$08' );
define( 'SECURE_AUTH_KEY',  'nF2cfYZG4UWNV!Yr?oT?;7h kh5k-;F6bU5h;[}F[1xnyUY>m_5@mfJb3bNV+mw?' );
define( 'LOGGED_IN_KEY',    'o)q)(Svq/e]q~tOwZdgUW0@v-D8*%by-gg}Sr-gm7D9t[,7Mqe{l01&&|-S@v2*F' );
define( 'NONCE_KEY',        'godBC2J{ 9,WtL*Z|$f3(3eR9-oE=uT)Ff,W?ER~+e-dEC0]?.k&vxf!1CG!INhz' );
define( 'AUTH_SALT',        '<x`}Wzq]Y]8KyH+DpF.|W>|7-Gyh0%259y6xA5Y5_5r~embm^KzXJN*3QD#qYWms' );
define( 'SECURE_AUTH_SALT', 'o>SzFwQgqKBgqhtN2+<zJ}pu]C_juVJkm!RhkS!t:2SWmt(H_0}M#cb%J@;m4J/3' );
define( 'LOGGED_IN_SALT',   '5w x`#MLkoY$B|R[jzh> > 5-73KZ8&cDTdo>+iUU;6ui]74E)rVUEd4aho5Tf=F' );
define( 'NONCE_SALT',       '0mGc+ U{H},xbKt^gCCHL,|+jwr1wuGUnC:2UU{jx~Q8.bnq7V,+qu8z-BPx)Sv4' );
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
