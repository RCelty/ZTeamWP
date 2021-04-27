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
define( 'DB_NAME', 'tmdt' );

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
define( 'AUTH_KEY',         '^W`,bYd6s2).b:oVnrD~`;J(vQvt^[f?__T)+Q_V3Ig7Twd`rLFxD9VP#fjNVRsA' );
define( 'SECURE_AUTH_KEY',  'E.e,.F q4EX6hsm[]BKU5-Y2OsR*8vc !&4c2QW~oB?#aXteWz@0mK}0Z8,G/E H' );
define( 'LOGGED_IN_KEY',    ']TGE[ BbzusQ[KE*y)sDMbVHtXSPTwlxQg6%gpT]d/2egw#I`MqZe;q0$bgN~cJP' );
define( 'NONCE_KEY',        'LC?l?1RAX;G.ZM*.`~Gu!:5(:fE5c$B<b6@XC[+ufuLFKt)}.!0e#{)=^_>*iBM=' );
define( 'AUTH_SALT',        '!bz;!72[(Knf]5k1g;8Wbt@eq$)rSAv ]-f%{h<Y=92y^7R )~PF-mL4z>@C{I8o' );
define( 'SECURE_AUTH_SALT', 'K#<UFE5Obg}aru5x*w6=M>q=m2]`!V0|`&3~e,|Ki(bV0Pv6n::0:^j`#Ii@SLna' );
define( 'LOGGED_IN_SALT',   'm6m&RZX,=#kVr[odhBu:f$7w8@3I~`*:PrN:iIJlJ*W&p7N~gJ_fm&R_jOiL{IwF' );
define( 'NONCE_SALT',       'E(A$$z LGKv8Q7^U<BVfn2Sk*dUL^pE#p35&t&m<KiE&(r2F(Vn,ae]qH5<H?1OL' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tmdt';

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
