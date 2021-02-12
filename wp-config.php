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
define( 'DB_NAME', 'codonist_db' );

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
define( 'AUTH_KEY',         '[mn:c<-FkeB8qz{p>Y?D,^9XPPt3#cDRrqx:sl,AHU&_]`-pFXR_*1J6E5Jr^s2K' );
define( 'SECURE_AUTH_KEY',  'w93P-4k(u$L$Ah|2AI5#8)[#6NDwM)$!Ph+M9u=P#@A*m1|.k2@_1gQZ~i|?.?>r' );
define( 'LOGGED_IN_KEY',    'L:{[|j}XvAk3AU^|=I<ho(~QAtg}*(-nUD{TX Fs&::/>m89E=Nj8MG!P^vUnxA6' );
define( 'NONCE_KEY',        ':+bP;fTPTgc8_O|^@z_n/|[[Rihor 7Tgu4Ct:HyB56_E-w9g  K9nDy? RV^xWb' );
define( 'AUTH_SALT',        '{29Pg:b,?N#kq&-Vh80dM6#_ih.vQQN%cw|1R/dn NnsY8De$JiRoN}ZlU}~#&0s' );
define( 'SECURE_AUTH_SALT', 'Rw&U5Z4R;?RW&M:uXrEV;v%38p5=aW:J(R}XbZD,)p?$@t2Ntz2,Dlu)}L<-[QPK' );
define( 'LOGGED_IN_SALT',   ']w*Gr6XCwIDNPgaHJ}ZxIN1B*orBQh2R>*9.a.bpY2SG{5{v!rVPu,]`3[X [@$J' );
define( 'NONCE_SALT',       '0Nc6h&TA4ingJyFYZ>Iv)K{J/ixDlz%ay=6AF;5eVblgQRzR=;R6m#^Hfz$:$g,o' );

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
