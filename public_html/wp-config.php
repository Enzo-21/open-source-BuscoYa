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

define('DB_NAME', 'buscoya_DB');



/** MySQL database username */

define('DB_USER', 'buscoya_DBU');



/** MySQL database password */

define('DB_PASSWORD', 'Buscoyapsw123');



/** MySQL hostname */

define('DB_HOST', 'localhost');



/** Database Charset to use in creating database tables. */

define('DB_CHARSET', 'utf8mb4');



/** The Database Collate type. Don't change this if in doubt. */

define('DB_COLLATE', '');


define( 'WP_AUTO_UPDATE_CORE', false );



/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define('AUTH_KEY',         'g!Ou  PAq1I =[`ux,Umj)U|7Si]!em%C<B]Gx~&z@nSe<Fn5s|*UA_:`|+Ifd.9');

define('SECURE_AUTH_KEY',  'Si<qsx#;c^P4tU,ttuw&rJE)l+/5F~wb IW!kobc~x_)ROgy0`$n)~D$E!|2uJ1R');

define('LOGGED_IN_KEY',    '1{CQ$In}5qY3iT^]]]IP:Vw(snW/Pt+_ra^DH=T+J~y#0xzVdp~<U!X6QBu0rXT]');

define('NONCE_KEY',        '/qNEO$HJ$Di /jH}QR5/F?qM|mM;%z,l!Pfd|2.m|@^RY)Vf:7((n7]]ldmNU,eu');

define('AUTH_SALT',        'lyV:vZxO:dQo7M};O^6ihTy?,2BR!JEF3G/Wp&>nivQ2Bv6}[vL$oj|aL`%/nu{a');

define('SECURE_AUTH_SALT', 'H3r3A*7j-q:c>qjv3pt3PPb)Q;+!vkfC(vecGR<)9K-P <5i6ein$|o-iUNO&E_=');

define('LOGGED_IN_SALT',   'zxnx4hFdz({*W2}}H&!cA*9Lc,-~lYeh|PH~&TOQl:Kwg&.ewbJ;a&%9]z,t.ge`');

define('NONCE_SALT',       '?Ledl*fj<WL]LF<d|AK_K|Aj <nnTnT8/{WVh,5A*yv8TR r&8X/v]YO&XeBsx]s');



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

