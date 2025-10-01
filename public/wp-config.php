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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'd067oHyuZ2W+IMgEKYwx7Fxxj4lCgeoCt3VlA78zWE0bYOQRvxcbdKVtRYL8ipN4CZp/Zx8fljYQoSFO8RkraA==');
define('SECURE_AUTH_KEY',  'M2apjM6PgqQTmcVeY8Mqp1DbL8Bq7w8UYHvBlEDYyUnHGjrew0Uhh1nyQVzmEUgrt6JC3UMbHdyOxBnOyAcL4w==');
define('LOGGED_IN_KEY',    'z7cI5c7KJYOVdiq2RBx78Xyh46NKZk7fl4mQacip92NRfVEy8RbLAl+mNhaHRCZhRFBZWMnyjSh+cJDa0cMrYg==');
define('NONCE_KEY',        'bgmg+LZQG2sBOJjIoy/bhvcCqRE3QQfoTS9ZOZwSNyNYXamdhHeyOkZ8usIVfXy8czpU2p6p5eiB+g7L+Ckb2Q==');
define('AUTH_SALT',        '22AczRgwx2Ts0l2Y8w1M3MiUrmxwJbiIEe36fazWWU0GrMY0q4Z9bw23568TvzJm5zdynwPFILDkQFvdTIykWg==');
define('SECURE_AUTH_SALT', 'okHe/4sjFXT6W0MyLmOE43OIXDwqSJ4PwVODqy7gK9q9wvKu56Yl+cWkS0xMwXihjjvNXhh6K9xr7W+hRdZOqQ==');
define('LOGGED_IN_SALT',   'mr7i3VAhGlOey3Puu2O7TFsm/iGkYb0RQ4Cso4rpVa/QdPo8qE3Cz1tqpBN6WmxH7ylxZGLBFCTmAkWx4IaJCQ==');
define('NONCE_SALT',       'FEkCFzr/MWoD9Y2I14LSoVtpcnvwDjhx0CyFj9qBZMSgs2qpHrCgkWR49e/IKQvQrz6J69RR5XVeI67s65PS3g==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
