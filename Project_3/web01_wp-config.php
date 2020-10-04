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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'eptreptr' );

/** MySQL hostname */
define( 'DB_HOST', '10.0.5.150' );

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
define( 'AUTH_KEY',         'o[dg@vU-|pp}q~)qpPa}#lw -ew@Z9e_.c5Wyae{d6RA0_5O#{od?<8#WXlq<)Ex' );
define( 'SECURE_AUTH_KEY',  '>zC1iu9aLkeYmXSd)Z?|H` L0`070.`22a9/rlB#MdVy&5#|GvrunDAWb^Ohr(2f' );
define( 'LOGGED_IN_KEY',    '+Q9-iTp1*u,&WwItvvW[m$}OOE$xpiJ?Kxt%dqZHFaz}IwzkfhO8-8[vMh7FTJG9' );
define( 'NONCE_KEY',        '1Snv5AzI3G!GW;B-UwM85=iiBomN,8V%K6w]zv2M)pXa]Ae]X.$npHL$~BpysYaY' );
define( 'AUTH_SALT',        ' VU^heD$f8p.lJ^_)/ -0XbQZ 5iI/GL>PE-?:M1qFkJYB,i9~X+#3v@I{zR(dCQ' );
define( 'SECURE_AUTH_SALT', 'ke>G1j-KeP#uH=E.~)/8RYcWET5._hX-,~}d|D/)$N-zXL{njT%5KCz_ffz,0{ne' );
define( 'LOGGED_IN_SALT',   ':4cPE_)DEo0e&HN_E[PG/BmaNfsRUmqA|##_hV8{_][EFT|3]U`=qt(:N.OX?wC_' );
define( 'NONCE_SALT',       'xyhh4:!4{L?tzyc[0 Bhq6^r0D[|2Am:~c/ct,^}T3eOIVQ/@+UXzNlRnU7=^K|c' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

