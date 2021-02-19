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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         'v`OuAn:~k%[O=&GFj-$x<ORg#|UO1yaA@xR`+ac>E0e:wG5dn8Ak^/g?gA{)i2a@' );
define( 'SECURE_AUTH_KEY',  '7$7qgo<B|h)VvS_uZ B5${U^Y5~B/$Je/jPS02sbVUKDM5U;UN+jo9Gn3eA(ys;3' );
define( 'LOGGED_IN_KEY',    'L6g?n^{s<17ZJ*i}YUNKxb~(O@h`Xf+ttNkR:-spAiOr){oTCNgLNU;bq$Z#XFIK' );
define( 'NONCE_KEY',        'eA#R=6qgar4zTh=*cQvOw4CB!4*,nOAP<9mTlAXOlgOjp4woh6Yv4<IhqQfbpP<c' );
define( 'AUTH_SALT',        '2HzMm]d^Pm>l%f?&f7SAhpW.qIv<9e^,xB~lf^DN{IH=iQ[1E$Fx6)5>[#|-S->!' );
define( 'SECURE_AUTH_SALT', 'zp72Bnf>xXOtiv=LFco}(b)X[V;vYLDLzLK-$9QD(C^nxyC_40J6f`=rGS!c*-~S' );
define( 'LOGGED_IN_SALT',   '-A04O&s72;hM+NZ 6vL+AnaS8u&Ya]aYl0HCe}jhb421LAA6CtX#e0GC6~,K`XAQ' );
define( 'NONCE_SALT',       'HI}1VK0q>_vx%[owbsjNG#5If3ZC(G5Bg^:i:52vpI_@[ajyckQ3RkthZ{9DlYB+' );

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
