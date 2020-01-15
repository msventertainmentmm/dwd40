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
define( 'DB_NAME', 'dwd40_db' );

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
define( 'AUTH_KEY',         'RaRsK~W0G!{R&*E=/DdW]-zmsluDwSqFK[ 1U>25:&m!]1KtK0#D/scL5Bnqrq[s' );
define( 'SECURE_AUTH_KEY',  '}`,JL-^aQ.NTa{>rdaTZn[S ~#F%(v/$!7=`=QBtlf2iV)Y-2{B7UcK$}&RqLl G' );
define( 'LOGGED_IN_KEY',    'p/-xF[>H)6L5_+>Fhzu:NxOv-`j D2+OFT/_yCMEt[c~^ZQF+M#sDj{-d3zXovYh' );
define( 'NONCE_KEY',        '4PB^|x<kp$4GdCZGWv@$]N(1tfO9Fto%{K]RR]!hU,5=jlJm9K5TkG<|SKSID(+,' );
define( 'AUTH_SALT',        '<$9*{7%o2o%boKLem.@aYdNJnUjOw0[G%I&j1;SB71?wavsnGl3W_GZC`YB_zVx|' );
define( 'SECURE_AUTH_SALT', '8U+{^Q7hdlC*702$%V1XrLNA7<ffDnR5ET<^Ka%v`&QNtC[[fDK$S{wwk:PK^O}B' );
define( 'LOGGED_IN_SALT',   'wDw%Oa2OMMP%;tOryCSp,bvxp$p^:ee3s3P^r:^wSyQ_eq?+@5_ik]/iiS!.uxmu' );
define( 'NONCE_SALT',       'r K:F4$Eu3tGZP?;a/24sV+i1{i@_fhgJ2uKH(];2&+w>$,xny1(hY5jddlKd tM' );

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
