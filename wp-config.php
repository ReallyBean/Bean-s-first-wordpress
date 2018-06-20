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
define('DB_NAME', 'wp_test');

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
define('AUTH_KEY',         '-@p,1BV>pa>/w7&^6UTqFDw(6H}sPCO)#O.X8PO<Zr6kW2iV2$)--O5Tw)+kxRE_');
define('SECURE_AUTH_KEY',  ']j&>b|,]G3[haHDjdwS)_E)sauGcF|E_fV,ni?.cz,-% 7O7WP,t$+hVt[i+.S-9');
define('LOGGED_IN_KEY',    'p_MeH;iZy DC!W0Gitw>(#oP<-VF>Xj nbVQgN#)JWfIENn(|tkjAk)L#_&&:<Z#');
define('NONCE_KEY',        'p{Y8!4c}/GS6,*O}lsnF}m&8Zurn]f{NQ%,R?lRw9@&J}x$IZ(%h+wK);~FN73G>');
define('AUTH_SALT',        '_u n!psI5Qp+;D>O>M6zu1to~-QEKG3.xU|*W<dq_C5W2K7:@@,%}~fz-zP[aBSg');
define('SECURE_AUTH_SALT', '<gaqc*tb51B^k`cydQ)eyD.{p)TE1%@%zDiWGQEE93-?=h;$Pk-eNH$7l/09kCPE');
define('LOGGED_IN_SALT',   '@U)A*.v+mcV)%+qASw_Wm$uvo}L#6.]+H K^Wu9#lYc)~?]e,6UbljfH<W`0%4Nb');
define('NONCE_SALT',       's9nqhFQD_a;xzcwU>t8`!{Z32=btTv+0TioY&uEIr8`pu:o%]}F%(8#U:~GVr,r~');

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
