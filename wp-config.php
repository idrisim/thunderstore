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
define( 'DB_NAME', 'thunderstore.ml_db' );

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
define( 'AUTH_KEY',         '&+v:8W)C/II@/oh!RCsYV%$U%iMYjiUBIC_Zh0n?MU;Jco*f3}F~qy~p_A.%vb,>' );
define( 'SECURE_AUTH_KEY',  '=1m!@.]9rum)oL`[^{VJ3&t1B!2O-mzv88N{8oF.#jH 6WEo+Lz:q_6z|I7u<)_w' );
define( 'LOGGED_IN_KEY',    'I;6am`K&q<VRL#A#Mtq003a/oXm$24 |MJERJQfl.9pe&<-x5zUXWb|&_{V^]45r' );
define( 'NONCE_KEY',        'OoHjM61A$L-4 D&11#hRX0,]`i*PfMPRl.VX(csz!tXdS/ts;IP+rJ7t8b^|;4O,' );
define( 'AUTH_SALT',        'X(5f?{fh%sqyM^6^qy[ETHkZ#6Jpr;)h/eSrDP4t|Nst<7aJ`T+hw D4gciL9sgH' );
define( 'SECURE_AUTH_SALT', '@&%6qL,hH ajfeq~R{WW-Nk0pmGF(16L(qQqy$s(*^Y$ghh7kp>89yA5Y?L8U@14' );
define( 'LOGGED_IN_SALT',   'mG(ujr&tY5Nev-m`!t]+O1>eb<G#M^n8qvOiy)S=cmyZRbT(Kd=ERN7t_PdF;Qkb' );
define( 'NONCE_SALT',       'G=JjQKMfQd$8[1<)ilSLp2].-s4a}Va)<^B.OvHn=9SdqQ2{|{9|=lxlKfMi|D>>' );

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
