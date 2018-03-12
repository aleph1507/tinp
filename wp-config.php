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
define('DB_NAME', 'tinp');

/** MySQL database username */
define('DB_USER', 'tinp');

/** MySQL database password */
define('DB_PASSWORD', 'tinp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define('ALLOW_UNFILTERED_UPLOADS', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.<(4g-)2DXV]L4-&M%&~cz1g_v,[BR7Pc{=Hm0ks _}3Q~XmY3/N*3w{pvW|g{`I');
define('SECURE_AUTH_KEY',  '{Y1emk@tuQXX0wa%$~*qIs{S)^=P4?cqZN<7flI3)C7A^T@$IHq{odWdWcY-7el]');
define('LOGGED_IN_KEY',    'a_e^&+c ~r|TzTHKTvN`0-Mr#a-3&<#ra9= ONh%hpiE}V0_1L87>1EbDmbuA=a=');
define('NONCE_KEY',        'L+yzS@$!xhXXl5Df;6{CF}Qj_}S!a51=^!nPUdT4aO>(UGhpX3QBd9%=FV$^sAga');
define('AUTH_SALT',        '2G8T+o[reU6IfpODvfx69S;@duNJoV]&g_:QUagx1/dCH naHeBhM*| GZFgfF8-');
define('SECURE_AUTH_SALT', '~l)~Vxa`@?cm~-}u`2Zu%GQAJ^]-{N^g&VNQ:0{OL^q$qA@#vm6>>TP^G5T2 =t$');
define('LOGGED_IN_SALT',   '19t^fZJ.`LlmiX+}%ikUTRIdByH%Zf?R^OmX|a$W[4##m[9`!eg[[O&!wKcuP !,');
define('NONCE_SALT',       '529(5gKBq>QhW=M86G5Q05+,6z$e`IBfL>1!$~mMNZa yz} K2#$s^BA3fv-MDpo');

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
