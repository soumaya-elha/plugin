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
define( 'DB_NAME', 'plugin' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '#|do),K q%HH*%uz5oi,O,fp$2LL}*4gYrU&5)y{id2Ca!O[ISiTlrV&@n?%SK[@' );
define( 'SECURE_AUTH_KEY',  '8B)}E}DkW)7U,aA!2|R#Zq e1Be_ Ou_)G70RBN$)pg}A6mAV!H/}C,;(a_S{.)0' );
define( 'LOGGED_IN_KEY',    ':sYdy|<xBK E_+w.vCc25=#k_HY DJtZ18x^2C5q7+:9Su]V7TwqPPM,-=F_5@Bq' );
define( 'NONCE_KEY',        'tJfSGx:_UCF[=]a.XVFkThlzoY52faylurq?Xl8(h=}M]!L}Ru 9 .>ah*kquD^A' );
define( 'AUTH_SALT',        'x)CHYqQKnMpL<4^hV:eGV01b^9Meh-B(#BhW^}#1;O)b%tJV.U, C!Kz@sW+A(r+' );
define( 'SECURE_AUTH_SALT', '>jNWb_`/hesQBrJ^``!o@~=K?@bOy/j|hkqwikO^:8:L5<$Vs(]#^]nzj%.ECm]@' );
define( 'LOGGED_IN_SALT',   'zl/MCg17oN*Po#*)fv<C}h)$9u0EH=^>k.}5!{njgeq5!U(r`x/!VyMT~E`gK.>-' );
define( 'NONCE_SALT',       '*e_z/VuI_7U dq(t~ )()]sy=3E7DFnoWo6Nk65@;T]7,>_-]cd3Q8pAM>lMA^Yc' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
