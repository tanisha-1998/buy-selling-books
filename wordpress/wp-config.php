<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'w#u3@.Y;n,~& 48)VA%jE&)~H.ieo;o[8vG|((S/%*D$A> LhY SmMMf.;Ww3<R^' );
define( 'SECURE_AUTH_KEY',  'i?4yIJ@2RAE+q;6IX1FeB*9co FwvrQws1BtVO2cJ@cK9hOP[>3:1u*bD6&;eB;[' );
define( 'LOGGED_IN_KEY',    'E]~O$`;&6NQww[CeZl(/98fr.:kUoMiI[QD^GQO/;XgnuHb76y*Rz7)rX|ehPnSt' );
define( 'NONCE_KEY',        'Q05%+2d)6N]_XLsQ@B,moqw]`^XYeZe2o^v#+A7E:fn<LW6[9B:xRXDP^[3R549.' );
define( 'AUTH_SALT',        '*:l&kK!XIYSq+j7x-b-U]=)(2gY^_9GWA.3l($zUfrBZxM0@js_>Oi(Is3]w#7Co' );
define( 'SECURE_AUTH_SALT', '+S.oFqag8GR%51p2S>2G!JxcJ%)Wo>,&Wp5GP0,1d,Z $;*{Vgi*3Kc7Q*{VZ;MG' );
define( 'LOGGED_IN_SALT',   '%`yru)Tnl4,hnH$cWoz<;SMRYO2-Z= -q7f|yI(`&> mA9]|!J@l%1@>#rye<(G5' );
define( 'NONCE_SALT',       ';n ;s)j}zdpeJwa(zfhn9m)H:{[U6E(e5I6ec3!LM4c>c]#dt..B|&XC9q+$`@.=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
