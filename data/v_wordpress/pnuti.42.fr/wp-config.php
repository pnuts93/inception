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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_inception' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'Upasswd' );

/** Database hostname */
define( 'DB_HOST', 'srcs_db_1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

define( 'WP_REDIS_HOST', 'srcs_redis-cache_1' );
define( 'WP_CACHE', true );
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
define( 'AUTH_KEY',          'D.>*g/U^]h{;CE1}^*X);gU<wiz/0w!LAuob|miZ{vQk :)yV4,(3v%|41(*,}YX' );
define( 'SECURE_AUTH_KEY',   'KrP@,mT5fW1Xc5J7jTbKA2S0W?h`O4a89)e]8obbxc062Ttb&w^7N|jA*37BEz_A' );
define( 'LOGGED_IN_KEY',     'YBoOO:*kO1}8#4@%<oL!IBr5a|#^yD*N DL}]>~hgIE/3]4&rXs;nSmcp!slnx?z' );
define( 'NONCE_KEY',         '9V^Ri&{tiZQ$1Z2Ck>BRS9F0+VM.whE,0B=}2|#Lc^hDMBHyJi%Fzv:p=$pqc ,7' );
define( 'AUTH_SALT',         'a +ED4)isX]c!43&N/ASQECv?_@QAeM|PyqP#g{=Lc_tU)a[l@G,w^]me,H:&26B' );
define( 'SECURE_AUTH_SALT',  'QnUH,WC|=~c-Z;STFp9}=QH7X%RJ)Gl3N0) #}@snV[{b<C<f.?H6HaWI|,g]n(5' );
define( 'LOGGED_IN_SALT',    'M+*3F<N}M]<7h_.KxDy|K$S%zjOAec;]fERT3g1l,C&y>be&(SB)~b{M_.e>Pgd1' );
define( 'NONCE_SALT',        './($j5S5S}%fYCC,elM?u7eK]pa*c{%99GHiD8f^5)Z1wskm.oSVc{R^4vahUUX1' );
define( 'WP_CACHE_KEY_SALT', 'pnuti.42.fr' );


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



define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );
define( 'WP_REDIS_DATABASE', 0 );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
