<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'J9s(Z+7R-ty/3cgGyXS0]`B3, czaHspu/z[|LY5J| 6F52S`B -sBt80@b *nzO' );
define( 'SECURE_AUTH_KEY',  'F)K9_=7>l_;8V9Md]d5{b0Jz~oG_Jv6qv*`c< aY,560,b$i%DdtvH?.P`,5v/,;' );
define( 'LOGGED_IN_KEY',    'H#_~ VB]9^sQ~F]f/3w|qwq!1dW,v(@UIPXMx2]afK8R~1~5>8Oo`:?WI>LD/V 8' );
define( 'NONCE_KEY',        'oo7zJ&!4PvX[PkaYwdTj&+k`6;k//s R;lWsz6.saG@)XE&}-,Qh~]eind~Jd$)C' );
define( 'AUTH_SALT',        'aT2:*9.`$}r5O*Q:[~r)4Fl >=~f&_#+@]L,ABaNgNfzaN,`1cNd0sQg)UT 13jg' );
define( 'SECURE_AUTH_SALT', 'n|2e6hxnIKB^TN^}sEi4vy1u<bO/8UhsC]`:YeMmr~L7_|#7<[n>qy_T]bTmS*_7' );
define( 'LOGGED_IN_SALT',   'pjz4:/d>Z2a5AERz^6bLdM )Hc2C^S,vAQDI&9o]%iY4i}K)n<;aH2nA#P;P,{^*' );
define( 'NONCE_SALT',       'W<CYQw?nrvpVlGQ:(l8@Bk6w)j7ymt7 k/*3|A5hfO|wjPHUF,]MLY|ajD#C|jIu' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */
define('FS_METHOD', 'direct');


/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
