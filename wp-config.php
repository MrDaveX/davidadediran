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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'davidadediran_dbb' );

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
define( 'AUTH_KEY',         '$h>K&h6ZJG@bM2r}h ZvV2q$R~GaV+4E^uc<5-VIZYa_*?Z)?wEl8?9< &NS67y ' );
define( 'SECURE_AUTH_KEY',  'lRBT n(uP&}m(01Ty758L`s[M6cXKMqWnF4TE7B?m{DI}haiwCLnPDnW -H}E&dr' );
define( 'LOGGED_IN_KEY',    'uWNAm{!=s?YXn+vLKyQ);zw) !`h8uZz%q~Mg/}lVCBRrJV?yo&:`:R]8o@2;IIl' );
define( 'NONCE_KEY',        '{sg!%<JP::;`fP7`P)E1<0sCM?2)Vsq%*?y_(IZ/)[|6?:$Q`5X#_,5Bf^k<zd^5' );
define( 'AUTH_SALT',        'w^a&`uI!r=[Yj6SSNEXDOU?BPEasWipAj|%QZV,4q[7bPW;H[a{,-8$XNg}ja!.9' );
define( 'SECURE_AUTH_SALT', 'r%CC<SCN[ XuA{Y$V8LR#a%q#^C,V%+GU/KG5@:[fkO?w0PJ`k9thzc0a|.YAlsg' );
define( 'LOGGED_IN_SALT',   '6[DOBqry&AUFrQJ=*njNeV4>EH+8143N)PNp*3c0IH:.*X$>~hO;*)mTlkra?cnR' );
define( 'NONCE_SALT',       'b{3+bhm6wR&)>o++&qf(DKY)EJPoY/0BF=NAtN({i8X  q7LYfkx.Jh7AdR}lgD[' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
