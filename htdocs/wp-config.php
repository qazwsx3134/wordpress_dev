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

 // Use these settings on the local server
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
  include( dirname( __FILE__ ) . '/wp-config-local.php' );

// Otherwise use the below settings (on live server)
} else {
		// ** MySQL settings - You can get this info from your web host ** //
	/** The name of the database for WordPress */
	define( 'DB_NAME', 'PB_wordpress_test' );

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
	define( 'WP_DEBUG', true );
}


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`2^4 S@fdS(<xzmBn1^/Lk[`sqR,Iv20y^aw%.le7U%MrJS<3*fIx8bqi%<?9n::' );
define( 'SECURE_AUTH_KEY',  '[+EAEm]*n#=MC-1(n6vDVne1gX?9Srt<BxnepQf&`u+Kuuw-HroXI2Q:h)xd/YL ' );
define( 'LOGGED_IN_KEY',    '(Y ?:DBX#Iz)%;Z2xG1qpU{17us3ZV}owV~`zb#p<]QD69?4I~|Chu@MM#l*F,@(' );
define( 'NONCE_KEY',        '(n?!QVwGArTg_%ZMd;mOO8FCnC9|U3tRNl >?Vpn<?32+K$Y*BP9lE!DafE<1gqj' );
define( 'AUTH_SALT',        ';GptE8c&l.5|yliUT0@g8Gy42j>3iz],#Ic$?~#dCm`h[aHM&q4CTsM>+t<<eE)#' );
define( 'SECURE_AUTH_SALT', '=_dR-Ov g]vbO2HKc$1:#J^TnPO$S*h12fISU,ClP(b;]r>t7rR)jmdwuM hvC(^' );
define( 'LOGGED_IN_SALT',   'z|(,zi]k  &/KGT$mgvub=GyWbiQ<1XO5]%WM88S|IvP^A8W-B$Nxh6+Hor+w-2{' );
define( 'NONCE_SALT',       ')BUF+qggWH5tO1]&~|O*6h?$6pliYGI^10xhlzxloK .W2y&@3zIJtt9@bKV6xMb' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'peter_';


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
