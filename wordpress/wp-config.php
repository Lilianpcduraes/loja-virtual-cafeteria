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
define( 'DB_NAME', 'banco2site' );

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
define( 'AUTH_KEY',         '_Y#]#4(as>zQ+/v5L{(4f<ws-E&L_w]~-;`ZT/iN9jg_*F7#+ SUhy;EC/qt,CL3' );
define( 'SECURE_AUTH_KEY',  'oA%bU(OR5p.^1,%^*T!xr=!ec8bJ$<w4ZG*|}$O|F)^uzkmmdE_O+l`ECp%4]rwE' );
define( 'LOGGED_IN_KEY',    'w)Z+M:@{UO-JILM.P,hk9v9.1|v|0Ewl7WF76|$Ikp%Zp$:t>LyKwmv,]j)]<xYL' );
define( 'NONCE_KEY',        '^l*k+iXI&3s~yix6%VMC0[&K_D;DKQU@}2at$$[tQ(PZ7uBe)Hb/RV`be<h0HJF;' );
define( 'AUTH_SALT',        'JVgiyWcVJ#Jbrh[qsi@(s1<]p}j8{?Xg2Vh>:G.xWcQ8W[9CFz .Jr`fhi_bgTw#' );
define( 'SECURE_AUTH_SALT', 'U$|NLw)lxu%=&%hnvZ6@ >$#d`L{tut}#`Eq/ah[G|g<i,Ln{!-X/F8p`lgl,ddM' );
define( 'LOGGED_IN_SALT',   'v..JIuE?.VSb~XI(4(r4UnU+j#)vP>]coY-hphjw#e%bhv1bpn|jj#! <w:hX6B-' );
define( 'NONCE_SALT',       '::?I-v[!Zfph|EA<!Am}i>|U#nP-ZNI!G7yBIs.,kzdIc)B/-}?ZdbB;IFlJ.ho=' );

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
