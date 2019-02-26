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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wp_user');

/** MySQL database password */
define('DB_PASSWORD', '@Hung!@#');

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
define('AUTH_KEY',         '`/KhYnb-v^:Z-|)3d|mF-]M^M?-y}I5amR%%;XYu]qnkB2:7Is&+>)2_S#W0^wZz');
define('SECURE_AUTH_KEY',  '@=y^z54]v+j.rV*OW87}iKYk|lb7UKqFFFVB.`F,`^7^oj*]`j0V}|!8#+`24mxD');
define('LOGGED_IN_KEY',    '8IO&]lz;=#~ieq^Zc S~8D/6Z} Z[&,j?eyP{h+LWQo;y4-c|id`n[-;D]irDT2p');
define('NONCE_KEY',        ')B039.igIlsE4+,phW{.I{Q<<$VLQ}Nd|,Rfb7GTL scGi#d 4z<s>4lP=9C P4|');
define('AUTH_SALT',        '{|o?Y-@^L*h$.`RQ&dsSBP>pLWfRVo~8AEKkj20kzXzIG|x46u<T-_Rn-hBlxGps');
define('SECURE_AUTH_SALT', 'fkN/TRmn~JOVhz)|p-&QXa/*WfmQ:;j7Z)ErA5TR!z5Tr3uN@}5=Mbf$Ws6w}r0&');
define('LOGGED_IN_SALT',   '&u,c;AbY6=TO;dq_0Lb<li+X>u+-T%LwJ+%+iVajT^WEA))SV?8RI}79kk=<RXO0');
define('NONCE_SALT',       '_k@gXQqj;-O8I0UA-6BlJ>97VR$GY2ZW-WN(6T4PGAXX<6E^9Q3PP< -}9eJfj2;');


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
