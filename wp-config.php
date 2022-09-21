<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
define( 'DB_NAME', 'MAZE' );

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
define( 'AUTH_KEY',         '1tuCgw)`C=k9K#f{`1_)V<;1qpAlW992Ad,UfRX20E-Ts?]M.7;!GjAC@6+T9VG1' );
define( 'SECURE_AUTH_KEY',  'oK`:h</_,o4OLm-|dnV},d2KmxWf:[9Ki(4u{+}<K?C>`xS(&0xCi|8(T@`l(n5!' );
define( 'LOGGED_IN_KEY',    '8m&qB6h_me>k#8l^Z`O4Z/5iU9<r^<0`[>8anZVp9;jTB0,TBnv.,@:aT=`J*cN6' );
define( 'NONCE_KEY',        'u_5J6bn&kcUPr_O.&AKaXTRnZD^=wUIjQ}<AIl ^HtE^y9B-?c?TJx#xT|(i4.af' );
define( 'AUTH_SALT',        '0i_S,<]7aHIYZHCqd/V&/e!ESc1r]lLvodZtNI4AoXw(<J&S#pKNmF,@DXbtG@b`' );
define( 'SECURE_AUTH_SALT', '%mlpO~:_bDaAy<z= +DynlW9]83Yod9.-851Bk?D|^& 4p3#+~DM33u!u}#n c%m' );
define( 'LOGGED_IN_SALT',   '|OBeZ#V%x)-y8%(rl<KMlTjfF8%n_Lq}/+y]Y=>e7Imt3Mph{vuix?^7I227iM +' );
define( 'NONCE_SALT',       'TKE6DPctO|I3=|}>$pjpry._=P?jwxhHCqx>I3=8bl&?0/T2KO]J@?akeIQOGY&w' );

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



define('VP_ENVIRONMENT', 'default');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
