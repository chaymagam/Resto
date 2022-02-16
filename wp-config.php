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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ',aMTb!h?|jEAY3IoID6trj=#W|WfC`#{:IfSzcQ:`@i=*h< OgS:C5UABd_`Rrv,' );
define( 'SECURE_AUTH_KEY',  'p0#faZKqRTENTFgJ}Ipg@<(q4wspyQFEUC`sCKn_kVZ%>v+:R(VTq0UL6*D)%XR#' );
define( 'LOGGED_IN_KEY',    'i]n/VBpHU}i`3P4m_Y0Y(;]9d]ar`K}2`oMQ_{=aWr{Skkq;:;:[V].$^viuL5^3' );
define( 'NONCE_KEY',        'wp524y$b~_W/7=cdCF3~`cV*IojYXT(_?gZu,^`5elp8qMUPX:jMaKC21f*G(h9Z' );
define( 'AUTH_SALT',        '(6V~(X[03GM!Pkq[bNV2H&w$#%d`FI#0&?bMc>WJ#Z>|,^g{P|fSw8[GQeD]~<we' );
define( 'SECURE_AUTH_SALT', 'b&uW1SDP;+3d+C+s-hY-&t]g}nAU6LIhL>:PW4)aYG$Eg8/7m| Eco8&?DuQW%*]' );
define( 'LOGGED_IN_SALT',   'Tj{/v^&=hLPqF#<Bl[/@$nDY6g4vw~:7IJ3VdND:x2(S?n0]=X`7wcoJcpzu}B`u' );
define( 'NONCE_SALT',       '|`xT:rx_;J`ZWRmP;#T4eR|(,)W/n<>@MS$`lg-4}# +!jY9Q#j1yLxK_5ZRJJSu' );

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
