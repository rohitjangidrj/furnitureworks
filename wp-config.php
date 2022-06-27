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
define( 'DB_NAME', 'furnitureworks' );

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
define( 'AUTH_KEY',         ';Xg7=G^SK@t?uK!_B(+X2*JJoTG%>h+wY@9NaH0^% cK)*=CwgnXO$NyDV&yzBxm' );
define( 'SECURE_AUTH_KEY',  '$WOWJz8o)+?JMqGx8X9ml6gBNM!lJYA&w>1f-o3$XA4`4}v2tB(<Aq>T=9D~k2@@' );
define( 'LOGGED_IN_KEY',    'Tk0|g60OH)cY.~)O%P}B]tl~,*~VA6/g^.EEXNZ/;[0kf2qdZ$uz#ZfLck^m9!)V' );
define( 'NONCE_KEY',        'miO7(nf=(^}>YHnrMHGB#)|*&7{ F>H,@9el^}fJ@9t%Ix)9(f:~b8 UlZ93vbr:' );
define( 'AUTH_SALT',        ']hAdH]A^=gjuSe5 s51F/(uVqn2kH3#D6^Yb=!Vp=fVy5cqdt]go8v>Krr9XO?[q' );
define( 'SECURE_AUTH_SALT', 'W8#|O&<wAK{vnI|`w[y}pg2f:jsbKge6CDcuxov0FDuCt#,NutN /ypGEqBQlJ=#' );
define( 'LOGGED_IN_SALT',   're&j]Di),~O}CE1@oZvrQ&32Ff+xrx$rJzjyJJ-oQGv12E4*Z uOH DDS8qyE_k)' );
define( 'NONCE_SALT',       ';N_N}#v528Sq_+T$5^&X:le;.QC{/,mAU0y$B,Pleq5HC9uCc|r_;Qtx7>l}xl{@' );

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
 * in their development environments. Rohit 
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
