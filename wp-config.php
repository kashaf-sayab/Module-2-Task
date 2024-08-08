<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywpdatabase' );

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
define( 'AUTH_KEY',         'XW>mENM-]W$K4nr,&v)$`[Y5yA-Jpp<LeQ!C3T$>N.462,xVL~02iWl`JqQ}6!vh' );
define( 'SECURE_AUTH_KEY',  '|Rwy3WNA}icEJ2-I9C{^{Q4AEMhRF`zv)`RL(< l~#WcDY4{ynjQW%lwhtB-;Pe0' );
define( 'LOGGED_IN_KEY',    'G{e#.hQc4JRbul)9CoH*Fo)0nVavrn4T,SE,iaNZg7%bmKIQ}375Hs1__3&8TTp&' );
define( 'NONCE_KEY',        '!f]DU2.1]?)jGe%~p(0!{XJ/6wYEqJL]$M=}Hi )skRigpyIy#|:3d#bI?Fz$w{Q' );
define( 'AUTH_SALT',        'kVv^6c) m3-xV7$t~PZW;=X)d+[r~8E+pK+qP-li2^<h_*l*[Lb$D_ISNoY`A)Wh' );
define( 'SECURE_AUTH_SALT', '8bAgW!:bxS@g,+{!cpBijco`;o3@,[$;meqo}Agg3e)H,PB(88Mx18zQ{<XxF:PN' );
define( 'LOGGED_IN_SALT',   'LjF)QOzss7gc}eU/?Q&/Ob<b: {?AR_75CZYNzFni8NOCfZwuBPo  N-MbRdQvK6' );
define( 'NONCE_SALT',       'E^t%%T|V9tvS`W<C&$C4gSsY|.?C*<A,3 l+9[MP4Fpy7~E&![ %{7U4OuKsJ!}N' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
