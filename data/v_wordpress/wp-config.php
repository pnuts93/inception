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
define( 'AUTH_KEY',          'AQxMZHCb=$DHRlvXQTw~Wqss}0H6HWDfJg&3BjaAa?vU8$KRtD@rm0Ei?yGr#<qn' );
define( 'SECURE_AUTH_KEY',   'YuJYda$% ZLkef$]3^C~xyxMa]w7U8Mq<eO<V0=z&#gqx(&rtD+3lDY$(8|cdVgc' );
define( 'LOGGED_IN_KEY',     'eCYzP=rznP]`%2_nS_.^?b~0,:g-!v<3KRg}lOJ$H5?o|3y-i(p(@]AHe[WK}I<.' );
define( 'NONCE_KEY',         '`?ifUzp Uotd8!/Pb:^=sZy0;IY.DT#xP0K77$Fe>-qo5%PZJ5e0z1K<[f8<u2m#' );
define( 'AUTH_SALT',         'D7>MB4@egoR/7J83w:5-KS-Jn#YXls.-b97C$8n%2@o)M5f8`SaVL/Z0~,QZ#E /' );
define( 'SECURE_AUTH_SALT',  'bZnWL{=QH!O6M;iLv1muT1L4LnCPLpaE f0P)]O%Lc)(0a67v>g,NQT[^!b4x>K_' );
define( 'LOGGED_IN_SALT',    'HzU]y?YX7v}7NzRFKMeUoM#nKWsoNq+Y2:%4~HI!c=X7Zvh}!?|GDcDB$}u(P`K_' );
define( 'NONCE_SALT',        'MD95aE)G>=8_p@g=vp!,^VhyqmqgQ^[2[Lm,f6truD#8,a0@djZ75,KoaiFT%4E~' );
define( 'WP_CACHE_KEY_SALT', '+B53PxQm? OmXoPvC-y?(,2e]3Vss=m(U!zzF5B>6/=OuNi3`YOaLKOBqp;|auNI' );


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
