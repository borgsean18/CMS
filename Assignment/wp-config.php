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
define( 'DB_NAME', 'Assignment' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'HoytU_lIui@|LJ)VbT3v[]?ktB[ePn`~% ]1BB33%P<N`(*}t[D7C;iL54be`waX' );
define( 'SECURE_AUTH_KEY',  ')pwV6ulrsn9t?F3ECo9}Qs{C~T>@%Q@4zcN)BByb1c4PA,k}Q0pf|YM3FHNpR_$4' );
define( 'LOGGED_IN_KEY',    'A 6=xuVZo7fF Mpa<j+.%?Z8}Z_MY{@}%a?}H^pIa4%t.rsBrv`,>?@.U_f%`uVT' );
define( 'NONCE_KEY',        '41)_]C?]sy(_6?cUDY=%1:1clH*CFJih4Cn`B8Doix}mrd-N<0@lD;>#H+71B97^' );
define( 'AUTH_SALT',        '>rUAI?!n&yUF&~~mz)?4@Z`*JeoJh|}l.lUrSYJ,qZa(dSR,$GwqvJ,owWuy iJ5' );
define( 'SECURE_AUTH_SALT', '-~u{}i[E.$th2h6W,6RtE[P|cAY}A)Mm,Qo#w59~1NQRRX8,{E5dPcbf+(0^*Kg>' );
define( 'LOGGED_IN_SALT',   'auKD3vaS6K`C@Ye3OBy,k@$@(7kxKv{K6#!L>k=q]k9C_U^Zx=!?-4X}i9&Cd4n.' );
define( 'NONCE_SALT',       'I+W@.smBiCP !j({_k6k^BZ2OCS.zv0JKypRP %:R<s1F-n3ghI[`LGS#;fDg[TC' );

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
