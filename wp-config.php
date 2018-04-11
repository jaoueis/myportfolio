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
define('DB_NAME', 'shanricy_wp');

/** MySQL database username */
define('DB_USER', 'shanricy_wp');

/** MySQL database password */
define('DB_PASSWORD', 'SF!vZgnlvX?A');

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
define('AUTH_KEY',         '^EJ(2(yxQrZ0>x-x A^#-GBOipz[S!h0X97+Z+6CQ1%c(6;t=/$ZxLyC=cxkxumw');
define('SECURE_AUTH_KEY',  ';5&5,&}7;D^CqsHkH4I]Ung_IH(a# 5a+*>_9V]w_L75j{Z_0eGOSjE<)IW;);;:');
define('LOGGED_IN_KEY',    'ial {O-/0}RE~}{;QzH-fnb/+-wgXzNQVh)AKw$Iu?{](6Qp^jG23)M ;9l9-dfJ');
define('NONCE_KEY',        'V890je]hY77[z48*z@,A]S0~Ztj8U(9P3m1^^m6}nX|Os lSn{Xe+<l7<lE?GeVi');
define('AUTH_SALT',        '?jHrA7yRlO2>hW)J_zn5BiW{eYm/Mw C/h$|RxF~OwAn[*=1OD6jBgy&<D=kyYz!');
define('SECURE_AUTH_SALT', '_=v8L!&;,3:{b)Tqi _lj.C#C2 s8:]L^Rqi/Xyn=Q%;[fr#1e/QGJ[B4/[H$xtT');
define('LOGGED_IN_SALT',   '>i4Tg6Z-XDQ9,JHoa4{gB>/b*KQzjo,#fs1w,brfH?_k-TT}w+8E=xT9;]4_46JU');
define('NONCE_SALT',       'dcuY+Xztq>o04G8&R~A+`!Tdq9^>t{&Foa|kYSaJ9~^I)L;-HdfvfREt)]f.Bq|-');
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
define('WP_DEBUG', TRUE);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
