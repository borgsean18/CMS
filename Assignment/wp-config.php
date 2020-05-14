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
define( 'DB_NAME', 'jkk843350350347' );

/** MySQL database username */
define( 'DB_USER', 'jkk843350350347' );

/** MySQL database password */
define( 'DB_PASSWORD', 'SLvlXg3@VZ|q' );

/** MySQL hostname */
define( 'DB_HOST', 'jkk843350350347.db.43350350.200.hostedresource.net:3311' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'PTXKJ(IUxNjz!c!BBVg9' );
define( 'SECURE_AUTH_KEY',  'UCMH4Igd2-KVXQO8d2AY' );
define( 'LOGGED_IN_KEY',    '8U#MC=vvB$+EE yYq4GK' );
define( 'NONCE_KEY',        'ZJkN=RhZamva%cUJPZb1' );
define( 'AUTH_SALT',        '_Av(w$Dm5adgy&E/a04r' );
define( 'SECURE_AUTH_SALT', '7bM*@z/YA6JJ8Np+/@xm' );
define( 'LOGGED_IN_SALT',   ' kGErLKVX*zEcwX/)C0w' );
define( 'NONCE_SALT',       'RCpNj3s+fGX)Q&n$fQ=a' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_rbmbnbafrz_';

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
//define( 'WP_CACHE', true );
require_once( dirname( __FILE__ ) . '/gd-config.php' );
define( 'FS_METHOD', 'direct' );
define( 'FS_CHMOD_DIR', (0705 & ~ umask()) );
define( 'FS_CHMOD_FILE', (0604 & ~ umask()) );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';