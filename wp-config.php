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
define('AUTH_KEY',         '5rgoe7KZX0HNv7vB31BTSHAeXp9hMB2jzn1/ewQQz+q+2InaPxBW1j2msu/bzm/s9ZwSn3edhK5SR36hBgDW4g==');
define('SECURE_AUTH_KEY',  '0iBeV1yr+aAlMJJCXi20WSROzlHJFE01cRR5s22qaQlfjC2L7OMBe+pxZGAepg614U+SwnznmK1+lkFk6rdKkQ==');
define('LOGGED_IN_KEY',    'UrNyKqdOu6BDCCLoBfGvo+WWq9agvSI6TcnBZoXKSve2cdg2H3XVpn3tBoYq8L4P0nrLTLK8OULPmmFpP26c+Q==');
define('NONCE_KEY',        'YgNQC8UGUN+jhi0Jgg7TS27d0zbig8HP81i2M3pW/wN/6dDqZfNty6OwZSO8ocuO11QRfbGvpRgao7sYRhRMfw==');
define('AUTH_SALT',        'vtCCZqm2okz/doXppwOIlnQyGzOaqaIRQoVhbUGx2elMLqIPDQB5HSmVAoqe7w4noxh00LfF7VJR+JGDPZeZyg==');
define('SECURE_AUTH_SALT', 'dCl5JL6jitFlAv/xj2yriZSeOrLzA+dGPXLr9VZGZ34Z8ZZjMj0tP1ZhyMSozp2aZPO61/bSy+jH16wtOgzUdw==');
define('LOGGED_IN_SALT',   '2T7nCChDazB9o5MiiMMfUZw6n1A73NBSrlDsFLD9uMkc48YbxsbrJ83A6Fp3GHASrNV4baqJ1b0ORq4+/PRqbg==');
define('NONCE_SALT',       'VQ7NDwRR4oMHAZG64c+ItxWBlNqbqLj+XGx7ijtIF16MBRWif5nsN5lrvNz7T3kBpUiA2vfTKjWHIsXSCSuZUQ==');

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
