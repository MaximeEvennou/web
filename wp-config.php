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
define('DB_NAME', 'web');

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
define('AUTH_KEY',         'tAN;<kzW8=xa7|I7n+c*<G]HC*KEO/q%;AjmQ2O(rFUDZ ym#sYTg1V93Do-D)7&');
define('SECURE_AUTH_KEY',  'Y!hpkoFVWNNXul!6OUvtB?mk1_`G{8W{!Le7A.G}wZaQN-O[[!myj-]i7<RNuB~0');
define('LOGGED_IN_KEY',    '(HIZz:#B%IG@fL5frX0x.l.M&Q!-4^L$(7;wy<n#l+zo]b^[G,65#T C9zp={OmC');
define('NONCE_KEY',        'SHGc@4MtDcN)^/o^#Xz]sS[_([xet~O50m|W>#T_]L48OYO]Qg<tX*j+ } OVvup');
define('AUTH_SALT',        '.m0~Tx}Ml]fT0DDTfd=csl<L*;IE$ ,H,+`asv7q?rsz22B4Ic3)oF5|H@~2*8Ba');
define('SECURE_AUTH_SALT', 'I=~58O~B.#!j{{Su*^/J7rmjWho jKg Gl1;i*X4&Ywc[^D/TE_k1%k54@YN}!rZ');
define('LOGGED_IN_SALT',   '4>vlOL>e%B!zw@v.osM8vH3`x$at>4=fD?(bp1:wsflE*J0q-OXDqB>ZnJ0I%Ij1');
define('NONCE_SALT',       'WnV+q9GZzlytfHaSFWCt/r(z5tt1xfc?EnoNnLa;uPt[FJ@AGdR[rIfU;w_`v1Pf');

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
