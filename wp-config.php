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
define('DB_NAME', 'startwordpress');

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
 define('AUTH_KEY',         '4tuOgMGV?~;?OmUwX1GeUXKfydwAa-2 5+jSx=`Cht>-VN %QI]i*:;gJZ9e):n ');
 define('SECURE_AUTH_KEY',  'dI%Je9-,(IuKGBJEK4r68PngX.lm<InY4k$|5#o-u;82%kg+orTKJ9RF#H:. O2k');
 define('LOGGED_IN_KEY',    '36@BGAqIWR&risWG$pR42*!ngr=#-q{.rw;(dA0YZ(tsPY&ZYP`-}DjaEm`+SPrQ');
 define('NONCE_KEY',        'B9=]qpq{+o*kjF$pBnGi8OZ[URJv9Nh>|VCFzV,9cqxNJj8cK_/c*[mP9x`C=3a$');
 define('AUTH_SALT',        '77IR,Dc,+Ik_>`xn8%c@6~9;-inK.5@r96A/.h|dd}IkIG__aozU-t:lc4Na~($z');
 define('SECURE_AUTH_SALT', '?dYz>6WaHu*uRU0 {-0;u_iA|8UM:n._}{LQ7%gpv4/TX0%`ItD6@{*r+b5o/+8(');
 define('LOGGED_IN_SALT',   '3$t}jao6d<}=O3c!t_Z]5`Vl#KgSB`Pu,TiQ5b*zF-[j[a RhgkQne=Wa2J&n$m<');
 define('NONCE_SALT',       '?Huz;oftHs7-X`8gJ3LpWTsyP|!-t[j.aoTa]ad)A>AFt:>?+.{E^ C-~f|U=1EV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xyz_';

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
