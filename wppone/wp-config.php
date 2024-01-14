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
define( 'DB_NAME', 'wpone' );

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
define( 'AUTH_KEY',         'A~FA$a03i8}DArWpFImuhH5}6_p3E>.|=Qb!WFVi&?0sXOOP(20GCPnr|:R#U p5' );
define( 'SECURE_AUTH_KEY',  'ET/PCH@w]oyIg,7$FHmyN0 i?kNp0NCoS_B-pK@Dbeu0!QkAq^?.)+)H/K&+ZtBM' );
define( 'LOGGED_IN_KEY',    '_d(C(qD*o@...+tT(Yrm#9&_@iO$TCM.O_-%}i&TkhlUT~5(kH9zBjvRRDf(23_k' );
define( 'NONCE_KEY',        'L+aR<eQjt##7<N0K~)nym;,pA.#;:]c^Bso-]}dLM<Eyh@JApwZd|oTZT*D:i7t!' );
define( 'AUTH_SALT',        '+sdPC)27I~~NaX^Yx7Z$Qt/gNb3!i=NQf_?#YQZZHNNJ]eFypB3. 8U6);[f,73U' );
define( 'SECURE_AUTH_SALT', 'q8I};3&D~(3!O*.DP[3,tG0IQp;h=%(CKy8m^8?/.m)IiKI(JKn3&T=$`U!(*F+>' );
define( 'LOGGED_IN_SALT',   '}nkY}$k$T[C[1NDMLJ6=O)h~|h&G7$SG&hL#Y~]E(`O<*{3zM7QOhVU^0Hte2T+S' );
define( 'NONCE_SALT',       'LTV*:pvVj#cCL Kb#6ege+cHT+m},Zvd@X/6RT|Au.LI4t]C6qW$by7U0H|!~?Yk' );

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
