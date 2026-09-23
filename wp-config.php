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
define( 'DB_NAME', 'alvarodelinares' );

/** Database username */
define( 'DB_USER', 'alvarodelinares' );

/** Database password */
define( 'DB_PASSWORD', '1v_q5B2p6' );

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
define( 'AUTH_KEY',         '+bH1eDq))+-*.-NtZOta-[Zrbn<oOoOl5)}JNp2n%%}rnQ,|IXz1P@5ORPQ>4$Qs' );
define( 'SECURE_AUTH_KEY',  '?vm2eWSgRn%A#Z+!%Y7)|iMXzm8{(7xj2:}4,yR=cFn{L)8m%|,9fRzN&pK b_10' );
define( 'LOGGED_IN_KEY',    'g60_?~W^xvH_`l7fLeF;LXksN$%2LiCh]_#<7 b2LCG.!Q?722IrY`Xpek5W}?UW' );
define( 'NONCE_KEY',        '|-]xsQg}&mH)b5C@-YOkY{#WzA%Z 6lU![Qr0e)?rg&k5Q!}N9t`6_+XmU6<W1m ' );
define( 'AUTH_SALT',        '+@cDyYzNnt R;BV`fo=MIdwy*SO$L&tv/Ke9BCQA{( mV,gDpcy<8dq*&#i6W9)l' );
define( 'SECURE_AUTH_SALT', 'dH^5-YC0|,?c_#d;Wk>Ph`59L/Cm-NWelSeIoUf*,L1j:2gW1c}3Xw+8x}X@SCbM' );
define( 'LOGGED_IN_SALT',   ',iB5nAd]u;D=]Bf.HxU:s.Fh H?fetx)2.B-j7o8e%A=MBJBHIaQf;BW[KSGt8|F' );
define( 'NONCE_SALT',       '4Qcjd|OCuTR?tPG29+`8J5=Km+G CRcb>;$X$&zWuJ>#qMjk~ st&Zb,J;@lG*DP' );

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
