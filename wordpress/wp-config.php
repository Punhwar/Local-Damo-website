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
define( 'DB_NAME', 'lumina' );

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
define( 'AUTH_KEY',         'LQ(]A^~d8g3zh}jq)m6qjO>g>kD*D=WlGAl{OP5/GP1d+vj70=}. AHLdAz9dngz' );
define( 'SECURE_AUTH_KEY',  'sTYwm>p0!Uw?<|I<N?{/X@W48qv=jP[L}=j{XwiomJt3m-gbjOo)qa[duD~oNimS' );
define( 'LOGGED_IN_KEY',    'ZXw*:FsdXz/LI1F^W{{i>qrY2=K|i>-T|+oKDA,wFTJ.[gGY1Sftw7*Vz#G.t=.k' );
define( 'NONCE_KEY',        'yi5BdJ4NLv;.S`D7D!`OjrolLEM@#7)`~|S5NA|++SO_;,Z^HP96fI,$+fh+SP==' );
define( 'AUTH_SALT',        'i5GP8=wAs2k[k]FAZ3V?Kp;dm|lo7j/itd#IhIZISnoB#hsB[0M^404G)b>Nt)8R' );
define( 'SECURE_AUTH_SALT', ')%5tgzWLQ~->[yiSY]_Oi{_@pO<z7Sf55ZZ8y#o$nfcTF}tQ VGi9]-.qa.`Cm[F' );
define( 'LOGGED_IN_SALT',   '8t V:syw/6ArxO=| ;Y# XC<yz(xwTK:fAG} 0EZVd/afp*vrYsbzbGF3d{akl~R' );
define( 'NONCE_SALT',       'Sw3v`W(5MPBg Dr$vwMQMyjyd2x #Y181}H6_e-fO$AAjF5YUfy^862duU8a.9@?' );

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
