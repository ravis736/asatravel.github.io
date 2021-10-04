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
define( 'DB_NAME', 'asatravel' );

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
define( 'AUTH_KEY',         'I39sgG(i1-JfAHscXA=1:lHWy;iD>l4okZ+xL*thrq _iz[S9-tIbqe[mKq/3xa5' );
define( 'SECURE_AUTH_KEY',  'L=uL}T8zS/Xxk <XL5L_YG[/*MeBV56.upuU=hx_J@(?hKTt(htyWhoZFTP~a8,5' );
define( 'LOGGED_IN_KEY',    'DGad~QmO?HbN})o+!vfm|DCo3cBqo pts%.s!o35Cly> Fh5W6ijM<^+8,`J3n{f' );
define( 'NONCE_KEY',        'cE,v[S]>G-_pYetp1V2A?QO`-vXFdS[75[-hTq0ph*^_mZN7U$mXz^HkSGVkI,zY' );
define( 'AUTH_SALT',        'W$0I1R@,xD3RJ=e>3et|)c1oa!i*w}zpMN< ;teIw.:xd`6&bH61Tu-12oTR&zV<' );
define( 'SECURE_AUTH_SALT', 'z!c#^,Gu-Np6f>/Py!ikYxCk6IGiHtAHC4?4-NPPE 9erohuzT.GTHwS]psU=-T<' );
define( 'LOGGED_IN_SALT',   '#f.-&Ix$~{So4G2$bEqLSGZD5%Bciud`_n;MaIYY,2*Y^X?%$o)f(DGY)@497%ik' );
define( 'NONCE_SALT',       ']Su>Ev|eqdjR:dJaS[7`a30nT&}m,<6Ry:TRgE8pxL@C MM@byoHkiV5mu7E+Pv?' );

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
