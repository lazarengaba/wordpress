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
define( 'AUTH_KEY',         '?Nq7n,^12xZ-9Eb93.Jl*Repff5H#4(^?J5+`:]HRTrq-$9Y7wyk9?X4k={oBOhx' );
define( 'SECURE_AUTH_KEY',  'DdcncgLzj<C.T}A)CzkE)N_28H-xCraI^)mp.f]m$ Q{`Mr&HG 8Es2txs2=7cSz' );
define( 'LOGGED_IN_KEY',    '+:LC6O_vxAynB2[):=|VRf&PIydE?fFcu{E7M4.nIMplQ97bRE%^fia1baH<MeEz' );
define( 'NONCE_KEY',        'NJf:E3OG7g2cmn!$hM<goPf(JfX l2Cjel5,(e&x1 e.QvM[7pz;gwP4;d)w4<[S' );
define( 'AUTH_SALT',        'DwAG$E,p{hMTwjPs)]sti92aBNy][U6iji?SbjNu|S8Q_I9HU(?6ryBl%82WzQOs' );
define( 'SECURE_AUTH_SALT', ')l>2E_0)(S(sqg}mE7rQ(;w?X2%@^<4b<|K^8c fjH9I!Q%V}Zul{_;iX_pLwEBA' );
define( 'LOGGED_IN_SALT',   '&=e{Tp/!L$/=}]c!)G^!(H)-;_SU_=dT@@_j=ee3!c:L>WM<v [zdKK|Nmv4a`W)' );
define( 'NONCE_SALT',       'Iiu=L/EM)ik)IDFkzEZtR.bn.n{s7!W4~59 #y$_wNIlFFOtm00_x^mYpYEYMEyJ' );

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
