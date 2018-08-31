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
define('DB_NAME', 'fictional_university');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'di|>wgYlnm35b82}9TXA,gKa(dV?G)arzU`:9qW(]#NAHa@n{J369V>j|5O|*F[w');
define('SECURE_AUTH_KEY',  '~#f|^#oYcy]*8=+.^+Po3ZGs@z~TB/I`G^fkC q l&LG/S!bcI>[82@z-,D[Rd.+');
define('LOGGED_IN_KEY',    'WDMXS`uPO+>ok{;J+y*V4;6hpXrcaGj|8A5-$}DmQKV-$Xmn_ q&Ysv(Xtwm?Y6k');
define('NONCE_KEY',        'J.nsjE?~4AI~}]@&N2j}>j(Er>3KpZ*L;.JcrK%r|WV;P#/@&WRJpo;IPY#lk85H');
define('AUTH_SALT',        'k.U^Yr6I]oV8XO28U1!KO,dRvYWdP^]IOp$CW_P5WGh`S2%[.-3(|{ f1 MpCNH<');
define('SECURE_AUTH_SALT', '~;J(Vo Go3|)#nZL!NWQN]aH4|+Xil7G[5pYf;@^mAS/T[QYP(~|}RilD5&l61k&');
define('LOGGED_IN_SALT',   'l5s]rYj2~!8Xhw-IB{+#$>}y]t+yzq<7Md,`DnSfCv1I#!_$mh:.aJA42f1x^@.E');
define('NONCE_SALT',       'yCl>/0z=Ub.W}NdausLi.&I+FnxCbJ5Ti$0<NGtt4+;)DuJGB[jl{H`$Afpz*EyS');

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
