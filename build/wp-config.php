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
define( 'DB_NAME', 'space' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Qh=(#u[i*4cZ_*[<-G^R$vEa5(El#Il;a&%Aiy$3.~{W/>%dgT^,PlzcoY;Yxo[<' );
define( 'SECURE_AUTH_KEY',  'pCBhye@t=ldMH+>+TFn;.-iytaZSI}F LlKdnYq`!px=Y?CB!-.C`QryN]ynL=-q' );
define( 'LOGGED_IN_KEY',    'qdF?7H^2A5xfQw)(BU:33|*JY@~?M)%>HbH+`$OJD4}duo52EX5NaYj_x;r1HK9X' );
define( 'NONCE_KEY',        'N-~>&;;Z(A`{c^Q5q$4-h;qdR)=(xPCSQ&Cg@c:}raor&g$^`vU|s8i_L{2ZQ@Js' );
define( 'AUTH_SALT',        'GqN`4dB#F/jT3ja}_?yfv s(u{Bh^BjQFv&YZh+ cP<eQMLy%[f{&BVCEeM1&<6(' );
define( 'SECURE_AUTH_SALT', 'VUdLKfbMaFGe[@&+52bgOz[F.d;rs4oClN~P:FU66^~12$WIj]6fxT,.k@_kBnPq' );
define( 'LOGGED_IN_SALT',   'A&.dR{D-hK:+QG}ejP$^Dg =#HQvj%0f!P _?ts=lD8RA?#U3SL,Oy-6iKird=a!' );
define( 'NONCE_SALT',       '`Bv1>9bD@KveBqjPsJ>`JxpUF2<xmX8K*odfq#GA$aT{%w^BCnNPaE|0f(5%vRDB' );

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
