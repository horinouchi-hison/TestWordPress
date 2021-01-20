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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '(U9}SPC30QqFaW $YibVwtwXm68nO}B0)Q;ea!NfE/KR*p]1j(NZIVD#MmI^~5w/' );
define( 'SECURE_AUTH_KEY',  '31i/GrN=9YE~IU-Wa]>z*+gYtDm`9;>a,Qh.3qDC1EnPj0zpKRUhdZrgc(i+rufn' );
define( 'LOGGED_IN_KEY',    'p2f7Z}k7+OHDSFc9MV4{iJePXkG&:X%QtOevU9elM|iop>atE-EIYCV5B?qo7~Hg' );
define( 'NONCE_KEY',        'C%p~{_vz>W`~Pao`_!UEFuF#p+@}v{Cs55YmX{mj|Sy&I>@6nhS_:DodCM&=mX#|' );
define( 'AUTH_SALT',        '4Su,7!WOE;*S?%bi9Sj,!IyttsH(Q.RxY@Nr}n`_ch,VzQr7@8xYSs/%2@8OEm1k' );
define( 'SECURE_AUTH_SALT', '1(|I&8RG S!$]Y^n2#|et#= 3Zw kvwO6%+QI,OoHi9@`Rrp5=uo[/~p!ZHd~AWl' );
define( 'LOGGED_IN_SALT',   'T^65*xehqX>v9^7?p;DR{dH>Cv9U9Uwb+5KDfUge2~7eJjqK|)]K`~eiPk{voR7c' );
define( 'NONCE_SALT',       'OM&V${!`=^wjib#SMsbW&N=C]LJ-e:q#f;~4_f-~Y;f?90!H84gBm)Xkk[{nRASQ' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
