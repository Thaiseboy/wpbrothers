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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'F#8,L3fxl NZ[;R{C4%UiAL#ya(KiRw2.KFkNQXVVxvLs]w}7wRLbw{KT:ALLHK:' );
define( 'SECURE_AUTH_KEY',   '%<Z!>JG&au8)9c|/S#6.q/^vqe6tM@I:)Bx{}@`2*H#BESv@6/Q6:~g9LaFJ#tIC' );
define( 'LOGGED_IN_KEY',     'dL3|qQWG%e,.&);-e%d<#gO29LYoZVcou[Fjc^Nhe5+{=pW0^,D Akbib6mHD6b*' );
define( 'NONCE_KEY',         'mZJ*Xpb]hG5LhEMcigI}+T&2pzct[1wcLyqX`KzS3Dul4dxl`=Fh2(lQ0:yM%1f(' );
define( 'AUTH_SALT',         'i^sW/#PYC({V}]wwHEEwC,K`8/|dR[ud;y>t(F$yDTUzML#QOhZ?[64S.ckD.]hg' );
define( 'SECURE_AUTH_SALT',  'o EqR28?](V0$~;No/#n3?q~K+t<@;bwq]-&x!lTgCB(_P!)0K=@ro)T+wp[Dg<#' );
define( 'LOGGED_IN_SALT',    'rZ^1g:jh1,!-yq+]UK,{T,Lxy.w>.H!Se~(^t$fk +!<+gh<X+nwA|:PHYmcdnnt' );
define( 'NONCE_SALT',        'ES;m#M$Om[!>3,?+1zS/N7c{xB)Hpz7A8m1FzME-(Jm<@]hy,TE3cy&9R_q@*7RZ' );
define( 'WP_CACHE_KEY_SALT', 'T#yi+1SMY!$@o&Qhqt@K&C2D$4VNC-1h,|7ux_I9dmTd,{bZVfBy%-xWn9*WKE}+' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
