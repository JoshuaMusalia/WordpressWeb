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
//
define('FS_METHOD', 'direct');

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywebsite' );

/** Database username */
define( 'DB_USER', 'seddy' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'S5hXZvotO y:1~C!qeiZyhuPC868Zr75t]@R{tB`Nm92g7yC7lyOZ Y<4K8,p.P.' );
define( 'SECURE_AUTH_KEY',  'fc1p%g![My`lrbIC2}2?(B5mVZ]Vq5{:$V|fEWQvBG*XK/d-y47je)C_Cx@,FyZn' );
define( 'LOGGED_IN_KEY',    'Wd#|+?!E?a8z6VG>E_0i7X?<D)EU?y#IaAJLEH/Nl?Q{n|e5b%kiXE<7BBO0^Gf3' );
define( 'NONCE_KEY',        '94K>!ksgaS)S)$`Q~B8Bl?I]I[e|eD,9M5f$d4x)oKnzekKL@}?9McI+u<od68Z6' );
define( 'AUTH_SALT',        '6&Q##{_c suwD2_nzj?brI-ep#m*WZ.!TO$jvT[$A!3T4mEfMOpqV_q)QsW^_wd,' );
define( 'SECURE_AUTH_SALT', '-Pm2V]i3>C$G%88X/7|^n@{l`(T.@h4oX;F9z B$]dxL/b>AQjB8+ S6s$wRbvBB' );
define( 'LOGGED_IN_SALT',   'rhkpAMmBCecUrQIBK$eYTb4/@XRaH`1>zy>cP>k0JQJz^TNP$Cp(p*[4^hDbsg6X' );
define( 'NONCE_SALT',       'kMcSBv1~ma<CL+g//8!d+{/xIb2<ZNEsM|X5S=-$0<UHi^4)Q0<L!IGUfRmo[}4~' );

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
