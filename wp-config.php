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
define('DB_NAME', 'wordpress_nas');

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
define('AUTH_KEY',         'P6<cAXz3?=b{`kVuVVH&#|G3{ 7grX~sdUb.&*b.ASpv@%vk?wVOQK4>~#ria^j)');
define('SECURE_AUTH_KEY',  '.[VdrCvmM^i,OYdS*$T$YC>GPuKTD5]}^xWJzbFstx`gcHHNMsUg`j2X#/e7x~ @');
define('LOGGED_IN_KEY',    '}zQ?hFX5KMIH8c9<?-eEZ]<J*L~ah}-t@_!vvQlps!:QGer[> d},%&@Zz_*}<5>');
define('NONCE_KEY',        '%9(&QjkWdrR^?ew3|>WlJta=rC{eZAOd#LUpkP,8:+$3TB<A@l>lQ*_ZI4ZnS#.^');
define('AUTH_SALT',        'Mk~JS)A/_xsuJ?AI vD9/<[Z,i^mr(mR@)4LvHr(z0x6B$VAv5X7apiJ`Zgj!N{5');
define('SECURE_AUTH_SALT', '50=+1!!~uo@sLCb)f{*a[K~$::]0)FDgn-_/N(}-~Oru(lzPuQm[(`WNLEm>C~0l');
define('LOGGED_IN_SALT',   'keE*U;Xt8EY<).-sv!CXpK#V5yXogJj]}dVeLKasBrDtEk<U&E2CH^h;vKL {zbA');
define('NONCE_SALT',       '2~`; ,pcC[?9cH^JXc+Q?a}QQ?D}cIN {)UC)[r}LY>,7]v=,O)h$bp-sOQplLi7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_admin';

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
