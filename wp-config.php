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
define( 'DB_NAME', 'labo_db' );

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
define( 'AUTH_KEY',         'ilqa`})~&U%XxcLs8mQ!1=Omg?x]wqQpip*YS}2p:VaMa%IBNqv,HgnW Er7S> .' );
define( 'SECURE_AUTH_KEY',  'C( SV,C376B26rre;Kg(fTyu_`7bl|I%CN58@c^_m)t@z)=w#Y!O`(;W]av4,c,m' );
define( 'LOGGED_IN_KEY',    'g`1hWlqnFMgy#fNlm@.O<;p9ii4eh4I|Khgn}pO0|(QH2(}jLtGSXRWPTk}<aDMT' );
define( 'NONCE_KEY',        '>?`#;&I|oHkB0@/.djI|6N!>2H9)1D%qjKoG/))I8y|slG>+xYE`G4>22!)EWwcm' );
define( 'AUTH_SALT',        '@~fs ;YhcI=}(k?@#)`{K!sAn56]F!9:{kVX>6j83Z#{re]_-%}ku2jz}zce5^+-' );
define( 'SECURE_AUTH_SALT', 'd;MMC!kxfwOY5k|~PTlNXosw0OAv2`QPEv&y$B>WXzzwYJQ!FJ`[B8F:voF:EE%t' );
define( 'LOGGED_IN_SALT',   '.s#RGa9^?0/+[&g`t=CsU[];hYZ@JP/BVS+hSAg f~7#3aih<D)6KR29A%:8L>&N' );
define( 'NONCE_SALT',       '+VSO->Sp09+v3EJhy22$mey%RA;,}&ic[I9;=5el<3^7b^t%CLDu{:zPiYqV6PhB' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
