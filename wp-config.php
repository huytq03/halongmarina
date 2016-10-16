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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '{ ~bBnIg[hO]HQre-!m^__z-L<f8*h_Hr4K8>o_pNVCLx&7!C]YKlM;@ZIdwlat;');
define('SECURE_AUTH_KEY',  '=qU#&?;f[xUVAyR}&CNPrN@JfsF.Zl$D9aqN={<BQ~`n2`KADj=5YA79e5;vH0w<');
define('LOGGED_IN_KEY',    '+<I;B!dDYjQ|S];JRuh6m$dvnzYN,*|`mxuI1t{=_ARvA<_dKQtml2`*JhPV~$v$');
define('NONCE_KEY',        'D>It:}D%0V[/W|xvhego2(8v8qAV@Cvx-$ZT0SaS%O -n5+s;(/OA^}X/aWHtILB');
define('AUTH_SALT',        'eywJ.26VM4%% [450/;KNZNJqW@@M^iBN=2kFwzm}0Z`_j>ovBgammAnOm36M,;?');
define('SECURE_AUTH_SALT', '2$4c(cC<82]b#T&Pm+:C b=@FB&&KyXU;fFwN:g_sy!^bGcl2a_4TRM[~x!?EAk7');
define('LOGGED_IN_SALT',   'vBx:Ommb3m[Y@l46sgGLHE_wGwmCqG~Kw<)v8<eUj@g[@Pt-K|w3L8,K0@rCxN~u');
define('NONCE_SALT',       'GOUD@K;Hnw~5?0/!VC_apGIT:LEb(YoTVPy.f1+F{]H;e`L&M5]EX{!H[ m9w_Z ');

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

if(is_admin()) {
   add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
   define( 'FS_CHMOD_DIR', 0751 );
}
