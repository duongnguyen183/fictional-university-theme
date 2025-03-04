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
define( 'AUTH_KEY',          'h?I|k[ zEA$rs<^!u|bWLKk>zth/SGBNsggLM<,xVds;,h$5aAa,;jMuQ!irwPsu' );
define( 'SECURE_AUTH_KEY',   'vf.+C*TxR05X-;E#S%h0UF6Z:MEt}4ai=~9L|k!ikgSGPn.WoWuEZnm_gA_}14QO' );
define( 'LOGGED_IN_KEY',     'kUZ$YR#5-@)~/$(Rq0|czIXu=n<XAA-P42t9v=@Nxe2K`1%If?aE&o5xW}X^Qoq/' );
define( 'NONCE_KEY',         '!>/9>xO0G@dfC<eFACpSXQLw18#%R5N;j!Y1#j8I|939Etpy_MIl5.c]8.TQp;@C' );
define( 'AUTH_SALT',         '[=V;>x9s,=i>AAZIXL()IAo&UzGj5>[m^^Y~=<s+9}I[=T>UbU(2dnXI-O?9k$5{' );
define( 'SECURE_AUTH_SALT',  ',zj>GatI}L^HqizM5aJk?3*fHef>rzK:DoQ^ 8|caR`?HcZc;#.Oyo=n/Rb$ 0F|' );
define( 'LOGGED_IN_SALT',    'd9hagi$^s!>mL;32Z~|.vl*|JZ^JTAYC~.)TD+d8W%)pZ<&JFh(BCB3Gb=GWyX R' );
define( 'NONCE_SALT',        'T>mV*?N7lC77YuxCMt]4b1&,]m[emecH*mtH}~z%Aa(Ur2xoRFX|0@3FRj6HrIr>' );
define( 'WP_CACHE_KEY_SALT', 'pP<LGnl-)b9WR9h-{v^;^slu+epB=j.&ZX=Dr<81p!gpG??&S;[17wFFGj7l-,?*' );


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
