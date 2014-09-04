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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home3/vividora/public_html/christypastore/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'vividora_wp_christypastore');

/** MySQL database username */
define('DB_USER', 'vividora_christy');

/** MySQL database password */
define('DB_PASSWORD', 'Ladybug1');

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
define('AUTH_KEY',         '}+t#^#A{BbGSO+oNl1/~)nn7m/O0!w+AgwO=^hN<KBxapPR(?/XVx={WHF6eoL}1');
define('SECURE_AUTH_KEY',  'IOhiJIzED%lc!r-Ly!Qak81UU0)#pj#wZj:gx#bW%t>0 1JN jz0c$,w+lly7jc-');
define('LOGGED_IN_KEY',    'm/vyu(z-ney@G#ImKOLN(9$WK(&V%tj;HgD-*~/hs*aR@{49)-L(t2Mcb?$8pE:v');
define('NONCE_KEY',        'PdI>p>yPhMytDG?;!5#|BdSo|yRcLq-3qw(o{M5<3q&%-tQJ1WPm$4Y-Z|2uY73O');
define('AUTH_SALT',        'T6,#t:tp|$]|Z6[}EXyOwx;d, tR{8xdbT(K>wW.$L3_KS;B#Z@z$DA!khv+``T9');
define('SECURE_AUTH_SALT', '.eHN|TZ_hrC{oY}qJyc<%=wo~.rCwDa<@_6GH3Ug%N$Dip%_P/iyX .:++YrqH--');
define('LOGGED_IN_SALT',   '/O&qNL7^]bWNb37!ojrVUuD:N6X}18F$BK>o`@c_-X}=,yz}6wwdz2^YuLsVe`:<');
define('NONCE_SALT',       'x5=JJ 7CkgIWyw+/?/Y%Z`/W?Lvc$hjf<B%}TFrl-+ P{sy>KtTE2rhiFrHH?`i<');

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
