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
define( 'DB_NAME', 'salammassonrywp1_db' );

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
define( 'AUTH_KEY',         '+z+[gWR%4YzC/]AInz*dy^ZG*,x=!i3@G4f_MZ!#$34H;K*4ntbsldn3+7RQ|y0L' );
define( 'SECURE_AUTH_KEY',  '@7.>|boe@OvU]b&I)ZD0fd:NJv6H+|T$4GZl2|<?)9:Rv4z]P.e6-c/t:!2)c%*Q' );
define( 'LOGGED_IN_KEY',    'p^LlX/y@pp//@!TR=}Mm/BMpd-iDA7;V(&8|{(3%[A5z)qp`F_Y~5#M/=Qbxg2Eu' );
define( 'NONCE_KEY',        'YyS,(<fl$iv7?0!C-d_4+X:TECE3U,@m<dZVxCO_%rZ>|3BMlV<>>e3sA5iU^AB{' );
define( 'AUTH_SALT',        'bG.yQ`.0)l4H5Jdxfp=Wvz5HnoO>_MB9Ubv+zM&)Xb5W*Cg,Ly/@0OP/N=ij(0sF' );
define( 'SECURE_AUTH_SALT', ':fwYU-}S-^<K%b~g9o*|aIO:cPACGB,]pnx[g7<O7DqUKGk8#Xnct||@VBdoiZHq' );
define( 'LOGGED_IN_SALT',   'YMKp2Y; :!*ps{+sNIK&Pg#tUTb7-?{}An-z5*}TNL}Wb<{+ ~[MZ`MR;m4UHn$q' );
define( 'NONCE_SALT',       'c5&3>T!J?WeY(B=2!s#oEB/2^35c$SnW44!%:M.c0H/rqMGEhUi9x=ld&ywqQ53I' );

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
