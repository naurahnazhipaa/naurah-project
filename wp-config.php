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
define( 'DB_NAME', 'db_toyota' );

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
define( 'AUTH_KEY',         '1(v943ev5iv)!1$>c5HQn+V<m(1%W~-^fVFhVF):L@H v-bf<HFU7TnKtpJwU6SD' );
define( 'SECURE_AUTH_KEY',  'Q`nR/406*w  M1SVjGF*sYD[6?  3SRW6.PQQ8W7KGS-%>K9wui7;yCP6kzt2c1d' );
define( 'LOGGED_IN_KEY',    'N_iX0t*Q-zC*|_Q@Mv@r4c%VoeD}W|La2uuNfY$*LvL)_!Y(u{ZgK1lnHAXF$Qe{' );
define( 'NONCE_KEY',        'Z_O]c ftnh0=CKJ6-$ tO6Ssb[oS 3aobAjdlN!`^|)UqdwDg5s2Z%1`Q`^05tx0' );
define( 'AUTH_SALT',        '/ Y]IRd1Q)R v<-OONpQU8bIZp=a$O{ik1t62N3G9aPL#.+=~Cs&w7)R5jbA,P%?' );
define( 'SECURE_AUTH_SALT', '9i(lVopAHL9/Vt4h1wO.Z20t!rDtI68^:hIu[N0!ZA8F@ke3-4zi!%P@p`l+dvh/' );
define( 'LOGGED_IN_SALT',   ')2{kkBe8js4m,QmV<+$}9QDeYvLJ|8sZS$7@Mn?Ct|U32f*##XD|S&[ k}R]2xYU' );
define( 'NONCE_SALT',       'M>yqeT!2CmuQi-+[~1hk!3`D#i/&D6KUu6Tbuf9]?*8p`g:g|0M =UgS5XI>a$>D' );

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
