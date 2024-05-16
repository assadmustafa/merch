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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '%CGd8999DC?LtS?djPJqV>XzzBn,lSza<y=D=n5i,u#fAm-@*>vkQJW)<t]xF;X3' );
define( 'SECURE_AUTH_KEY',   '?.?%x!CHz=zEn]rt,Gh7(/TftYpyU[wz+[av,l+ !onxha#WK-O)CQnCI:2zoWnl' );
define( 'LOGGED_IN_KEY',     'GIyzHF6hG 4tM+?4[R{P}*dSil%TC$@:KFZdwmqMI=4ytpE[AjWb4q=7^1=GW_fk' );
define( 'NONCE_KEY',         'n.WXhybk|n305B9z<}*UnV3*n%8O&!yA|@>?7}`M?b.7.6}6`FTQ`CVHv.N-[zbX' );
define( 'AUTH_SALT',         'M^qVnBh;6IM9whj>nl*MNJI4Q7<zsM9;$n{)BJ}nKk`LP`#Rb9YMyY`ap(~e7|wd' );
define( 'SECURE_AUTH_SALT',  '8+vp}`mrH,6h@~ESo^k6l*%?C nS.?-mnvYXIt%Ka)UL.)DH:`or;iY:$WHKnY(>' );
define( 'LOGGED_IN_SALT',    '|y9&JiX[(_6[c;4J=sM9o80Ya_SS1H6d1nC-LL%:6OWUgsM<~@^1NIQV8d[)Mq)+' );
define( 'NONCE_SALT',        'NAlL._{74/FNn4/Xedy$sRa(XF>n3LYZ5:=f5{t;DnyyL/k4Bv<<e&=gSwtx7!_8' );
define( 'WP_CACHE_KEY_SALT', 'pMNi9`PxTM_*?6G$JVk/;4?Icf)bR3DebFrG:)4IC}Va<Ur=|@u>],J[D#/>D%Z:' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
