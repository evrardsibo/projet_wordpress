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
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'sibo' );

/** MySQL database password */
define( 'DB_PASSWORD', '-p@U-ZydQ-0Mt*1(' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '4U9<SNo)w`+/7.q^w8|k/!0c-jm$f!3Ad!+iMG^|pm(A4Ds7SrRu|h(VX]v<^MfJ');
define('SECURE_AUTH_KEY',  ' b}R.ik@+@gWPJb$IKQ^P?kU@VE2G+/sw_S6c=PdHLB+*8p>:R(_l-<`rYHeHTZ1');
define('LOGGED_IN_KEY',    'S*-YN%zqZo7++q!wXx:^SGqIWq=XgoNMA||@I/y1c+>|OD[8km*tUZrBY#iLtnkR');
define('NONCE_KEY',        'yU^P[ay3,KS%GAD|J*j,<B:jwZPo8P1G9b-/Cg+ZcpvM%{O]:++`IxSBv*Myq$/=');
define('AUTH_SALT',        'oVPF-|,]Dj[YzbpL-RqbZ~tRD;L^:,+M+pjE}-eY{y|7+Yeu,z1[?yBzU4j&r!-1');
define('SECURE_AUTH_SALT', ',Hm4./PVr/-&` @q+:tok8X; 9+7xu(0CNFjU0S=T-}:@ikC~WQ,h6=-J&.sXy#|');
define('LOGGED_IN_SALT',   '$Y90H&v]YI+-KvrSQN>:rC@,U]^B-j_u,GVKQdZHuO;$7-5@T#$?_0FmHog6+QCf');
define('NONCE_SALT',       '<6GnDztV6])k7=Y7Q+cXRoHdQs&*rmO:u`FFnu83<)G-6$,yQ/<-9`oBnTsDW1r7');

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
