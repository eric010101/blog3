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
define('DB_NAME', 'esbcwp_blog3');

/** MySQL database username */
define('DB_USER', 'esbcwp_blog3_admin');

/** MySQL database password */
define('DB_PASSWORD', 'esbcwp_blog3_happy');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3xgB7xVngYH757IP3bEhz2FwgN5oMrFtkfTcaUf7ChkhwDAiNS77EUqN9YawQV2h');
define('SECURE_AUTH_KEY',  'wHK9FfVxhH3JHJ9jtE2JMNiqYzb1fgH1FPvi10iUdA7YTGbLBCQsRhZDw9rjaLpI');
define('LOGGED_IN_KEY',    'a57n7oJNuz6Ns7IOTv7d1imi1aCzRMoYVa7ABNm5w1iWiyCZrcoXgiMBCrUwIraT');
define('NONCE_KEY',        'G3M5UM0bMr650JtP1D8C79WVN55WPRBTdf5dfotDnkmrExkhvSbhmIwWf8Guzh4f');
define('AUTH_SALT',        'UdSfAUns8VjXdqWfVHZ9jNqdkNy3pzODQ3B8ZMEazja2Pk0oy7QUggfDw0zu0xCD');
define('SECURE_AUTH_SALT', 'WylMU2DaOtS2Q2vCYuQhyMvUrC30jW6KEAWQbbRpDZ6AosELMJfAIV1FilklDSod');
define('LOGGED_IN_SALT',   'q6WlwRQkh6EbzRfY5MJUbOePxsiwX9ykqibL4kdUjHNaLSA2yOF9YiiTZ6cb9E3f');
define('NONCE_SALT',       'T7hMNWIfetRkpIiUXWgeN1inFfkd7Gj1K2BtpFmPahFZ7DKrBVTi6xm2iDQE9x27');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
