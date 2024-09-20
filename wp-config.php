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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '_E#ns60{GyE7sn?c6C|~IN}<Aq{LZp~!C/d$Ku^t*]=EZp<p2Yrq^pIIo%yo.}):' );
define( 'SECURE_AUTH_KEY',  'kYLWvVCr%fJiMd%t)}W2h1/(eW+SM;4wrS?;w}`j1>z_TaeyCbz&.0oR.cn2]15[' );
define( 'LOGGED_IN_KEY',    ']dcVJ=*D}P]azmemRByA&<G22>M#o6i79Zqci_b.:$>JXMR^{Vke(gX_Mj7qK(m.' );
define( 'NONCE_KEY',        '8;A[rZ8iPOKI%Uri,7C($2LGfeV9QUk!q+z8FVKgIdq2rXN4LX;lyJ$iH{+qz5R7' );
define( 'AUTH_SALT',        'i}P},)X)!uR[oO5x*ATN-nKft^P[sk9Pcyw{P|oEK,8os;Uo]@NghVl||tOHt,]J' );
define( 'SECURE_AUTH_SALT', ':aL,{|T;z2Zz^.26Gxg#Yj(Fux0.5cXJPwztI7AB%W%w~MAv*n-jM3McGdjU<KMb' );
define( 'LOGGED_IN_SALT',   'u&p?-$PVs~en{)4D^Cr=!mhCn9c0LG,mdqIG$_|K.O;&JNZ{aP_z9F0(FerR<4!5' );
define( 'NONCE_SALT',       'zu!c*%t)zXH@xRRF#/Us|;T!)gY>n>[a.vz_[J9LO9T_>Id;Y={!bLb,i],@Ff!G' );

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
