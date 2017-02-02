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
define('DB_NAME', 'webd173');

/** MySQL database username */
define('DB_USER', 'webd173');

/** MySQL database password */
define('DB_PASSWORD', 'webstore173');

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
define('AUTH_KEY',         'mJFXZ_SqqD:D,oA?;t/H6&qmi/sM;N[Zgz&!LL|:v_I0a9X9|r$lAS&cBVgwvcH/');
define('SECURE_AUTH_KEY',  '9An1XBl !9a)}r_j5j8.QH&j4=NTTq/ P3b6mC2r~aj`9nX {2x*g6bXn2p&eExE');
define('LOGGED_IN_KEY',    'DsL9K)O-,$VJ],e 5g8IbTbSY`?h=,jmS2g!2G:>|oa;dr&[Ns((Tjr85{4!Lmtc');
define('NONCE_KEY',        'a344!%yJgNgq4/4 F?%Q_UII~:P 1eUlA|n=q9I$7xIp6&%7>4ywPcnUbBEO<~Q5');
define('AUTH_SALT',        '~1}&jWJZBZM6aLp3[Zl2x<*6v^. @H2}dA| HL`}Y# VkNM~b#:u^+ChW3<:)=ec');
define('SECURE_AUTH_SALT', '[(b*1#I]xkORnZQ.td: CcDS_3:`<@7l+4x@+lTtnLd7+~<Hdf.]WDtt*x<s,k}|');
define('LOGGED_IN_SALT',   '}l,[#rL(GTL1e|_dN2ie((^h:Bqn7TZ=JCs{k|Iy8PU[;_m)G8 )+-A4kgWL1VMn');
define('NONCE_SALT',       'IUz}[Y!3D*/X].2/p*Xf3=(-I%[$1xD41V9|v~%6{{WGh/{*l!ZVF<j|~.#i;d{S');

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
