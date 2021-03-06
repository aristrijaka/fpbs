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
define('DB_NAME', 'fpbs_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 's3m4r4ng');

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
define('AUTH_KEY',         'Myq;MLY]5d$.}6mm+z!!2Mf^Cx}g2MU;IX0&EEIcv:?w9Sxt{]>2#oUKm_4WMwOJ');
define('SECURE_AUTH_KEY',  '`WJri_ `KFV~-@_L<^o32/D9}${r=ODXBDpWVVb`eF-15SuUyqB=l.oplAe+h`Zq');
define('LOGGED_IN_KEY',    'Ba?r(o6[fckKs_S0:jll6<]Y>K;~Fr$q}P1&3#oy4Ko|*YA](5P3{=uAlA+Wv8_x');
define('NONCE_KEY',        'o=9#XI102xvEsuqU0Ez(qHR%yh*N:61IsaSDEVdJiKR#C5_}>v$cxsvr]0t!`J:=');
define('AUTH_SALT',        'h=Xk},bnbmyjcnHN!_^$=a7DQ(]bi$*-~%l Qo$Inm,:iR^Gza_u/DZi.go8^+vN');
define('SECURE_AUTH_SALT', 'M2Hnc3XSr%,6r4)^1rsLtkOq3B^Eqt9*[aF*w%RLi5ca*UN .@aAGApxTXY]0UP.');
define('LOGGED_IN_SALT',   'jfF?n|MOp[e9uLY_-y5m&C=QZMy8V99X1oZ_A#8Kp[*_zN?1eR4A+#Y<YE9;4,I6');
define('NONCE_SALT',       'xv%J;Y!`M2p01,gP.=mU#-/JF_M[ya@TI `mU#xm36*Qf<xO>]VDM.d$ st?x3%g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wfe_';

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
