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
define('DB_NAME', 'horseclub');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ')cpcs&Q*c0UyXHqYetmC6(UQpmThB4p^49UI^im%j%1ReuMW%(zET9E((HFuw58v');
define('SECURE_AUTH_KEY',  'm%%jj2092KoAlm@@^WTo5OxWJujKIV#Y()1Y2oySW0JcwHVdska4s!!qEHs&psxM');
define('LOGGED_IN_KEY',    'xae#WML)Rq#QUtomHG7tJECH5x(0Pd86fnut*4A(^LPPhd12fGPUS%Vm#)1ENI!H');
define('NONCE_KEY',        '9lTxFNYPjZLzSgviWSSEiCCMvlSyQMkpcJJLrsF2Lr#qQaX!VhR8R1e*x4VGBBe7');
define('AUTH_SALT',        '!LvvUEoK)yNUCljpqPrgZYtynfa!hPrt0qJBp(3tXudBTuLF3#8VXj5YnJhwmWc^');
define('SECURE_AUTH_SALT', 'dSdB(PgvGkv#FEJBrW*ILPXnJpI5QCnkdsQVlg6erFq#vI&jEJdex50UiAHlypRT');
define('LOGGED_IN_SALT',   'mUD%N5ugpjU^nm*Y8iP7)x^G6aDZXi1M3vHRac!l6Y&F9gict#YM)N*xF^F8rVDh');
define('NONCE_SALT',       '*8o9t5VKPSj(DwBtqPZRr(J18r)WX1zlyGQHCr@r(mZW8y*pDIxKIL#jWFQ5Rr(N');
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
?>