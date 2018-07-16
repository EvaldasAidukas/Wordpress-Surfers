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
define('DB_NAME', 'wpsurfersco');

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
define('AUTH_KEY',         '%p3)NeI}lVAN/=g3k`*rg}Y4r*1[X]^d[PbF/v!Lh}qlBVCIZ5mrQ_?Mkp#NOnK(');
define('SECURE_AUTH_KEY',  '+{D~lAs)^fJWCb+CfaQz:ujrm>SKP?3i8}Pr^* ^Nw C F1_(w4xmfcoF}+CgD(H');
define('LOGGED_IN_KEY',    ' O&-lvNiS,K+_LP;-%Q&b6X/>:E5=68xctFz0f>zt)kv2$1`^*-tRzFl ]Fulv<I');
define('NONCE_KEY',        'r+MY:beIXOr{z{+=fadwZ&rsc3&i;I=7VRsoP+/UlYC3%r3xC_#+B{,Dz07G%4JT');
define('AUTH_SALT',        '9.[+{*Os!f%~I|i8u=a8],t5CJ?{*1kN4%ZVK&E/=xs+N3[+DlJalLY+j3y:r`Nk');
define('SECURE_AUTH_SALT', 'WV{1CS$EUM|WUv:Qc^#f#8*Ii7%Z|pilZ4!-`c/cD/qytegJl$39mwzbC+UXvfJg');
define('LOGGED_IN_SALT',   '.vilR/~9q?~bmnUn_]k5q~~FqlUw[j-60*hMg0p@}`2zeQ[jT+#beknBR2H5jiQj');
define('NONCE_SALT',       'K(SMaFI0]tY)Ax^!)pL8P$%xKK%_@kaJwHNUc--zv&TQRFkgO|4C?j38g3W9*7vb');

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
