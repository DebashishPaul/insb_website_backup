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
define('DB_NAME', 'ieeensu_INSB');

/** MySQL database username */
define('DB_USER', 'ieeensu_INSB');

/** MySQL database password */
define('DB_PASSWORD', 'deba333paul');

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
define('AUTH_KEY',         'mu=*b<>%l[HY|b#8%34p^)k.{fgMg8yC%XLa-Z@`gc7|t[C*{8**2VkQLBWL<fp.');
define('SECURE_AUTH_KEY',  '6Q`55h%P`pyAiVY(4vpp_C$}>mC]n^,+VSCXD:*xNoh~>Fzw6M+q?|5:PwulkQaS');
define('LOGGED_IN_KEY',    '2h:lfc#l<3GtLD;m7|@3^L`jyXu2w-cY*`5[CM+ieJ~E4`_);e%^GwwTcr`kUW$_');
define('NONCE_KEY',        'AH~K(QV=A=n+ySrx=vFz}QV[,?8&K-LFiH`Qx3a)v5m|r#h3i]lu &EW/ub#YXVV');
define('AUTH_SALT',        '^0K*uYFfbM~j|g}(h?P^%b>LfxUW&3EO!l|1y%qdQn5:Im(&yqFOw?(<l&!;E080');
define('SECURE_AUTH_SALT', '<QGIi5n;^QH|T)G~tuTl$gmPE*OVxxG4+*PPn k/>PLEkLzb.G3rn8PEWY`OjzB2');
define('LOGGED_IN_SALT',   '#jC@;c1Py9b)5x=mO2I$h~l89r!n?nNIM4z#m;!ODnvVih+H9.:3RU_Qj{Mxe5GE');
define('NONCE_SALT',       '@gs P<xOu]y,sQ)Tt0:vO]oRnMD#~:*+az)IEHhtn[Poagv$c%Rx&HNZF< <u8=-');

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
