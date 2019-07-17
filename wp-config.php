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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@?0IH(<0MHJNp0PJDhFg`f0 )mCy%kbf]nnB*ExDj?*Lu3KYgnsH<Al1vAof}XeG' );
define( 'SECURE_AUTH_KEY',  'C[3ME^JH`8t[|.I&x`iNQ*{)0>-:aYkA/H80CiA7E4e,z.W5QSQ8bL/8+_k<^wVU' );
define( 'LOGGED_IN_KEY',    '/rX3W:m/it=:<zbmZ5=!Mi<Qwuz<,+a?Edc4eHp<rD=+e|Lx]VKT;@UvW!&-CdgL' );
define( 'NONCE_KEY',        'Ghd}jG^&2^qKSE6 &5Cv!ydEsw?<F pMmV_ykW7kxh6.]fq!@`qb+gMX$Sq ` lU' );
define( 'AUTH_SALT',        'dG*mt22{brrf*g6eu&K~i4UM3X_*,w2e;&w[f5,%&qQi=}El$nNOtv%W_5=yZEx-' );
define( 'SECURE_AUTH_SALT', '_Cr-9<}@2d/UI_ oILQo+gByMG/E|l&C:qP}@Pu c^KOSAu]FiX m=BtP+g/bp*0' );
define( 'LOGGED_IN_SALT',   '+TRZ5lHmc-#clb;BjBAc_#|mZ1naw2RV{b~&qI^Ds^;.|JJ9wyPJe4-,kC,4JC!]' );
define( 'NONCE_SALT',       '_,zl(r5mCD$|[3x%o3W=((p`l!YG=^2LYO1~Jh[v|N$/ozZM$MYSTX,4U0|YGxWE' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
