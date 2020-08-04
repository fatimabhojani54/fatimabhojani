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
define( 'DB_NAME', 'divi-themes' );

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
define( 'AUTH_KEY',         '(qMEIpVun40bWVrfCM*L!wmhFP18FIB:OG=UXiE0*>/*B$m3te2b(JcNl:N:T=8b' );
define( 'SECURE_AUTH_KEY',  '+|dUbz$-7DneXl@oabni!O_7^uI;|8y%`}`i@2v!64#[RsTZK6Fv{%EiiM~8+=z*' );
define( 'LOGGED_IN_KEY',    '.M)Djg63{8=Y&XhXGU6~yf+xf5c-DX6XSQdr}[hE]8k]+7n/ $5b n+L0kKeb77s' );
define( 'NONCE_KEY',        'n2B.L.8`t,1*tN#A1;1*F!Kyr/-/C*9A$)^l{FE4u%P4[}-2S<p8^0bl6$uq7=6f' );
define( 'AUTH_SALT',        'LH#{ZXy39+{LSp;6/Lv>c?g.LPz}9j%f7=okqUkZ-k1P7sx7&<14Hp,:&c(_P[S5' );
define( 'SECURE_AUTH_SALT', '%B0D/$|nU?<!qxS,PqauvGm,AS_:|q^#1CST*,Nq{m,s$enBeH8 cm2?8lK7vFo9' );
define( 'LOGGED_IN_SALT',   'JxqXgy$P*/x1?3FqYOr0}Q>(+1KkD=~.+$Kqv(sjPp=SMU3-dH)l;)Y&%|0Yd?S2' );
define( 'NONCE_SALT',       'iS%MQ=M=n1lXjL-`a}*pV7./qX6b2&HY1_TTcApF=B`fMo]zOlE%pW#zscJJmYBP' );

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
