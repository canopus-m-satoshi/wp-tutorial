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
define('AUTH_KEY',         'JXSgxIARrgKpQTPwKjJeTptpjEEoZi/F7/bx8Uo82iHs1QAVmv/dp/Q/eV17wkZQivJ10LSeO58CC2PChelXIA==');
define('SECURE_AUTH_KEY',  '2q6SZtjI40r9mJfTr1+AZFo5ypeL2Wq7vqWnlm7ee4gUKZ99xF8Q1DvFurQKG6aCN9IJX+B2FRNna6q90CTuww==');
define('LOGGED_IN_KEY',    'SNzQdZL15RAJYE7qCr4Ho+loSjbHe+MC4DwyPADkX0VtwoRQuVF2+UC4l97VWZl/yLrJmOXFg56yJc5CkzkWbQ==');
define('NONCE_KEY',        'U1zMrL/M2AVG6Yql8FdSHMSWFiwnrFBfT8ekv1bATz2J/d1piOQbjI2uQJQQdu2wTWS3O0KpxJ4krzHUNGzJpQ==');
define('AUTH_SALT',        'RYumrkQGOKwPaJaMN0IwCj3LG06cNFm8m6mqwFayKTGc8v+kIWCb5TqadgRxgQNSrSO2Pe2CiYK6MO+hdaZNPQ==');
define('SECURE_AUTH_SALT', 'h7RPTWx08jrz5CcMEAzO831TkNieeUGhoVBPVD9D4CECSGFHdraSIBSND+HFVW1OIlnOmJMlJjxVXg+ZrH6rJg==');
define('LOGGED_IN_SALT',   'gG3EBV3APEXVBoji50ryzfrneXfnAZ8xFHw1qhNbRZL19O56pNtOBTZXekevzxVGOJtK/dg7t9v6yqrihFe1zQ==');
define('NONCE_SALT',       'fc6slZXOaZW2QvlQI1JGPBZhg9XAIxvIkVLrHEL8i3IYqxEfhwO6rVmXhTulmjmO+ywILDpAg3JscHRLKbnVsQ==');

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
