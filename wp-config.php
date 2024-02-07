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
define( 'DB_NAME', 'Velez_DB' );

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
define( 'AUTH_KEY',         '3:;.uIXjLl1dc|;=m(V=B2ww?~epl93$rfj>2ZJfbH-Me=bc2hK?Z >j_+B>4?uw' );
define( 'SECURE_AUTH_KEY',  'yhSduV&8oQddr, |0*|eU9uS`6PMu#YIKJ|T`rsS_*]2Uu(K)>kjawtin8bxb;R(' );
define( 'LOGGED_IN_KEY',    '1:K=vV?2>jL][:bVFWSTm9s3OYh0LOj6EY^8~;5^i<Wi3*,n<NsqgvQojoWIY4kp' );
define( 'NONCE_KEY',        '[r5V@ 0iR+&zcK?Ox~&%Ohqy:MzYW&uRAWVv(jj5O~$, rd}73)VH[~DS$/Mi%e,' );
define( 'AUTH_SALT',        '6.pytJY|I*O3PNH)&hr~GS!;|e,>JY~m^ov~Iv-3pOSE^8.D4R}xb~Z cH-m #.d' );
define( 'SECURE_AUTH_SALT', '[oQ!0_uozvzCPN,SnG2bt]0FtA5IF`8I#KHT*Ep%4,t)@?T8`gliZu>?TH3gJ+7a' );
define( 'LOGGED_IN_SALT',   '=M(-Aj$#Gp&q1LIm k=x/O)> qwx%l=%VSZ2IE>mP1Uo]wj^/$BvQvv<XLsQ?rS5' );
define( 'NONCE_SALT',       'y u%B^KY0,:tRtGF?IvJjzU,#zJbU[ LY7ivJ*q4ZM!pBW@uQsG>0cLm-@B^|]d|' );

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
