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
define( 'DB_NAME', 'andertale' );

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
define( 'AUTH_KEY',         'DM1 6IGPGrhyseP#;NV;$Br|*2EF?QL_Q_!aOhAWYV(Oxyk2?,u@eb*U):HLp;Gu' );
define( 'SECURE_AUTH_KEY',  'pWQMD9N~?NG)r9=xTw)_B?U M)tV^jf^2SwJ(RRGakr*#5=M*dQQJQv:_L=CD7Q2' );
define( 'LOGGED_IN_KEY',    'b:EJfokva{.ra[q2HoG/@c;8gV+q[A<FaQ?m({>Y+ <`o1VY4`O5r:p3yV0/BOv+' );
define( 'NONCE_KEY',        'pJ%)m~cFK+n!f~_K11CoB?p=X` QTP,g(*yF`~;]9PUx*<:74e1LFEezX&W:RDJN' );
define( 'AUTH_SALT',        '6X(b&mULg3q]=)P$Ph[x>OfKF^hC^j!))]] 3|jPZ%,Kh=0-8.;|3Mo[EGZ,h_!V' );
define( 'SECURE_AUTH_SALT', 'aNH/anTd?h0-lciVmUs@~[;WC&OM*[;(?535=N+;aO73WY`#WR~]lc!3q!E/2k?l' );
define( 'LOGGED_IN_SALT',   'Q2+*+73B-G}l29GdQ5mI;=k2Xi/HH)O:2M2C@d9cR6sL[D]SD8=4HroTb)macIf$' );
define( 'NONCE_SALT',       'U<D.0WC$`% 2@O|?SF*Sqrg+7NY~1qc/hKX<M9ql_1v+E )=+?Y9:m8%fR,20<e1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'andertale_';

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
