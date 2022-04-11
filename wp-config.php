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
define( 'DB_NAME', 'mbengufa_wp967' );

/** MySQL database username */
define( 'DB_USER', 'mbengufa_wp967' );

/** MySQL database password */
define( 'DB_PASSWORD', '.Z7tp2Se)5' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'gisfryiwhc1dspki3mxcfsfgdqeyzrpttxsztmyblroiolwkxjc7iz5jhr5nylb4' );
define( 'SECURE_AUTH_KEY',  'wvuu0jf3kdwzeuzcg2d90y9o9vducneabrftzh36oz41pd4ldomb9s8sbunpgbid' );
define( 'LOGGED_IN_KEY',    'y5btmlr3htlhm2ugvtxiiztiuivh1rtxleifmomsexnlgua7pxfd2c0r5dboeljm' );
define( 'NONCE_KEY',        'iky7ozmvmo6s1zxt8ojrcnmzkolgskf8kjflgu1pselmzkwrprtyo7rbgmhdkbcd' );
define( 'AUTH_SALT',        '0cklb4vxfdekgjpvbchqvberpjahsmcsdfgvanyllsez8y4wcqm6nb7o97uluq5o' );
define( 'SECURE_AUTH_SALT', '6m7frp9xuh5lfjby70rgvvbkfr00qcknpgd2bnv1e9ozovhfdi2mxdmvwsqhdqdk' );
define( 'LOGGED_IN_SALT',   'gvrewqgipltonnne0yy43qj7kv0yxp7tx8whfmek9g9p6a3cw0dbizxycf09hc1n' );
define( 'NONCE_SALT',       'oui91xhzpxxjunjznm9xzxwke6fhdkmzgi5yudqbnpldwjybplg7mpl96vfmmltx' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpyl_';

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
