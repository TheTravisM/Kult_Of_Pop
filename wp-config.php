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
define( 'DB_NAME', 'Kult_Of_Pop_DB' );

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
define( 'AUTH_KEY',         '|WkFB7 L`k<;e~d#J;.zR5<-?::/dEx)HC(mR#QdnmN)m--QmC)3ThTbd;>&QxAg' );
define( 'SECURE_AUTH_KEY',  '=#3(&;V2Tl7RIu7*k9CukiS!/e}&?4Qw9v2hb!jK(m~x)PU)gDDr;f9[y]=I{Sq=' );
define( 'LOGGED_IN_KEY',    'MP0+rOcIAa*cd-EIF5#f3_B3EY[x(Z!]4Z31nru-8W;P&vGjqrH>Vj[6ynGHYx r' );
define( 'NONCE_KEY',        '::xDl!7%CFr,XTI+;+96a| WN[Kmg`3n+(&]0EhP$JDs77s5P3W1T{u3hrF+>8~`' );
define( 'AUTH_SALT',        '_j7_s{g6AK,PWSmhy~A :NU[nVPRdRPm(qYieIn#[0V+(6vffl>}vx@Y.Z[@?%9n' );
define( 'SECURE_AUTH_SALT', 'yG cT &z1taTIgI{fnMWyd3M(F6YJ#$!HEBUgB.hwS|6&#NNpKn?F<Tc5D}vqV$5' );
define( 'LOGGED_IN_SALT',   'pgEDE*Y.L1oWWZTX9qBM8Gyw=c2Jw}X?!(-%XrlE$^*rxAX7Fwon$HSzw,I;$Qf ' );
define( 'NONCE_SALT',       'Zz2Gj5QCNsB[@pk@QVuEN@V#VznI8g8Bi~d[PZkRsSo!3[PC[FWab81)1q8Y~>ee' );

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
