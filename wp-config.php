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
//** 多站点设置功能 */
define('WP_ALLOW_MULTISITE', true);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ngmapco2_wp');


/** MySQL database username */
define('DB_USER', 'ngmapco2_wp');


/** MySQL database password */
define('DB_PASSWORD', '19860628a');


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
define('AUTH_KEY',         ')usLrfaO+g6%i/-7} `[NK-|pD%*%S2VH>3[YCL$I&B>AycDKS|4TkUu@>]UXEM1');

define('SECURE_AUTH_KEY',  'o>sYl#^o~wdiY/9zp/oI->M-0*p.x5I1{r?c%|xS;;wr+-A4M{~4_Y`,IQP2$%_H');

define('LOGGED_IN_KEY',    'bEC2FCEY5_D=PDd)x9g?t&^*Sp+-]-+5OX,QG1yiumR;9AEEX8D|.yXa%#;+P?8+');

define('NONCE_KEY',        ',~$9wXr{F;UTry6Rs-|qMm#_W)Le#_[{a;IShLDs;Pl9GN6(^?LQU`%{&GA(kj!w');

define('AUTH_SALT',        'tdtlD%_(;3&+p@Ig-m$e6o$~n 8&#zT;N%dyd[Y <|h$!.h0#$#V}+kf[zFN)aEB');

define('SECURE_AUTH_SALT', 'X/$*j+mwv!hc`w<[f9X)FmRG$?-DCXG|gnlU$Q0eyf,39}vyZfhUqNFk/q~Tg2!E');

define('LOGGED_IN_SALT',   'R6rOIw@ty:2{+{56cJ3)|.PH?o?%Dh&I%Z-V?w>l4v}`1M<P-V*&V/=|-3>HIu7t');

define('NONCE_SALT',       'z.,_2-S<{k6n^~e[p7|9i:*QA!4Bsm[zLD2~=SjzhAWI+uSm_t+-Rpb#@;B{.LKE');

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
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'blog.ngmap.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
