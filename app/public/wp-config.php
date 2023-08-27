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


define('AUTH_KEY',         'geJYwrNk/qMAKVk4Gqs/f92cVbOgdwPtP/IrhYi9tjQhOPl1ouJb/e33LuGUrZvb8t3bt0GBdYzv4jINEj5agg==');
define('SECURE_AUTH_KEY',  'lRescVwgmpSkzqaqU4alaTrvVsVaLbvY70DikQk7fF5k1Kybs+EL689vsVs7DR6lzxXtnpQ7rz8fDg6oti1GiQ==');
define('LOGGED_IN_KEY',    'KxKaWr41o+uiv6zvxpvOx9ggGsngCKZL833dA+UjN7FCmoPdWNtsDQwaC86+QlHOBalmf8izOqVp6YHe7wk/MQ==');
define('NONCE_KEY',        'zCbUk+4Sgph4v7oj3DudgTab5ic5rC4CG/+FG2/RnI4JET/XRaJUEVL7HyPDDOjWS98XhCdTBoTkL4pViUDC4w==');
define('AUTH_SALT',        'HJunVewlcmq8YUpWPkOt7gydthRyjtNGXxx836nOeG2GNP5sMpTzyiNIxOUH/w0IExD9NeXrMpK0XbJ9gRYvhg==');
define('SECURE_AUTH_SALT', '5oxd2A1xDA3XewFfXjd9Lp6smCzVgR0vJC6Q5v/u9sqvlnS3ZOcHJvrS4usXokrPXdmnLTUm0Y4Yx+p3KMg4bw==');
define('LOGGED_IN_SALT',   'NqNpngh+uUxZr/toSpso4ypnzxkk2mZBloDvhTa4E4NLi+jC1kJjG+SRCBHJ3UBWiBR39j0xUvn3h/L5owpBcQ==');
define('NONCE_SALT',       'B5uPHsUXJ/Bh9U4h/3AvJu0xLh/WH5QQvMhOZo52XXcC2FHw+HwQU5yPOfriuV06ggXqwVyy+BWfV7HiW0VbPg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
