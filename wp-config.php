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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kellymanni' );

/** MySQL database username */
define( 'DB_USER', 'luthfi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Suzuran354_' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '8sB.M$?BwkldaS]0ECKhO}ZSwRnV4/h!p1-V+!NH<ck,bCj,(~n>lTfGp+60:V6(' );
define( 'SECURE_AUTH_KEY',  '%^gBAB~.Tn)Cq$%~i:*~)vP`,pR;ja^TxCON^YnLTxoutxCQqXJ5z^FUe.eQX Q(' );
define( 'LOGGED_IN_KEY',    ';3dirw,5?x]MU(qu7m{h^DK%xIH2njFe>Fy:ilMk:jx9NFYL}LM=+)*}|#`KF{r@' );
define( 'NONCE_KEY',        '{9F=r/,nrMC .tL~Lhq]i3I/?xoV+`Hyqo[}jpY#^[:vu|y+J,vAmV4DDvj[r_L#' );
define( 'AUTH_SALT',        'L-b-F#t(m#6W>]Vq0,#GZYP$+/P%d<{3kg 08]H1|i+.xK>-}S=fc,qjpC7bb2wI' );
define( 'SECURE_AUTH_SALT', '|Y/DdvxnCrF1VoOYk6<PNI~S*O7Wqic)K)h=SV)$2!!*9eSWt$8s#Pb#oT70`?W5' );
define( 'LOGGED_IN_SALT',   '}]aS/K! ,<ovS{JAJ:[%b9CbF!0+^FaK9![C>TnpxBoFqDS#:})0yQSGiM-Fs{ec' );
define( 'NONCE_SALT',       'JB]kV6f?A@ki{|Dw6T?2AD-=u2iJLN`FSQ._/pg aan;mA?.7534fW$B]:[jL)9r' );

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
