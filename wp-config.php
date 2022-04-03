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
define( 'DB_NAME', 'EmQuPeC5ZibSjt' );

/** MySQL database username */
define( 'DB_USER', 'EmQuPeC5ZibSjt' );

/** MySQL database password */
define( 'DB_PASSWORD', '8Jo4sNQPNf03ao' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ' ?B&_=f/aF/=Z-Xlam<mroLGA`9s[<!<aKXMXyz6:WeUfP>AEv F+;_/Gmy$mQzw' );
define( 'SECURE_AUTH_KEY',   '`-F)L}pUv/+i4S=b=`}^)-vv~P*q;&Rq+[kJ;V6cDuxF(^RPe4bWi$tsUXw|8WC)' );
define( 'LOGGED_IN_KEY',     'aFnX 1_Tt[Y3efqhN98NRACpun@d^Q~(7?5Bmv5r#sDad<*]6e5]5vJ.5vu^Re]2' );
define( 'NONCE_KEY',         '_-w^!KyEeRU+<IC$.kI]#M+p<2AyxK`nm1AtxyF=nP(l(_aKG;6__(Y,+4?oo&On' );
define( 'AUTH_SALT',         'D0C(s@D~~o AI5JbbhF/$nFZ5;OP3Y0:bRZ[qhEbCMk:NvX>1$cNLY@jq{U30x*a' );
define( 'SECURE_AUTH_SALT',  'EX=R_FO0E]i9t-n.b~Rhu~=_GNmJkq#L]$]loB9!zeO+`0-c2@!}YVk=*uj;fES4' );
define( 'LOGGED_IN_SALT',    'zuWV^EFpXYPb )UBLO}*YD4Ur;cf5U-pu@~wUA!`/G~}1;?`s.P]7{=UKzTdqBD%' );
define( 'NONCE_SALT',        '*Y@h_Fz@CE:i=&w8-k]CUHW/[6&}Ia4Qx=SOJ}$=n0+5IMC/7}*@&xu+sP^Ekbt[' );
define( 'WP_CACHE_KEY_SALT', 'I/zwQ`93Q^=PC<~F$-av,{k}P&?c?&/z&HPU~{VOGB5a@T~,!U6lF}Z$uRm[pXQw' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
