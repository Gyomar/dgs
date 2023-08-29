<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xwE~E>=PPxxBq:74 lVPRVFN^BEq.Sue/b;f?EGaC$9o8iSsyMv*XF^`Bs2r0}nj' );
define( 'SECURE_AUTH_KEY',  'FrZ3${g$2Jh>4Suv(%}bwNb0fhEx&F`6Ysi7HT6Kk/{dAnF`^FfF9(4;zYP|Od{8' );
define( 'LOGGED_IN_KEY',    'O|LhD+4TE<`ZAhg%w1mB<IAkE,>Vv-~I:awvW<BV0t#|zgVV9bU]{h7mJm)ruw.<' );
define( 'NONCE_KEY',        '|U]tK4wNe}$l{I_Nm#uvl<0/JA_}C=>7kN`sRU-{[z>45x~$GmaWmm(TQ>I[Qc;*' );
define( 'AUTH_SALT',        'qXPG~]q+[)|c{A=oIOFl&d]K-2KQokMWF{_p=ADDW&(D %B+hh?=@D}F0f;Ot{QZ' );
define( 'SECURE_AUTH_SALT', 'syEPfPEb3L.2#O6pM_QijHnkhM)_=1NRe~DZ/UTMb.M|U7P|ul&DUYL)Nca{UT`0' );
define( 'LOGGED_IN_SALT',   '~b<gn5Tf>O[@7wCY$YS*_Dk9zX3EAtVKrf1Gp.8bogyF5:~`IJ]?p# wEI1tM#x%' );
define( 'NONCE_SALT',       ',ZKBkv&&YwXPI0(WIq~um#CYwg3y?!x;eVF^Ld6D0KLk|x^?K{N@6(8AQ2wM^3Lz' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
