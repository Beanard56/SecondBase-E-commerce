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
define('DB_NAME', 'football');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DkWLu{`dUba8IiJH|j}tQk 8)Sy!*_q-s)`W@|N?b,@R T4_:@}G^Bu@&%!C..>6');
define('SECURE_AUTH_KEY',  'Jv:bH~KwNsiGbqFTcAwV9yORn}FM@N164v&IV#d3$fz`lN;jl>fvMTFvnPo(CP<`');
define('LOGGED_IN_KEY',    'W=U3|E:A)Ry;CoN;s)]PprNG9.}c U-ayU/y/S%mO2>)hoQQ0-nSo3zs*gAiDipc');
define('NONCE_KEY',        '&J>dR|*[GMin*O!H0qmv?r)XN2C)^+yuYGlVP`,JvpOLrRSRNc.@YAeJ;g_Y|7E ');
define('AUTH_SALT',        'M3yzJ}8 gdt caDPtv,D*|ZyEE^vucW0$Y^ncUv!XWDNQ(V*WyxIL..1/pW0Ps>s');
define('SECURE_AUTH_SALT', '-FW6CRjrpq;B-SM79KR<BW-)kpxIlKixD3rE;T=3fp|a;:%/CzZ `A0mdIi2{EU9');
define('LOGGED_IN_SALT',   'dD07fiV2ew1s$q`5Fsx`!bCqj=7M`xhPy,bD{,9LVO^{G#4~oQd_.kGJTu.TB}bP');
define('NONCE_SALT',       'V|Re-}yL$z)mfFKkr;DQ[TfL_e;+EdbI=RbH1x63#MN)$&aCp&^@Ztp_}jE#B@dK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
