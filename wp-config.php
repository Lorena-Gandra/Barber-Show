<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
define( 'AUTH_KEY',         'nD8E5+i2AGmns; M/!<10.e:jKR([f/?JagUyw;}oQ_tv,w^(kh6&)SUTz;W^&<#' );
define( 'SECURE_AUTH_KEY',  '-R& [g8V1kXZ_!]UGQS&iwC cWk$HnB/ag~TGJ^S^eCgf9{E`K5iH9# ux<{&^< ' );
define( 'LOGGED_IN_KEY',    '){UboUxTI7EtdI{Bf~r[XN;-L`BWFUre7MwUO*+L]WYd0Q8U11X,rFPcLq|zAbXa' );
define( 'NONCE_KEY',        '58B}=#?}91L{;j=/hy8};g]+;E||5Qmm%}GX&yZ:i7;r9B:7VmibUb-5<jwwB,!,' );
define( 'AUTH_SALT',        'Ty2yY[{V-k~}i})J~BO6 `-Jr6usH_)b[s_Kc2JZhf=nM_7&M6*wW=.}PWx7eo4R' );
define( 'SECURE_AUTH_SALT', 'lk[/`bpQu^H >+1g6hdC+O n(`=Zy1Yp7={=EoZ-#(JZidh&@#od?<1D$=7jR8@a' );
define( 'LOGGED_IN_SALT',   'rkeZH(8M3!#+%^c>N%+hOxP:uhm3?EMEiZhzd4<Z~d,%<jWD#B&F@q ?cA8$;T5d' );
define( 'NONCE_SALT',       '!k ? t&yRd53KR_dc5.x$EC|9{/Ee}7RIKj{N(g@2i/]y(AD${|m[8_:5%g>~_rx' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
