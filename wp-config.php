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
define('DB_NAME', 'vidwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Oe3wf*:]N(9=1>jmW5 QF3&|VI-?`gi2A*oc;_R.;OY-x%f;-33|-) a$*F7HSMy');
define('SECURE_AUTH_KEY',  'bJwFWm?T*sX4%w#E0PL>1PO<($W?I^Lry,G54Z5EaPBD9<sH.Htsbkv=5[=o.z-/');
define('LOGGED_IN_KEY',    'G%I$TYp`e5/_(W>1U,Y(5fzL||`,gmp{pn,b8+Lvm}%2&=2zyh+B3>^3%XfsZ}Ob');
define('NONCE_KEY',        's*a0auD!x0_-z1jCxZ7L*XhpNd3lrgV3YlZZLJ;xH%LV8_|~JvPj>Id/ LU+r5W*');
define('AUTH_SALT',        '51|~ar@+@<G0uzYeF|E<QI$?a*HtQ4~[%zp/L,||9eoGUwkFyKE#?r}q`.8PXUpm');
define('SECURE_AUTH_SALT', 'aj+z|uI#Y[I(J=7^5|DSSHoi8v_)-$Hl4!g6p1=A9)cRzo.ZiNs&7aw}Ikr-Yd{j');
define('LOGGED_IN_SALT',   'Q_|h|A #Q  MZAUZ@+-Kf$W,+0Uk3+z4(OX+z4m})8DtJhQW/?|/2<-)~kMw8j@I');
define('NONCE_SALT',       'ppcQeAT;|.u)DvjOu(r|cc@{Ay6^^7LUi]02-{=>X.ZF|ImCD|ZF`voyF&%T&TbO');

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
