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
define('DB_NAME', 'wp_touch_test');

/** MySQL database username */
define('DB_USER', 'pmetzger');

/** MySQL database password */
define('DB_PASSWORD', 'reg2tem');

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
define('AUTH_KEY',         '#|KOId5702UmOY.2Dq%Zi8#,~qa5?ylYzy0P!d1*%T2[QeaA7$X^E92mRflOY^oE');
define('SECURE_AUTH_KEY',  '7KX}z1||Lynu9pncJ(u>~CvJ>R(/F9gDkCl;odHkH[(W)T+ybjs9_>t2FTb[ds)e');
define('LOGGED_IN_KEY',    '|d?(0v-bYH{1=<J-o3SDDAA.Jeiu/fZNk+^g_S09flM+U!GbXRHTQF<pJZ[;(@EP');
define('NONCE_KEY',        '2c$ebF1klX)<= `SYcb:tf5dN]N9{VDI:B7lR-<;-+7 HRUZDRqeBBq6W]M@N(Y6');
define('AUTH_SALT',        'QX-rO,~yVZ(chzFeu=MwbDlDteO!EAAz1+.#@}ep^VL]f{-kYYz2:wZ{j5vAF_0Q');
define('SECURE_AUTH_SALT', 'EmW|&tvulQY]H>+nYlfbR],>u`<Y.6T+>@r4E8Y+WQd_w8,#<*0:|i|no)xU!oXI');
define('LOGGED_IN_SALT',   'V0#Cl$I9yJC*Ue.uL|pRG7Va{cx8Wv$u6wF*7Az5-kr8I[gD+I/Gm9dZ:KG|+MJ~');
define('NONCE_SALT',       '@`&|;WbbpL}`}~ifNV>9f?:-~=)H!d9;,O=W!$XD.J#7.$@A9>4)%j#{d:I-h*U ');

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
