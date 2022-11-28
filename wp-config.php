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
define( 'DB_NAME', 'household_appliances' );

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
define( 'AUTH_KEY',         'ioz@zjq:isk:Gr>E-.}u?0Jfp>|S8bh]1K082`oVZhcLE]^$[a>o`@IO0XfY[$+F' );
define( 'SECURE_AUTH_KEY',  '<7nV~,M X5F$S(&bTj8F?/dT}3c$kMDN]+U9p2b(HNFG?]Zg8gY}H9%tbz(BTf%s' );
define( 'LOGGED_IN_KEY',    'g K9_dq`0Ky0B[FfHHt`!<=z7@p|4XsaxjrZOmhXifBU*cq=&0D<|>mJm+V1oD66' );
define( 'NONCE_KEY',        '9>ayJQqDDX!>HR3QM0`Q/>ZwE2)L{_OMWBU!kJ+WTeW4Q(i0h$6gL{3UL~z55kQ;' );
define( 'AUTH_SALT',        '@y&h*+~qT:<Xw qn49]*ibsmuh`T0c<RfdCeN0=%%}s+ipV*jV+o^Ec3fAZ4m<qX' );
define( 'SECURE_AUTH_SALT', '7A3R[O~r{!LObWHyc0QPi!)ei{_>/uEe7((whRD%k:aEwV%,7!ux2jwd!tq/lw,p' );
define( 'LOGGED_IN_SALT',   '2VPD0[4cX~=*.Ir5P}ZEp#2u&n>=?WM7AJ{ggB>BQ_l0R/Mgn6w|NF~CyV +(7,!' );
define( 'NONCE_SALT',       '!i1ett9kor;PD7kw}FJa0JK4jJ~O-A_}ki]<!&/Y,Y:0A*T@<*4u!z@pQ-HB&Fb[' );

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
