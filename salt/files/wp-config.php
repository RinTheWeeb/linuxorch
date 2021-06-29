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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'fE@=~50w2PmStJNNrV>f5C5Z]gDz~UIHKLio?,Q(lS$!8;zr>&_=a5C9&50s;E.d' );
define( 'SECURE_AUTH_KEY',  'Lp[4>O5F%p+v96wvh[<@]<Y5hfL%x@)}W7o+IWGXRi65FDA?vYz!fvV7/R5eUlZ]' );
define( 'LOGGED_IN_KEY',    'O`(5#?mt?L929 :loW<sCX:c]_wG56uUFSG|hAtnW6,hf1qHP#n6Kof Ego7KzXF' );
define( 'NONCE_KEY',        '1tBs9CsNv?_O<3Xmfk`pyu#,R1rts=R TO(JQv_YL5-Dkp*X_Rc!z|ic~t.hI nw' );
define( 'AUTH_SALT',        'o`u0&RPQ)A,s,ie]w~C>q&#pR#4ATOm_BIo:~k4r|:b!6SzM(q|8hW94O5o6kCnv' );
define( 'SECURE_AUTH_SALT', 'Q)nawtDRxf}ZB7*jK,SKS<u(xGY:^;QC^J;4qQDO8U8R|o|2Pz4Xbe:qGEb@<wL)' );
define( 'LOGGED_IN_SALT',   'Pg(UWZ/(7O?$RY0@?)_fBDHn}ZA}8M{6w=Mn[v6(,PKDa.xO&<B~|j1_3+{-55v)' );
define( 'NONCE_SALT',       'R5zYL*.| 5$,J0gSw+:?$@[~T{FtmSYEHao{w1n1.Kad4=u>p_w7Fp]-p@ m(;PC' );

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
