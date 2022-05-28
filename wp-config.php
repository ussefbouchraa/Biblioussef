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
define( 'DB_NAME', 'db' );

/** MySQL database username */
define( 'DB_USER', 'ussefbouchraa' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ock123456789' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '#A7?(LiD8iGOM(Qfj-2)5K5Hh19EjD,1b;0T*7 8oe&UUhBbd?6Xmw,`#h%nXf<*' );
define( 'SECURE_AUTH_KEY',  'YGhTfUHrrW(nCUJoiUX<z:d)H|7EfrV+[2pmum,$($=g7=Fmm,QM(>G>269%1SVI' );
define( 'LOGGED_IN_KEY',    'vCAvC(tWi?HUL Jx%TSMAiNwY6Ce5-c#RS+A?$jQW #!JIZc8gU3Zc6xB=pRpvIr' );
define( 'NONCE_KEY',        'Cm{6,srPe!7uNe!LKAFyRwfHj%?x},bcQ ?`J~=@,Qo5:UKu0u<^}^jfLH>eaA[!' );
define( 'AUTH_SALT',        '&Pqrpur$+KC9m<FHi!-?Yw$N<_Bn3Ny/[Hv|zgeE(DGj60)G^Xq,kBEJt}P)qMh/' );
define( 'SECURE_AUTH_SALT', '7W8};Vq0+i>sQJcRAj-^I`(Z?U2_d1+hD:rY^!.:3x@^ 6-XVts~<nmT6zJid4od' );
define( 'LOGGED_IN_SALT',   'G*zPuZ{tJ]E-m0s(Oh:Ywtp|Gh?)|^DX:c<)D-$B2MN:duCDz?p~j/%88uz,gV!f' );
define( 'NONCE_SALT',       't3rRQ!&nQ1K$W<1[M./6Jcpg}7iqRkuQrp4grh6~Vrmf>;n`U!{^-y6v_eod~!g|' );

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
