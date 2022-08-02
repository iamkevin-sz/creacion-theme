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
define( 'DB_NAME', 'creacion-plugins' );

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
define( 'AUTH_KEY',         '_Ah2e<WVI?K;TXdMJmz)>%9v<!iV/DOxAb-$9K!7z u#=/W9lEceL8-|Egk{E<QI' );
define( 'SECURE_AUTH_KEY',  's9[k4EH*xe)(Tqe0/iM,/j+jDI9$nE.6LYmTfZX^4b}N1~$S4USc$`B$ep<O`j5z' );
define( 'LOGGED_IN_KEY',    'U2-_YI%r=$1_7P*&E{Ay:O}fhjv :Ht)5t+?<;_]5E/X]^xy:9#?22nlZdEiWlmD' );
define( 'NONCE_KEY',        'uvS(JhF*Er^s$zTNv+Wa}F)Y&#{C{sW_FC3(H(U^.butIlduN;%$I*IOeWqCrLc/' );
define( 'AUTH_SALT',        'iN|c)mvHNs;ws*[rcYiR.-Snp}|cG%-?9IsW.>L><V@f>-.v;xy1EY!Y=|LCoQDt' );
define( 'SECURE_AUTH_SALT', '07x#8(eN3,CTnb=5R[o{1CL,, EeKDkE{f&C5u|[^?r@ vu,{j,8a#~[t8Vn:{Nx' );
define( 'LOGGED_IN_SALT',   'a6pIuE.$VhAZq_zD7{FVIG8~@oOSt#NYW1m!YGwx`.LHs.p/ppXp_I%:,qWep([|' );
define( 'NONCE_SALT',       '}Z=Z] 50gdu*cTk3~iyOD~v8VdYiW1oEQ_d*0Plsz#5`#SMKKB[o#zKH~=el=c1 ' );

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
