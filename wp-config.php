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
define( 'DB_NAME', 'ibrahim' );

/** MySQL database username */
define( 'DB_USER', 'ibrahim' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ibrahim' );

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
define( 'AUTH_KEY',         'stey65kdile26s5xrxaa3w19ypwhmq9igfglywxngqcgctet6q9cggzgpeuh21so' );
define( 'SECURE_AUTH_KEY',  'hj1hv3ovparwe6g1xqe2avmqzm0ukgutytcrgmhm0yimhbk33umvgqld87ryq1ys' );
define( 'LOGGED_IN_KEY',    'jkm2ypzhnilnpqhbupdjg2wt3t8t8m5mnkyva354xaij4s0yl78adplgcobi7jwt' );
define( 'NONCE_KEY',        'ouoodsbq7x83rpm0bczdslkaja3cabm3u6pyrgjnfoj1jdld6jed8zss2vafusux' );
define( 'AUTH_SALT',        'zmcexyltteakyxz4nfnyshya1xvoxlbnj0gw9ilxtw0cvlpaevec8wusnczv6gye' );
define( 'SECURE_AUTH_SALT', 'cpoawzqbqpovq3loobhggipf4ymqmtbvap09zo4pbm6jdg5zyoguqwoac9lm2r1m' );
define( 'LOGGED_IN_SALT',   'nlcazvp70as7isvhwrtpxh4doab6eni6uorqzmtfzsfjigtkcafz7fbxgs5yxiyz' );
define( 'NONCE_SALT',       'bjmd1zqx6q9i77mjuq6tkil1tij1yofovddpp9eexmgyzj4tncxjocq6ejbozp91' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpub_';

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
