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
define( 'DB_NAME', 'manuele1_gameDB' );

/** MySQL database username */
define( 'DB_USER', 'manuele1_gameUSR' );

/** MySQL database password */
define( 'DB_PASSWORD', 'a2O2Qb?uH!ZQ' );

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
define( 'AUTH_KEY',         '}t!zjc:PiO#4|g3{uAuc2HYV8*W2y_@?D(s^d$n#<678_vBoijdL<2#`uo^sNJQ;' );
define( 'SECURE_AUTH_KEY',  'DV.84H|qizq+fwXi|Z{rtu#vyH<QJ7ax,dR-U;5M*0br L%I&Sz.T]rn.%h5/8FP' );
define( 'LOGGED_IN_KEY',    '|iKuvX&0?pT i>#=t~L:Vxx[:wc,mF]J-?!me3FCCXd~dt/z;M-)=W{uvtML<BNx' );
define( 'NONCE_KEY',        '}s{N L71/C>H^r13[tZt*VZ-RXzRgxgv+jiZm6m~2}UKs&YaOk#z&o4]W2N=yfFW' );
define( 'AUTH_SALT',        'SK,H<nLrG46F.AB@]?dUz9,gajzne<ZO(( fp,NBp.^T_Mn*P`$6~J3tWb6&G1A ' );
define( 'SECURE_AUTH_SALT', '4f4 ]K5kXmj~OTAC5bNvu96OiE[:(W%H!?di#J-riljL-U#u<Xr{w]w6ec|eWF`b' );
define( 'LOGGED_IN_SALT',   'cYZRudu)wA#M,P.!2?U/L9&Q @-v[1kjk3x/o&f]C=)30#<+1>%Y1P-n<rI&Zbt_' );
define( 'NONCE_SALT',       '~ I.t,XE_I_2MOh_W0/j=<5$%iU!m!</-#6;w@rieL*# O#J<USwKx*8dp4;`7PF' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
