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
define('DB_NAME', 'ms');

/** MySQL database username */
define('DB_USER', 'ms');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'UkegTFSMc ZR?(qG9]Kt3|;lN:XoZf+]72$|&)Xs4iky6DSu23y)7EVyzVBClNdB');
define('SECURE_AUTH_KEY',  'qbx-*7<XElO:<0sklr,(uK>G/b%Z$1AyQk*!F-Q$o}]AX.;f@9lfo3u^Z}mcl8M@');
define('LOGGED_IN_KEY',    ',Apc<4-rz<Q}Y.(9[p<~t@,)cO&Pv@Z;=S:ys2*VQRCnF1b<w!A&EU32w^Yz]e5!');
define('NONCE_KEY',        'DnFQ#59>_A4;K=1&h3Hf8^%e6E,3[iSh9>[]b1z(qJ**FO3`L9xMp1[4zmWQ^.9V');
define('AUTH_SALT',        '92tipyx2)7vI$S[/vp-fV.Ai.U>#zgay`Q]G7ghy9iLv_%dIWy2F8q2FuQY,}FjD');
define('SECURE_AUTH_SALT', 'C~1u=L^voEdr|wT >J%-&B7U!xYCmJ%G$M-Y_$&pIvL;jkXA4Hqr5BM:3uZC:MdS');
define('LOGGED_IN_SALT',   'L5y68CuHR|;Ur{RE!$3C(7t_cO:|?!HArwY1]P[Q5d=c^x){G=}NOC}Wu])w[0EF');
define('NONCE_SALT',       'N!?RIEV%{l|6YMi/N%Wr>@GohE$nop9C c}.ip%T<=xb*^+u?A;kK<1Hi!SNrcOL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ms_';

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
