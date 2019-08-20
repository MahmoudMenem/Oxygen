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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'oxygen' );

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
define( 'AUTH_KEY',         'WB.7o/d3{RH*y1{*u~KG@ka[&^OB}$6XVr$)Ou{EH9<s` lV2{30ZwEZo|]EC70f' );
define( 'SECURE_AUTH_KEY',  '>^f]E2@pTQA.`Ebae9A!g/.v|=J$PjX2&Ys9+r/MWKN+{jE_j7w[#G>2xPs%;&DD' );
define( 'LOGGED_IN_KEY',    '}|^*`#2b]8+f)j 6LfK`|;J(=C9>q:f:fB_?xCjn0|QN[1Z}=/{n+>LaE+Zs6$D&' );
define( 'NONCE_KEY',        'aRlJTMkMB@`joGYUqAA)T1<}8d|r[{OC/b-)I6^]7}$?.$Wt4]uL$$UQ|Vdz<(Q5' );
define( 'AUTH_SALT',        '4{3l QtSq[<Y@o(>JRP6jI+oNp5jXlBO<5I6R/dr_,w(d{#&N`SdkuM1;o(4Whb~' );
define( 'SECURE_AUTH_SALT', 'Y!Xc_`B?40`9P^S]+[iE(4_yfZfW>>_4yF$lnD!EWWY<YRnt}~FZV+/IU] 3bKq$' );
define( 'LOGGED_IN_SALT',   'Gm` {q|`/NelLr5JT+I$Ev5=L^:unMyBUila/1u%gBD1(@NBy,_p`f#3vS%=g8qU' );
define( 'NONCE_SALT',       'TdQD^mrk)(~U(_Zb67P^.S_6{o&+s-ph;Z7Ueu0xP~FMoVqFGGqwG6ij$L7()U^V' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
