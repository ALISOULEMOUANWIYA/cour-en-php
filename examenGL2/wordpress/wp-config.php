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
define( 'DB_NAME', 'examengl2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'C](-=YU,KjqR C?-B13Ud1*$#g`[dmNH{<8u`m7Xgd_#*ACUf^4B<2QwfjIA?B,g' );
define( 'SECURE_AUTH_KEY',  'W:J/MHPG2Y1.lk-.zGqzcr-:>0Sp-&%7c}gMT 1,{M3qCfc&fXV23unS14y4,JK%' );
define( 'LOGGED_IN_KEY',    'q@rJu:LuF+j+}1=CX $KkUW(~O0dJY@0r,:J]}B;Ji6-hP_:v5z6;W-UhbIVf],f' );
define( 'NONCE_KEY',        '{v?]:@-VOfz|yoD`j*1V)vmrJKD#1^PQ:.wsXQ;dJH$^HFj,Rc}fRA8US6F{wHE>' );
define( 'AUTH_SALT',        'TNdk,bKqHHimJ]C~jd ? L QT,,6>5{~Y`Ucu(Vu.Z]BW EaU7Um4].5@xx&S$1:' );
define( 'SECURE_AUTH_SALT', '~(5N/Yqo+?m}N~sAk-USagDrL++Pnl0Z[|d;|0&a*;hNu&eotAm@22w;U6oF4bYr' );
define( 'LOGGED_IN_SALT',   'q_BA9mpV_F|;)1Ha3zE{4:XuNN*)R%tZV&dXPb~0jOF6:Qv6{_!Hr%q)6?uEG61:' );
define( 'NONCE_SALT',       'qm/)w!S(-h&vh|l+0EMD1K&Vo8;?4=mX5N,IsFEWijUK[06$8Dwrgi1q4}7Xb6OA' );

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
