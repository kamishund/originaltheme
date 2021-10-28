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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'u7+KqsvH7YRpK8OKi+RaK+wnY3QF3SSCQdZf1xY/rgFubGHidDLXnuryn3CezOUTQwxgy2WdLA8xw2VeSX1QYg==');
define('SECURE_AUTH_KEY',  'MKGkBXLyPWqgeJ5b9Zn++h5nBdNSXHOVgWkeS+7cuR4ywSbXLpU6Ew1JDDVmLeWUYCW/qNMYRb94ZVzh+selkw==');
define('LOGGED_IN_KEY',    'aJVSfGQwbBMp55Oi20Jfw8bhir2NWpN5OXJzifLOJDNfrmGCNiRHtxh/z+ibSg+cJOepQSSTy+LUR2R1XvIKXQ==');
define('NONCE_KEY',        '+wd7FJagsScoQfh/Da2rFK1w2fHDXC+urpCrJVlQSa27uXmcJszB5rax9DZLKq8le5WaJnhL5tUe/8HJ+qfmyw==');
define('AUTH_SALT',        '6IRGLQdj4lJ+rLWqSyeDHVa9NCzSXNsSYeqvI+UPMBzw+gUPxqN4djQ6u6kaIvugL4fbC+1XDGyfkhYm6h/YmA==');
define('SECURE_AUTH_SALT', 'XY1b1USeymp7/DSvAQv4bznqb2ZFWTXIRNVcH08LWTfi7d/swXMTWBoSqcxLdXMScf9PCAa2e7/Dbac8RoKD9g==');
define('LOGGED_IN_SALT',   'smFBvr5mjlz75mmTEXjrHqUPPOuRKqi/WenRTH+pfpSRLrz+Dqsto9KfouTtQiQqhBSuKemxZp2Gegls4erLLQ==');
define('NONCE_SALT',       'OwAA+11lSrhmefnHK5tQvGV+pOKgssfdnHzf121L7y2oqj5h1bBtQ6jQO96nyEFcGwA1QXuGdNNlz9KbXT06kQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
