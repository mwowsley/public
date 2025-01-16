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
define( 'AUTH_KEY',          'GP(0&B?E2!]Uxw,X`Fvd~(LQ~HS:{0sNF6LmGH/=lA|WOo@n uos?W%eWePs<+;3' );
define( 'SECURE_AUTH_KEY',   '8W[KMPR*?t_Eu2%/Gnu<wr_wG22Kb?toeU,]Tb8XtS$9p$?glCS,EPpUHIziI:Hv' );
define( 'LOGGED_IN_KEY',     ')8tUa#7W9ANL0RA-LI+sqzB9Mnf/<!%dxiRM<Ne#,:L(P7TE+.1.ZMfQDx}x;@#b' );
define( 'NONCE_KEY',         '.)]ua~{S6N{XIzwG+4V&v5DE=drE?S%HfAni*NZ^O]WQPeuv.M^:_$x|%<E!</;+' );
define( 'AUTH_SALT',         'X{4#b=A`4H3._~/Sn`zCqwdRAK29VY%1My%|x>*KUDYk8[&XR]Mx:FT}y@J4_QW{' );
define( 'SECURE_AUTH_SALT',  's^c]Tc+Fs#<|hwCs9Ya]2VukUwvk:L{N_AU>~8|,F5.6Z_ec`syTP=dP(241A!IM' );
define( 'LOGGED_IN_SALT',    'TL#oSeWe+>n@{:io)8tQhZ@KseLNJxST*`%L<v#A)~^6/89%Slmao(16SjQS9H4j' );
define( 'NONCE_SALT',        'V#1u!s!eM8%dx<H ~W$%bivS}tz+^e9Tl,~n Ez6zVNY-L#v~gTP#flt3yCnzKhy' );
define( 'WP_CACHE_KEY_SALT', 'xG}vX*tlkfAO)Wx4GI-!An?~?;y<JF}W+7^pj~O{bx{=BcAlMkL4Xh)&+1~U0< `' );


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
