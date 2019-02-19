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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'wordpresspass');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DeNY=#qTN`@3(=L8Yjk6>Clho`de[>n+)|[ }D|1w|U*<ZAK0+xZR_kqJj:73};0');
define('SECURE_AUTH_KEY',  'zwWSDR)xK[FGBE|r c/J%X}9lBDV?_I<4_[kST*C3-w%^l!YtgRT.AnFt,<)nF|}');
define('LOGGED_IN_KEY',    'RsT)eMb`<vkX]/K=swSt~E@aQD!Gmh{:o()Hi>5s]mYZ:&n|YiwK~P`aTAR,LIlm');
define('NONCE_KEY',        '5f|_ST`?t WJVY8F^2h2NL)~,Lp3m]Glyru-#IOtq|It`0fmX).^*fi37:5ws :P');
define('AUTH_SALT',        'u,?iQ9 ,l?@Q3 py~^oZ^5$Yf[EvIIAy+ Z2ebsW(^.~=c!&vEqF9<E|LE9ssTmO');
define('SECURE_AUTH_SALT', 'L+jo>@5]Wv;m1j/J>+$yPu!1|%%Bv(:kMFoh!]Jc}U(KT97<?wi}oC2Bbw}h]7,]');
define('LOGGED_IN_SALT',   'g|pbPz0(FdqMRrm7^2TX 0^UxQ*!-9?q=fZ^;Z>%hQ>ul;(Y|n_9;uKp)(6zuR!C');
define('NONCE_SALT',       's/x(4-MD.bs>N#6Z5-G^WsUs*`d+(n} vBTkGoXcd]&!kL2)lD tLbD7==zl6JDJ');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
