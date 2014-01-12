<?php
	 /** The name of the database for WordPress */
    define('DB_NAME', 'newcreatures_wp1');

    /** MySQL database username */
    define('DB_USER', 'root');

    /** MySQL database password */
    define('DB_PASSWORD', 'root');

    /** MySQL hostname */
    define('DB_HOST', '127.0.0.1:3306');
    define('PATH_TO_MYSQL_UTILITIES', '/Applications/MAMP/Library/bin/'); //location of mysqldump, with trailing slash
    define('WP_SITEURL', 'http://newcreatures.local');
    define('WP_HOME', 'http://newcreatures.local');
    define('WP_CONTENT_URL', 'http://newcreatures.local/wp-content');
    define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content'); 
    define('DOMAIN_CURRENT_SITE', 'newcreatures.local'); 

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');	
	


/** --- PHP Fog --- Patch a few issues with file saves, plugins, etc. */
define('FS_METHOD', 'direct');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'E5E0JG3DlT1HnxUaWzPrqTaS1fLR1TZfDtVzbRHACPNAMMhaWAGhfanN0tcCkAGn');

define('SECURE_AUTH_KEY',  'm5NQcrJHob7wWWlPAweeh219Xvc8nOPvu7uzlLQR95n0m0vlSjedAsJfQXRXuk9z');

define('LOGGED_IN_KEY',    'OfMxMjWX2MGuadjX4k8MmkxuFsi4Je5Pl0GNnDjA6V7861Iw31ZlDeOaG31Mc2wi');

define('NONCE_KEY',        'nXESbcSHIVMyIzzDJVRmGeTed8JVSZrNmln1sOEOeSY6gdrswLsEozDzn8FFrCw1');

define('AUTH_SALT',        'wk0d3w1gMy59MimDduA9DM0TC9ytqDLtmtH07mDsallNeiPBiw97tRHlbFx7ElBE');

define('SECURE_AUTH_SALT', '0aJChFU8S8glh1KkaWjaBQV0ABlcbrY67IAjMzNb1mJuXrYdz0TRVxAC2KoCAGEX');

define('LOGGED_IN_SALT',   'dmfcJ3uqjuoNbgLQkXlaPEExjpRFT1h7HJPKqJtoYnYGcpUqjggtybT6sQzi2SMw');

define('NONCE_SALT',       'LpI1vU9HEQeO3blusEAP4yz7wdyCBfJs9RIS6qweoHsvc3TwCqsXEfM6jPMNpqk8');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
 if ( !defined('ABSPATH') )
define('WP_DEBUG', false);
else define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
?>
