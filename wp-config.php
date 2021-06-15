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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         '*L!1@ s-{>cCAtUF.C>OcJv?;X8wnIM/h6{yn5hEiPy)Aj#,90qb;{lr}y,k+P*m' );
define( 'SECURE_AUTH_KEY',  '+pck3 Ea/{+Qx`||El);+;p%FXT+t g5trG[Chg(k_p%dygSpJRWiRK56<rR`N>)' );
define( 'LOGGED_IN_KEY',    ')u8N%P_bI}9:7S^43)6(X97IH9S*<tY?b47Y_le}ILg-L{g0o=5M6kJyUIBN?BXB' );
define( 'NONCE_KEY',        '.~JA*B9!{ =~5tp2+&B6_*uK9AI,d.r$}3TSz/ :6p6c!aLEA$JVRo#B#}70Y`Mt' );
define( 'AUTH_SALT',        'v;P<;Ig:?7JcyN c}!MY0YI&f_Qx?3;(|eNuGW6VQ-<Zk$Jw+93YW%+cypQE*.*L' );
define( 'SECURE_AUTH_SALT', '@~_.w+cMD}Dk~pDpO~(FK)a16aMxy<l1?#r]5Js~9Wnw`kK^am8bX!Z@/fuyVrh(' );
define( 'LOGGED_IN_SALT',   'q`u:?,D6?M!s1P<2Zx[{UEDvO=}lWSp(c*J_d{<:}br^_vZ83QPg;:=-p%sFWsLX' );
define( 'NONCE_SALT',       '{/CNUjOL=b;UjTHp/yUruF_*oDTzM6[<TlG-0qZodX6juDsvd;yd$kwAOFj i!W.' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
