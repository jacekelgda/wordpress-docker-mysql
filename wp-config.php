<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'password');
define('DB_HOST', 'wp_db');

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         '$L)ez.:?n<#_R/luU5HZi~:HZ8X2;:?:}*mNv|[JJ?+f)=}.2ay$22gtX#7<~)qp');
define('SECURE_AUTH_KEY',  '.f,QP%V9tttNadI$t*o[-S%LEsldiyj,TGCUKf|oa`MO7@pNuB _sZM[h0j+}-oI');
define('LOGGED_IN_KEY',    '$fSU4;|a?+?,rN8 F-e,&*Bfk-v`o OW~NaW>T]A+O+7;dy$ornszwYd)yznl(pb');
define('NONCE_KEY',        'EFeH|nIM_B#HF#k13ESJKQ?m9>SI1&DUF.@iou3HGajH8:?0.)~(FzUr|juk;4@V');
define('AUTH_SALT',        'mBkg9x!zus9z>~}E+7J./a0f._hmfF9O.zogpo]7PEKl6^O++~PDSQ}i.R]-HB^;');
define('SECURE_AUTH_SALT', '-##ZSKrZDs%Yfb`@|OVgq+$YVYPr8OXO]=b<M.C,P+UH!.&kT*u-nU[lmRF|GErM');
define('LOGGED_IN_SALT',   'vI[I?p!0Mq<foS:a|B,-$ttyg9)2)>Uvic^}|eQY}j,8Zx&ZwTu+k.^}|9$-*Jlr');
define('NONCE_SALT',       '|L>6^K%i70:/_S}(-l 1)l}{(Iq+6g1i/mEnR.Z+NcIRIp>~$QH+T1~jK{XXhWxp');

define('WP_CONTENT_DIR', __DIR__ . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);


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
