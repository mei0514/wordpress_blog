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
define('DB_NAME', 'erica');

/** MySQL database username */
define('DB_USER', 'erica');

/** MySQL database password */
define('DB_PASSWORD', 'lUe0OksXkf5HAUem');

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
define('AUTH_KEY',         '@};}V-z5N_kw$d5A-ZR@5L5/;H>0WtNbXkqc9*g%h:Ce}J]ns=U,A~XLv>eGh7Z~');
define('SECURE_AUTH_KEY',  's/#bb~v[#y{%sB9^g|NSxDCY]8rC5>jh@|[b[8^MC34iv4*`m8.L6jEWWLoC5EcS');
define('LOGGED_IN_KEY',    'HEJ;&{I(XV>Fdm)Sr&f4`,R~~iB0dS;MhfX#zB5nZaAXbK*:0QAi[>MhXJ9J1[V`');
define('NONCE_KEY',        'daoP9?mmZb,3>%gjFrY)pHjryfF4-tfr>0dv{oO[_M{|U5Es*a7v3^7jpW, yP]]');
define('AUTH_SALT',        '5F;5$O:S<a%?;@4}r*[1@Zk>{ie;Aw_5FO!F-QgVV{-277#AT5SQ9lU]{84U<&O>');
define('SECURE_AUTH_SALT', 'FPnz3Sk]UD=34YrmBhH2Y.6JNu<?U^Z xU3KAjz_ Z}Gr[FRA+CM+; _:f$P9cwA');
define('LOGGED_IN_SALT',   '~[8-oqVAf@[kxu0EF!m)A%5q46siMjdMUTaUW/|V<LyUE]XqvQ3e5D,0|4MR1 ^&');
define('NONCE_SALT',       'r({fb33O#Y9<ogM7ht4>+KK1CIEXMq!c*l}mLsPC~gfRf5Q<#FhbkJGDj5E:(Nh4');

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
