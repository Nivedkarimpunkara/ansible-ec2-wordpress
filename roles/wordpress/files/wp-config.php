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
define('DB_USER', 'lionel');

/** MySQL database password */
define('DB_PASSWORD', 'messi');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'g?I(bg#TFSfYPy{spQFK$=>$y*JC`JI]1gNf)M@J{[FM0x|H1nta?U)WGNOU{>Zv');
define('SECURE_AUTH_KEY',  'Krj.J;lnB*umj%TwmVmz.-G7c}k8tJ;vOnt Ol}-j<Hw)g,/*Gu=M%~B>JX0A(VY');
define('LOGGED_IN_KEY',    '@f%>K&R!g5`,f9|Fb8}jiXKi:n-kHYtAx3B65C(/_dxc^Zk,:Ob_f=]Xf=gKKHJd');
define('NONCE_KEY',        'Cnzr/h+KT1WO1sM>s`uDHPR@C7gp7/=.p2Ns Du^Zl~t>$z%4fdxp)j.F$[@t~#=');
define('AUTH_SALT',        '5P1{$~8B!ij}r]?;B+9T,ox$P<;gE>Gjgd:3*nG;7v>MjIV 4Vlv=)JNczT:S`hw');
define('SECURE_AUTH_SALT', 'B}Cr]%oq12-kbHb8{c-P,SE?=14Yi[hYH^QH@EeMn;Hw:CLxZe%1MD;.^XZc.u81');
define('LOGGED_IN_SALT',   'lV+G6P:YW[X}}Aj:GzgJx`PKXbj@#HzaC2,?Y5Tl1g=/|Mg[UDc(bk5~mR/-T@>X');
define('NONCE_SALT',       '$?`Voc70$kG@X$,Bn^kotgP`6v*u_:#^Rvjd`Y),wt6G4q-E7m=T&u28dw]RYIEA');

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