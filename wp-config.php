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
define( 'DB_NAME', 'GdfynBSlFv' );

/** MySQL database username */
define( 'DB_USER', 'GdfynBSlFv' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ZqseIsKYQG' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         '9L.{B.!3Bh0=|!/#w5qpt3xu{`nF1j<Df`kCl;s$vA7>%][t[in([CCOlv3!%Wxy' );
define( 'SECURE_AUTH_KEY',  ':3*zC^r`cu1b_d>b(@{5oRx- YjXR`p_8z/xkB3mc-rpzJ+|IhFUaaN3DOo[wb:&' );
define( 'LOGGED_IN_KEY',    ',I*,:=(qY&G6zJC[C`;+{fT:qjF!k1|fQC` `6+jN_I~^`N)i }w!!QH2j@B@fjC' );
define( 'NONCE_KEY',        'b%&p{$=YRX5t1u]wUmof)a68&W=9^f[?`+BF^RYW3)ATCgi^%F$0qB!aY-f6;$>+' );
define( 'AUTH_SALT',        'YAu)WJ=BKe*^n)WCY-/6JajXc}@; +IksWqYxGP$ko|=r%=0bA7eup(m4}!+2jxG' );
define( 'SECURE_AUTH_SALT', '&290~Aq9}7Q5Tb0v*8vEBb1J)~WR3]{esZX(Ee(Y_sqHgQKw(ZvrMg$iMS^|-yvF' );
define( 'LOGGED_IN_SALT',   '&)Mc}05O/r-q* T+B4;yRD&A(y*vp1|E9+I|~q[It?Mc`:)puQAfFxUrw: q2jg#' );
define( 'NONCE_SALT',       '5!JSA3;jC%i=0atiXd$FyVn v<af*?#e0i)n.{)j83zlixLY|YE7;PdG`XS@C$;+' );

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
