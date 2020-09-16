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
define('DB_NAME', 'base');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'W|(ND&QtbqmLk{ pc^qY6@Y@:v3QBp-(Uw#?PV:L5=z,>hX<vRH+6zS[7K9)92h7');
define('SECURE_AUTH_KEY',  ';Z9IBvPl%lhtpC,Bo8P+-J?|1>dPZ0*w}-u8blI]w>08}7muCV1~pu%DCl^qmmPn');
define('LOGGED_IN_KEY',    '8IlT@`)B>5A56UeOg-[27%?@0rx]mg0T)b&1zAk#m@/qPH3.oiLr9.{n4*]6meiE');
define('NONCE_KEY',        'UUKOrZbu{zW*_9/?FO7wR8^bLtARyLiNyO8<~-$4<|,sWM!i@dn[+0;+{vV:&`3D');
define('AUTH_SALT',        ',$>^=f)9oCJG-L$!= I]x3U|JWy+@F},_,I hPXlUQ$A>CwZh:O^X)C-D%s]CX`l');
define('SECURE_AUTH_SALT', '?pTQFtgKr|=%@iA>:?ym vb*49.BJ:quI$_=x7Qi-C_Xa8f>8n+8gCzwDKyHfTgC');
define('LOGGED_IN_SALT',   '|rf&^O0rKw=m(bNks<|Xti|qt7Lqn-hB<k Zz=uC;Cr(SG*e|bv-?B l$4D9N:#:');
define('NONCE_SALT',       'T^/2JC8p-eZ;+W1%86llq+.k94U;DQ|x/+_^KkC*u<f0_;9d7$e]GO<OGM*^c{lC');

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