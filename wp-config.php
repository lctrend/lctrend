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
define( 'DB_NAME', "bd" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',          '94M#Kh5%Nwh|-Ip/qmX_RgoQ,u,z<Ntf;3K{3q hym&L+O)`^fhA)=;aCoPf2hNv' );
define( 'SECURE_AUTH_KEY',   'cT$!72aP1{.pM5U>we8a_4hR-MA;x)5MsA)1AS`!o_ax0SKe Of~SC+7_*Xr8G?f' );
define( 'LOGGED_IN_KEY',     'L{R:xB%v~G(OtUOzF3r~I!?Jfzz+|l<hXM,HoDww=A61M]Ip.`BKkbuhF_iAEfZn' );
define( 'NONCE_KEY',         'Oy6(&|:b% ,!PJzs0ZOAA-{fHBpo.B4#fpAtk;&ZS%n,dJ|<&<?ZhqoD]b;omvFB' );
define( 'AUTH_SALT',         'B$dBHh`!8{3*Tn,2T<Y])MIba3*.{vo*?@}3G~Q-DB }/<uD%u6Fc]{E5zN1S P&' );
define( 'SECURE_AUTH_SALT',  ',X2QVxHR&U` e;!!9reUt%h|aOP$0`(Oz`Ub}dI<!H(ck[st!Q%`FJLNIL4:m?Fh' );
define( 'LOGGED_IN_SALT',    '<z7TSI}?viza7Oc?+9+sst *YWxuW)@$bHQAvdJN.CdzIr&atw3zIJ$/YpCv5eGA' );
define( 'NONCE_SALT',        'Tg1<xK^eQ@eoR.U>4@N*R?3o1O8#)bgN^yGxNM`!vdHQ}x8HurVq6k?)rHh4@X8z' );
define( 'WP_CACHE_KEY_SALT', '8mt90PO&JZ]^&Z[Lur/_&39X;}/vNVN$@d6(%Z0]ZWVcKE$Im)K0XM.W4W|MLF|`' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mqa_';


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

define( 'WP_SITEURL', 'http://localhost/wordpress/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
