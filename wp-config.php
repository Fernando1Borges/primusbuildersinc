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
define('DB_NAME', 'konradgn_codingprojects');

/** MySQL database username */
define('DB_USER', 'konradgn_codingp');

/** MySQL database password */
define('DB_PASSWORD', 'Construction87Best34#@');

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
 define('AUTH_KEY',         'V~5o,;tPPcWA?]v7QOQO ixYW:ias_S&)-3bjd^jVm_;=}J@}0]{bYy*ASmhP0hw');
 define('SECURE_AUTH_KEY',  '^S[/RTV>0)vf?o7]N4xKUxh^,&}^E+fq064MIrtH-6<k.o}kc}M9=2qcxM+wLpDm');
 define('LOGGED_IN_KEY',    'bN,2EV0*|Gc!OEy&)UK#IjS!3+-;A{%or&H4P3Fm@d8u5a}!>5-WUXHZ:[sB*bN/');
 define('NONCE_KEY',        '*v<{ZZ.W}MUol* YYx&}-?_] 3]GWvdM|i5^m>y6FWC6sk30BD(rOydN-a^]R>)r');
 define('AUTH_SALT',        '$ pBtC!A;NXEg<&vIj-Mjdd6@:$)^TUrlO,U@{K#_F-W58sT:#yy|M+viz)8m2d/');
 define('SECURE_AUTH_SALT', 'F`;9E|n-#Ol`xBi{.x|OEUo5*<M}JhFDs`!BE6SI|2K(#YVfq6FJXq6}/<[NL`}v');
 define('LOGGED_IN_SALT',   'eF8I2`QkKtNs^F@i}hx|*@O|`:db78=TgENQxPu_Zs<g =WrPF+FD%*i,1;g.bp8');
 define('NONCE_SALT',       'yi[_:%EjJD:i,xzCJv1bg _hewS!VJIw2w1cmL9_(02,LJ%WLgOU|47oznys[1OQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ose31_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
