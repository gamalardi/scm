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
define('DB_NAME', 'scm_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'B@mNtuJCzwQ>xflaZyiPf, iL7!b:(?:]VoZ>P[-.Z(tR=iO[H!5-I@U9W=*0j8K');
define('SECURE_AUTH_KEY',  '/kF!9V`[MNaz i6^AK+s,m}|3^2mGV)]G:-!h8]+&4g*y+d@qB}ip9afK-ga}mF~');
define('LOGGED_IN_KEY',    'u/Gf$Cndz(A.UwlZ}0<yuXm][lC!)n`;s3!&g|U(r!KAs..(?>frK`oL;+@G6<Ci');
define('NONCE_KEY',        'IdYypc- N+,`x%H&-h*5_pFgF.w:%!z)9f4oJ<|vYo{pB[Xr)N]f$!7+ZvfLX7>h');
define('AUTH_SALT',        '^6[8]:]+l})OgaB0rUC1yGwrzW[==%Yf*4ki?i>JZU}~A2V8xif$q-b`L}a)S]L^');
define('SECURE_AUTH_SALT', 'DZ~K8:oi#_qRmNL|2l-0p$EEFn`lD~Wvn)/!}/axzX_ix&ds+,k1:9Expq]zQ`5$');
define('LOGGED_IN_SALT',   '?l@X|v}a2:+ut~07|F#DHB]KGcE|r/qDP:?:dg}@::<#=mD }?!/83i6GEFI2-x3');
define('NONCE_SALT',       '}I|~A5QP[:Q=&0V2GdEj7o=kgmV1-jz)5R1dB9NM)/W<Hp,_u3:t5jwvi5+0K^mX');

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
