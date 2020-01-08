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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pruebaElrelato' );

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
define( 'AUTH_KEY',         'um(GG@u2h%xi+`k#:|t(Oq s/TC4JG2Y66`|}-gA618c09D`}6OL}o]<Pw%HabJq' );
define( 'SECURE_AUTH_KEY',  '^E0trCG[OEv$dpexGO$FY@PL+|~oU;)_a|]/.u/6^O%i<22TfBh}Kd/Eb)?6.N4?' );
define( 'LOGGED_IN_KEY',    'X-d $zf sthikBiffze bM/di%pG7%)vuK&BLeLV2Se{M0_jUBTAX^q}Z*`e|h0}' );
define( 'NONCE_KEY',        '4X5@fX;J|W5m!}qJa53Pj[2),`CQ9q/+vp5Ol]=z[z~>)GdRyyzq_JV!;$C^T-8R' );
define( 'AUTH_SALT',        'Sl)E.<Ak@A^.&b_Qay$o]FzI/x-8Ga+fX+j;T@Eh;u5>;4{{WSej~=Lwm=-8kBhG' );
define( 'SECURE_AUTH_SALT', 'iZ[ QZjy1s1R_)8R#bwM-*oUAx8<&K,58UlJ?O~&u&7J?q|-bgwHN-03,_3=,B 4' );
define( 'LOGGED_IN_SALT',   'm`[X- y[x*hx/Km{@1NJ[^`RLVN-@ut^UY+=Xux#bqdKZFhIAr;.<.szDy107dMW' );
define( 'NONCE_SALT',       'w^=,r3{3943mZ=|v#hR|DjYqWb!1pnX{$%|a{H qYE_f/RR(7Hs+~+_4}zWhc4o8' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
