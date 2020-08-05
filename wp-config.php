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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'G<lsjnGUgX-e6}B4>Nd ,S7,47Rr-VO3_.#,#W%N3?UB)_4eZp+`]U9{o3<<nxmp' );
define( 'SECURE_AUTH_KEY',  'TQ+8Pp7tpTzepp.geYoQh5xs1*:`9vk`?pnmccftD!~%Px0?Esx^Rmbr{y-fJ1PZ' );
define( 'LOGGED_IN_KEY',    '!cxo8oVQ27w#bMi*tc(5ymEl4-7iA}{(Lv<Us=%_^,%eiv}k#v-Lv-]55I>bJ+j4' );
define( 'NONCE_KEY',        '[)P(T9}Lmx:yBb?|+L6G1e(& g18mHyNl->w*4geQVr ,on.w|+6oRc||$Z2DHRr' );
define( 'AUTH_SALT',        '3< .,g4i4,=J+mPaXPqJJ$nnc(.[oWiS72Sct&5K+EMr@7J5SjY$!{3PGo}Z7^vP' );
define( 'SECURE_AUTH_SALT', 'WF3Y*~p#Kz9cTM&I@QR{LslA!c(x6w]N6mmjV2`+b>$U5c:#xy bB@>-j<IuT#mF' );
define( 'LOGGED_IN_SALT',   'o-AwFFh0#1M!Ji->|Eb[K[9XSI1L;)eYz~0ULXk`NoBKiIMl@MbMNs/wEtU,TEB1' );
define( 'NONCE_SALT',       'Un47-8Os#4QH%Abd:xj0w,m) .tw&5/@N78VRi4:RJ[wA}d:A1}a+Vm4E/m#1YnH' );

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
