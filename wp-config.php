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
define( 'AUTH_KEY',         'q<MX1o5G#++B^E]Ivdb6npDSyxbW.#,.rO6k9:h2Kv=8hgCn{L;8;1*VuZNL@0eu' );
define( 'SECURE_AUTH_KEY',  'W83<s$O|l5aWTkWq ql}QAS$,#8B{(:oNgnws?(yUVHZzmrm5nA`};H*F=AXbb3y' );
define( 'LOGGED_IN_KEY',    'Qrk%i*mwPu98;28Rq33GzRwYB1, z:1^*]*5Z~z @9e9cQ%aK,oc&C^hc>t~pMCv' );
define( 'NONCE_KEY',        'gHpf.eI%A`eo:st@z;0F!uB-};o+PCYW9]&]l2d)Qa[r#9@:F;z(q$s_JOD+vx0v' );
define( 'AUTH_SALT',        '60|;)*z6-IP1W{!&AT}l6eR -Z!z^?Wm}*3R.va[25]ru2=j&s(|b_-*d<=| e:G' );
define( 'SECURE_AUTH_SALT', 'PV,-vIo,lp:.;OR;efg,jFM<N4PlypJE#@cK(+#NZ`bspeS7C(B]cTJH^`.(K^.-' );
define( 'LOGGED_IN_SALT',   'HkCe?6S.i8cA`/)}|H6a`~,8L6;azL(fGIV6>u`d`?hha$?Sks=]B3)Xl`~][]By' );
define( 'NONCE_SALT',       'ccwS=k.^t;XjcALHU?.wjAR3lvZ1}X/0|B%[WY3jP/MEI7~r/ ,L1EVc&{?PyUSK' );

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
