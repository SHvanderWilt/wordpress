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
define( 'DB_NAME', 'fresh-dev' );

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
define( 'AUTH_KEY',         'KUX?.A4P]xC>Bf7FG4$)x*eXz+RAcrx(F/fq~QaL[]?Tn9f:754-a>4rD.O. LOh' );
define( 'SECURE_AUTH_KEY',  'sLDdo;[6e~09v*L}5)!?nA[||ZzunhImm=|xM32 TJR;Sev]i`B_L#6]cL9Jg,C7' );
define( 'LOGGED_IN_KEY',    ':**1l!oLny)~G)_)|_JXn46@/~7a|E4KmeE_5fVGIE+VU*rt>Ta0DLIhW*@-@}xU' );
define( 'NONCE_KEY',        ')`YhwR5SG6-_RLt<Y*>3g:(Yb@%0y(a~uP.=wpW{]:3O?/~Z,r4UztA/xoL[;Tx,' );
define( 'AUTH_SALT',        ',}+yqomEa4.n4%X@6k=$JgS8o&gR<):p[OMsN,(.g~23vW+-W9S9Vq5ixB>]  |:' );
define( 'SECURE_AUTH_SALT', 'Nm/snVu?5a!|mqLOYro?#G{A!`}GE)#(|ngG_L=axl{_OjU{^`= PQZ*`UY`Woo>' );
define( 'LOGGED_IN_SALT',   'xp[(P([s%8v0G4%.o*Jk>daOlho|BA##F3ybLI5a}8L0#9A~;?yw<$hWR,W|rq+h' );
define( 'NONCE_SALT',       'Wi3&a/E]_l)?l+WmG31[Wx(A1Gm(F8u|N^zsjO<?{cukO$mq/v%H>4NJtDV67i5W' );

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
