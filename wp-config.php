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
define( 'AUTH_KEY',         'r:Lt{Q<qx;b`yL0QtA}X<Sc}W^VqdEA_ye/l!8gLbnD`w =jT@Hv(4(`UyKbrVa%' );
define( 'SECURE_AUTH_KEY',  '2$jgS50cz@q(o9p63+,+/k>{v|7=e^mrUqL-cH*FI,Y9lQ>/Kwl1nT(_:@&&xT+d' );
define( 'LOGGED_IN_KEY',    '/!> #@okZde(>,wF5K9X}4);WC,RIZ,A/Ir2{(=HEr}5wow.HS^kEiS*c%Ph/nh|' );
define( 'NONCE_KEY',        ';F2C9/0+.eQARh+u|,h] gCF3IQHB>:?/uB}D+57rt]Y>A-F;Ax%OUdBd;/zSL*(' );
define( 'AUTH_SALT',        '!h&.KKOE!!u1ci0234^SA+/3,3+Eapyo^V/j> bRaZBVaE4U*y&+H/SPBpD~*>9m' );
define( 'SECURE_AUTH_SALT', 'dd#.<2L)zam&a?y_?a KHKs%vz2P!^ygs_0&PS]j`1G#&:4e90]kJR):CnqOmozZ' );
define( 'LOGGED_IN_SALT',   ',ecK5Ca|E;Y+Mq-H@-ckS ]C|H,g7DWBD 8kM|.K-}Mxes7c)hI5#?V-G{iB%.C=' );
define( 'NONCE_SALT',       'Oxj1Ss|;PuxHrL:opigy7X1*neTd{Zfl,R-r6I$#l%i0Pu-$ F./vPAgk@;BC1D;' );

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
