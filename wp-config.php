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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cloudwizard_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '8{rskbAcgmR[ |u9;ar pUmn&iAImsrn8/Q24:+dQ&e}HOt%;5P9EZ[qAbAciM}/' );
define( 'SECURE_AUTH_KEY',  '} #yXQ>}:jY$9T;jr!gTc4,eatU(~~@yLw#huUMrhy4G6$x2M)Szw<  Y9/DtJ-_' );
define( 'LOGGED_IN_KEY',    'V0WtFXEZ>D3.XM,}On0D{XrZ`hXjFw!eb??}19tHw&q) R@+&qwJ##^YUnx_eGg2' );
define( 'NONCE_KEY',        'L:$`dZa8K=W$C&ml>%C#QY3NHu4eKkcwo4CX3sC<yus6LrAjGMyhmHF3B5 B7}V$' );
define( 'AUTH_SALT',        'zGA}z~s8DU<m O(ay2(P{&rJegH)!<13-suP8v-FtINH_6A~!4ol-p+;9)oH/}HB' );
define( 'SECURE_AUTH_SALT', 'nR7cn;10T+von<{{]<2NX~%>U$wlPkE@}M<89R1Wwq-s47Nshgcr?+hmL2g7>-ys' );
define( 'LOGGED_IN_SALT',   'o`g]6Bogy:%^}N9.8U&HQ>wYU8?:Ke5~At4LW)ZHH&3n8eUWV%_E+^Qv${nzgl>e' );
define( 'NONCE_SALT',       '3zX2_CF5&5/A/ir>g_RyD(Df&RMGx:76HFB9iXBtJ&JG@! s.J=P1d4^v>9sS]2C' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
