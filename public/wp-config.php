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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'scotchbox');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nv4DCQ)e?QHMO<GCUGd-4H*N96]{p6:P&-.x5-g/z2xX$3s)|XV(ZiYVszQL9)o6');
define('SECURE_AUTH_KEY',  'mJt bJXku~9;=2yv$2rldUCYNo;-~/=&{1v;CZ&d|lT6zg%>t5k/H% :)}1_2a5y');
define('LOGGED_IN_KEY',    '|nu{3&?~RoA4@V)[IU^dcbLlR$&:ve/mW#|7+I8^ed{wXW-!<gjYV?DLZA+DQ>{:');
define('NONCE_KEY',        ':X}Udw$6dh{>>VQ[7qf+}y!= +2+0RyS[)!NF)i%^A<x|r,^-BB6UR753`yU-yNn');
define('AUTH_SALT',        '_/^VprP~0}+e{tV)Bhzzgbo?61,D[pE:vfas@.8UbHys<~+hJ^+^&.+n+#A=]%c?');
define('SECURE_AUTH_SALT', '.]CW$$he[!z|O*!|s)L_Z/6@^Km(BcMv@Zt+:L<Fn7Q)2(-OA#kHKrRFowj${6(G');
define('LOGGED_IN_SALT',   ',}8<c=VfnG:&:tZg{=3?m/0jBH|eIk.o{07]}NG#^P^[52/=s}::n>Z|~eWg4nk8');
define('NONCE_SALT',       '_C(6|660?3AOY@cop)LxIvRxTcrC5}cjtsf@8+H-^XDwf +0[y(D%JsQG%,)eRwn');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
