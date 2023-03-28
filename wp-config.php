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
define( 'DB_NAME', 'newaaelevator' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         'y?%A5-~p/Kdc8lPG1bLZ7w:[7aNLQ=q4#CvGkCOQCKOW*YKZ)nOLC]RMgHt:4+)t' );
define( 'SECURE_AUTH_KEY',  'P5lu0{jvxe</iq/r>a?krY2R;aS&|hv@g<&Yh&z}Y[b/O!:.%_anEUj=t_2(?/E@' );
define( 'LOGGED_IN_KEY',    'L]RvT} ll+7RvwbwD@U!f`T94i1IG1M2)JXNG7M+$FmxSA,:~1y)$I.g<VMJFnA}' );
define( 'NONCE_KEY',        'WNC^4umli4im@Y%WL:y;W%#eP)<w^Czk1ZSE B0>)Ke?6zF%n((.>a9azMG?Y!b4' );
define( 'AUTH_SALT',        ',x}wQ{X{$LwY:zPXm4IKL>)BrS,VQo(Dn#KqEX*U4,cy-)VhK_zbxy0Ccv_P/+`W' );
define( 'SECURE_AUTH_SALT', 'n4]F5%!/Wcx}K:#YU{}wmjzDK`{VYYkI<90N7]ZFg<O8THWv(YFU_rQZm?llurD;' );
define( 'LOGGED_IN_SALT',   '?mBHBIkq0j{URz@_*&Ao4{|!Rp?5C:EI;?O>jB5H*0ru/Nsgm$EU?`0T()Yi</EA' );
define( 'NONCE_SALT',       'Cgl4OHi~&BeF[Q/7tD]=gxFg~jn1>Ul;cM|YZ9UbryltHm*Up$+cvwL-UYN%EZ2;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'aats_';

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
define( 'WP_DEBUG', true );
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
@ini_set('display_errors', 0);

/* Add any custom values between this line and the "stop editing" line. */

ini_set('log_errors',TRUE);
ini_set('error_reporting', E_ALL);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
#This will create an error_logWP.txt file in your site's root directory. Let's see what it includes.



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
