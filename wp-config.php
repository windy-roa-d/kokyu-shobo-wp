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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'DspGImPrWwnQQp/Kts211ScLFi9ZdfCH0iEHHdIGqpjJuR9aKTrr8KSOp/xxviMGecwLxayt07kDqWR/FPmY4g==');
define('SECURE_AUTH_KEY',  'SYUGGBuyfZ8nZy47dneTnrkoxY5ZzSDSVSsCIWPra4NNNlmk0qy0sWrKdPJDVSavEaHj3lrEmA7F3NrYhCJ3OQ==');
define('LOGGED_IN_KEY',    '4I6gMAmaV3hfyK2DZHyoSb56zR26KcRggCFBLYeKMCVp+06tpfnzH4z3lgBSX/bCKQoPXfV8kxUsARpkoJO8/g==');
define('NONCE_KEY',        'r737eV4HcNDx3ZUf3YpRuo8+Z9A8KCOaccb7c7aq/2jNzIW35bpxf29csnx1upu+31z2YrMkDE9BoBj6ArWhuQ==');
define('AUTH_SALT',        'Nh8OG8420oUiz1s8nv6sgWDoEJ9P6THsDTyQPu11BgOiqb5XlVTzpm+AxA0X3Xnp/2iHaG+FT7Cwqe/HzOAHhw==');
define('SECURE_AUTH_SALT', '56e60OyL4plMQQY+yE5Uup4DjK7vxPFZvgPoHLQifXWIzMVGKQYUKzj96XjyQ2jU0cRd/C3MWMnLGzrMvutPpw==');
define('LOGGED_IN_SALT',   'zoTIZziwyIZskM6qNI4mqiuswC7OS3lHM84AVn9G8hCqG57oQco34wEY4M3DXzBgT2lu4F2pvmP9JjnXmaXQvw==');
define('NONCE_SALT',       '3mWH3J8NiDZyp8A72xXz85HELv7gk2kN88s+Iajj8LDTza8ghGQCOIDVcusRwSyIF24doVFCQ3z70HVOmFBqFw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
