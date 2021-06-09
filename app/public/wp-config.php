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
define('AUTH_KEY',         'XcE7kCJFL7Nwms25i4oVsswG3W3pm0BzhmAx5Ycpq/d8hhBoFtWC6D4Ctvi4dAiqIXNCU+Ie4grNj9L1kXDkiA==');
define('SECURE_AUTH_KEY',  'cAm29U3M5DU+PiOvpoeE0kTNSdeSaqlyBUuEZoxgto1ODz9WZRwdH07e5r4iKBZRQuxfJHSlmN+RNGgiEcvObA==');
define('LOGGED_IN_KEY',    'ZCWNvtvkuZaHeWBSCd79s5QLWrhyKVS7ZApBM+PZBBPq7aEXug//CIxP/n5WG4JxmVbasyR+pAkPErbz3Wlnsw==');
define('NONCE_KEY',        'bxFWB3xuoaGjCsIqQp8l5Dw2hpxzpzBWPueaVlVHszc/WwtkuEdlxzbvVE4AzpeK4hxjUQcITLcoRh1s5HVTlg==');
define('AUTH_SALT',        'XT+3ReHBafmxcQwoIxJRFamGB5qMJmlCJ2JGOZB2z6u1C/2ANQAicBkK/BRxaMMLDFNY8sPFMBrrCl78N3rmkw==');
define('SECURE_AUTH_SALT', 'Z5EViQTCp0Rj5XECNMz2c18gJn/dmQDzFdX7CpeVUF0avWJ1CbBak0Hz5XUKl6xFD8Xg9M4xx1IOd0yUNGn+Vg==');
define('LOGGED_IN_SALT',   'H4HzE2DX06zivEKRgT+cD3bGD13nDAsNMztqKfminFzTa9m9YPFtAe1T1OIyIxWViltdcwDxaW7IB9BLUrAhxA==');
define('NONCE_SALT',       '0rtNLrPtwGUqJG8nEpFvlsbhRSyiMSvjJ4eAYe4JV8jjg9pqVBcMbU051k/0XOkCts0W17IcTWPw3sRDgpH0UQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('ALLOW_UNFILTERED_UPLOADS', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
