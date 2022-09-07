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
define( 'DB_NAME', 'e-commerce website' );

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
define( 'AUTH_KEY',         'ENxN7G p6R{,j3^4)i(97Y;h`cozvlup:vV)**_CBCYRHx81}.8N5%F[,g[RCxh@' );
define( 'SECURE_AUTH_KEY',  '{JFN^=|;Lnuze>>~i.!7$HjsS+jjh!,jKx[US5xtq@wwjk!(}Sz70&*u`d%UfJPL' );
define( 'LOGGED_IN_KEY',    '| ](.K@CWW+9=L]jZ[>9#*{GK}C(LhV[4Ds S %6sXp~tQSTAzArltxGC9pZa#mk' );
define( 'NONCE_KEY',        '{hf%`W2gV7iSD[(Sf8g+|G]CiQtH6So-4*S7fd9nT(_Y,:>7<25ca*4,er:A9F4I' );
define( 'AUTH_SALT',        '^,+&]enIG^$ze9]%rmjEkHR1M]T2)|nw3D,jx1Xw!kE-fv^w-xE/W8Lx//{$fC1|' );
define( 'SECURE_AUTH_SALT', '*<x3<JCJnAr1+GVGh&H-?MBN| *2p04_=w>e.W]`{%[yRV`7 UC!ZScXUqsw ),=' );
define( 'LOGGED_IN_SALT',   '<O;1!p^I{FKFyD{qE7g!g~O=CijubcjT=y$UGII_~AT1PNGMM?MxH7!_l$;^xiVx' );
define( 'NONCE_SALT',       'iRJ9/Vxb}Y)g=QC $0>n ,&lXtUUyxJ>qF2@>VysL$#HC,.nHcb4piSz5Q&:03rv' );

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
