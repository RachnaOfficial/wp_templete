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
define( 'DB_NAME', 'generate_templetedb' );

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
define( 'AUTH_KEY',         'F.Lb8]2^$yy?JrtR?sS1:Uv~&JX,,v90v WHCLZ,6LD]PUCB:E{jLU(MIO@,gmGM' );
define( 'SECURE_AUTH_KEY',  'f&#Jz,a5BP}P}FXoE-]&ypOdJDd]|-fp,?lKl;?k2hX4[u,Bw{2MS/7vIoxk5L*e' );
define( 'LOGGED_IN_KEY',    'qiM^4q+@h=l41/dVL6rmz^4hcRt!b2x@#MRKVe>l;7Idy7bp7Gh^`jXR/ `r`!Z%' );
define( 'NONCE_KEY',        'CG4gtuIuOG=Txl~:?SkPJ:]:Q3}r=k-c@[8J]uv`,!9&68F}5(0F3aH4,15!crtU' );
define( 'AUTH_SALT',        'rgzZ2r_m@MEQm+P*F&tH7Gy(&v_gd43~8:6Q!xL:{,O MFXWvth](5XJ.^}Q>B*Y' );
define( 'SECURE_AUTH_SALT', '[3faQhAcu+F|sY,!Y=Zr3%0ve|[I+5,%!p9]xs-274){tdHoP!Z/xk B9djGj|k<' );
define( 'LOGGED_IN_SALT',   'ScMEijJL:s:h?NrlCm(rh]~|:-m/w(tV82p=hwkTxL)aC{=;kV_F(*XDPSDJRw}*' );
define( 'NONCE_SALT',       'K-{z+?{1F 52B3|S |o{0*|l<@S}u!<4iR2}]y[m?*[?GI(U9<jWsEwSOzWoKf8E' );

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
