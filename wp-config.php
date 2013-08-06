<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'proyectocero');

/** MySQL database username */
define('DB_USER', 'proyectocero');

/** MySQL database password */
define('DB_PASSWORD', 'herno123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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

define('AUTH_KEY',         'TQY}B7V-nKeZ.8pA$K)zf{J`,H6Uz+B.TDQo/t<s7vG{UHvA-[dkmea|S|(g;EWw');
define('SECURE_AUTH_KEY',  '4PmBP>kvw#t`>^+LE;J=vAL-e:SQoZ<hu87ofO>XX_}II r+kDyc,g^eA WJDr^ ');
define('LOGGED_IN_KEY',    '5f])bN1HaEpVyE6z|u+vuinUJ:]SJ9|s$BeF$Li2u+Iu6#?|0Lo7a20RWJs@APjd');
define('NONCE_KEY',        'xum0gMv?|^nm,ywYhR4>f$Q-E?+)9si75NNO2=RUpS*xLC]W6t0e,MbE^MeSs:/L');
define('AUTH_SALT',        'd,Tu[q*pLx,_%`pl;J7/iX#hE9 gD!q9oESdLMV,mnp|5&]{!TP-;2:b28ON<~-x');
define('SECURE_AUTH_SALT', 'J`sa;+jm^2*$!+Un(;G{aenz-4sZDf7vbI iRo11 -fuGAr|^~FN8=o9}rk(F#n.');
define('LOGGED_IN_SALT',   '`L%WdJ@QHY8,FLwE)MJO?079kwfw)_o@RWY~N#eQ[|S7 !|MM=e$Zt6?m!&lF]ZF');
define('NONCE_SALT',       'q!D._m0|aG`pQ#n^=Z^2(.+w8yI0LUu|8UME/2FUz0o+_]he@]^TlVam+Vss_2!<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
