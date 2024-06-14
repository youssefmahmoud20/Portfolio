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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'pktt(8c@e?2EBvlfUZZ=M(n^E2GQsg-@KF@cGd,$O<{;Yt?svQR{cuVDY v Sk-7' );
define( 'SECURE_AUTH_KEY',   ']LKgfsMw#btY|TbFA*.rY`Btr]_i&<N cd+Y6Kl5y?>siUj1]2lTG!=y=c<?,XL$' );
define( 'LOGGED_IN_KEY',     '4K+1_nI;HHnIg]H<];_Lw`nFZFV|St-h5S/~n),@cWIt96jGm(>BV/c1`_cT5I.r' );
define( 'NONCE_KEY',         '^ZK%oG,}zs<yLpM,[2t|;cs[MlIt^ukb#m2cFq>jXygV1J^XxZC0ZIk5iDFxoNgE' );
define( 'AUTH_SALT',         '>I&oqK&h,m9=vK2K`0,Zw7@d7Vumf&kMG><e4m/X]mZ4< 0yp<#m|l1l#..g3WIs' );
define( 'SECURE_AUTH_SALT',  ':owy#o$1aLbjDJaG%qm<C^vh)SL&9JICxPDWkT$Bx!Ax9_ODPJ~FdXPQja%*7x/7' );
define( 'LOGGED_IN_SALT',    '9iTz~TcLidd| <fWOh]~=F)1;=Ssk)PDhOlxWRd.U3Nxl1m.Js`g?B4E^!,nq]gh' );
define( 'NONCE_SALT',        '+XU0|Lk]# $#^s_6>j>VvW;EY_B]UE1=qm(#C.DkAZ 1]id&75}Xd5~uFkS(/0S|' );
define( 'WP_CACHE_KEY_SALT', 'byKbSHX&F}|-xGK9+;zTtw5Y[%n?SL={vZ!<!t9b%M!AlbDaxh6b`pC?!{wc;fjS' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
