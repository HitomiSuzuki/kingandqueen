<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'kingandqueen' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Passw0rd' );

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
define( 'AUTH_KEY',         '}-pEblpTm;<|)Z:.+-%2!z8E/v,&X>1hI(Smb-iU$C^c<YX$wxV1K^mRltu,XE,)' );
define( 'SECURE_AUTH_KEY',  '?>8bP4i2dNMbSt6(|lnn`>Wp,V>cr{d,-:U+$S%v1CZvX2*Xbt-BCL`<2@hnG,U)' );
define( 'LOGGED_IN_KEY',    'cS xW#&{+5t]y-7s4eB_O#P+78p`0%Q `<@zc9BI?H^3MI)6>[7%^&pevEt[q,+N' );
define( 'NONCE_KEY',        'foh4j?AOFm3feM#scag|zDl<mg+U/MV_>@RiiqW`R0!L? mJ^R4%18/i.dv5x:5k' );
define( 'AUTH_SALT',        '2gS}ubB[h~*g>,xRpq90o/6JI-AdPo0Ia/_9FVr!62CEe8uvY(XHep@~qXF]}R@E' );
define( 'SECURE_AUTH_SALT', 'RwjrqoKnA/>h)H>~f_bCyRDmhX~^y?/2^P{bO,[W2yk7:y}ho0l`Wk:uSITB`yAB' );
define( 'LOGGED_IN_SALT',   '!UvqDHw`_K>11jNmN<uIV+o?Q2_!oQUGElU!L$o@]86)Ok]j&gd12s!&laQ&$Hw=' );
define( 'NONCE_SALT',       'vUQ1_?r&%lj,gjN5$ 29CWX[Je.txCk&nv$g?+:<ocr=}31HT4_9x}k7Q@uwHH=Q' );

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
