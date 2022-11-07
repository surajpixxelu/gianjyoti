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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gianjyoti' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '6p`_.lFpg&flEtooXx;-(yV0RH;Q3NK!TL#4S;QU/xkRyQbhuvow{rrf`[<ar%Y-' );
define( 'SECURE_AUTH_KEY',  'Y.9bLKy# opELn(#/2Wv>-,zm*4dN^%PB&_qJXCz<k5Jc9R9+!qrWc%i&Ui$^7X$' );
define( 'LOGGED_IN_KEY',    'P=bw0#rIW}RS39rwVnG{VBC+%_&y?@}9Tx~5G4Q+|k6`O.X{l$qIt?E+!4e{#dY^' );
define( 'NONCE_KEY',        'UYYg^Hj`+{Os>E6%%B^1(1sEa<HoiES.-;4.r4:Pc:q>p+RDXDg#UHH>FSD3a2a3' );
define( 'AUTH_SALT',        'VCkPjl$T~$d=G9<0W(|B4AvntTe5aT@jk>Z*Q.A*EVkE@#6My4 [M{`dA9yg/ #s' );
define( 'SECURE_AUTH_SALT', 'zF7=a7r)+FMZpP,KA*yWa,pCVuqC=27*,=mpj?JfS%hT_>h7!Lj;ruW2PXRvR}/:' );
define( 'LOGGED_IN_SALT',   'VT|~*&||(.1C m&L>[2yD(hjM9nZnHFV4324{>qP>l?K153W{dg&`MFmmF61Cg#Y' );
define( 'NONCE_SALT',       'K}6Sh1fRU+h0#B`oJUU+]@fv|U/HWWdV:qF6<$<2&bw&&:M9&}~CE+]JaRa5BFd=' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
