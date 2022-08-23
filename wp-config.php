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
define( 'DB_NAME', 'wp_decouvrez_la_montagne' );

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
define( 'AUTH_KEY',         '9pq/L9#Qr-31(4$*9jxP?bj*JaKX.VwW3@>=#tU_VnNQ>0|~(hVk-u>!WI]coT9T' );
define( 'SECURE_AUTH_KEY',  'w^0Q{0j8T_q?/sft9z(>>5g&@#3.HvMC|mc4gl[dyBzF*.JV412Gcv5_+zzoLUdh' );
define( 'LOGGED_IN_KEY',    'U;YVvYx_)DT4q08@ig_epGny.;!yF79t(9s;mxgC(yAtmx:vGgkb3dY$Yg{krwfD' );
define( 'NONCE_KEY',        'kP`_7=YLW#qMCPkyUu^~dPO6yU?&#^<lq`3MW<~6+^GKcDe@I8J#)|vi;?P^z3Lu' );
define( 'AUTH_SALT',        're9*?o[xVH*u#v.D0K:_]/b uqJh10iR-KZ<s23L}Jv9 M%LgVyaVgT`5fH;cOrN' );
define( 'SECURE_AUTH_SALT', 'vD7?i~!dWP{F l3lr$/4/&IiWs9r!*?MBP0~GK=&$_~Wq`R,1$S(!1M `_^L!3IQ' );
define( 'LOGGED_IN_SALT',   'me+(<%M-6q=Fwd3,jMlp=;#1aoTw<6[RL!-C]sCJS#4 ;k_IOs+C-qF-0MJB9f &' );
define( 'NONCE_SALT',       '=v(Ah?6;9Yb})x;[>FQd-DtMDyE5tYsU f,P--o7Mk%9Z9({_,*Dw)4Uxq:H`aZ.' );

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
