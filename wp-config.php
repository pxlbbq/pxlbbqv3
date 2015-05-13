<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'c2devbbq');

/** MySQL database username */
define('DB_USER', 'c2devbbq');

/** MySQL database password */
define('DB_PASSWORD', '@gGCF6Cagag');

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
define('AUTH_KEY',         'HT{+b!(:92m;Z21BhYhii:!:M@3z;l#5%XSi]wAd[&}W$4jc-@+syV$neC(7P>YM');
define('SECURE_AUTH_KEY',  '5`~-H+=sN0~94v)Rx&6?zs7IecN+9v71xF]FxDgwB9r|7oHJ^Q]2Xiyl$?D=hRBl');
define('LOGGED_IN_KEY',    ';-?rZ#x@Q8K*e,wt<_p2-Wb<s|RsQNH_p -G7w>DXPDi=z8-fE}B,,w{x4A -Oij');
define('NONCE_KEY',        '>?AW-2wj(q(|02q<?@5]eJ9r6S2?Ma)TCfq8!$ :$#yKI.xk>+*KAdZp8yi_|/,&');
define('AUTH_SALT',        '$_-&:>1z#nvkeG(As*I$8D-Z+*E?7M}+~^),j2Y*//:0]3cJF|5JAGwzAX[tdbg&');
define('SECURE_AUTH_SALT', ':+Q:3XKKe,AJN|:Or(#3JU]]w*HcPn*Q Jg>;c}|vJ5++D+k&B9,`7%2EKV8LIyw');
define('LOGGED_IN_SALT',   'z-<Hx7$UV%UA ]8I|Rr Z1zdXwGJ2xmh;G0Lltuj#<0Yf>|@gq:;ysL(t1=f{)3:');
define('NONCE_SALT',       '<$&+t+I*K=*^pcM4!,}yyhH-KL(@k:rT-g%$S1V&sB79VMp5=zAqH</YH(!=K?c`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
