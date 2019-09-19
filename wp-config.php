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

define('FS_METHOD','direct');
define('DB_NAME', 'wpdb');

/** MySQL database username */
define('DB_USER', 'wpdb');

/** MySQL database password */
define('DB_PASSWORD', 'q1w2e3r4t5y6');

/** MySQL hostname */
define('DB_HOST', 'wpdb.clajq1pjrnlq.us-east-1.rds.amazonaws.com');

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
define('AUTH_KEY',         '}nV~y{#IR`!%CTt{bC$nZv=3*5tt:#4 @-UsfA0u&|&CB6SI:wRVoV8*Hu&<.5d0');
define('SECURE_AUTH_KEY',  '3LcBW0YK]i(J|#n&b9|!%=bx4;V68ms^9bXSZO!7PzqM&2b/!kC?f1FR9fWxi,j6');
define('LOGGED_IN_KEY',    'VN84.#Ba(t;feje>(n(3e8I0|u0[g}FEgs=d4=R(8aPQV1 WRIQ$km#7eN!yMt~s');
define('NONCE_KEY',        '38t{m!&@gLz5l)JR=:RxTgIjj7+Z,fI39@kD*_O+n:BqdAB3c<cJmkiN&(^70pGh');
define('AUTH_SALT',        ')Rj)aQhDNc )O@Wb-p}@8UKu?WN-~Cz%JJ>#*MAV~+G8_sN./p~:jCFMnU+~]`t3');
define('SECURE_AUTH_SALT', 'gq=[IrBi#}>d5B-1G6vT8,CDoxBvpucoa=$TL.!&9o]r(k?By=@~MxvV!|7&#SwR');
define('LOGGED_IN_SALT',   '`y!@Dpw?DukQ>xnzJsQ^iRn),KG7!iW95vN%!W-E{6w0#:#0zxky(zu3mPbRx[):');
define('NONCE_SALT',       'S;SqjW3Oh!0]bQca{$Wkx3UySsn<d7G`R/Q@.~BsY]A,%vMa%.k~IP>z6C#!?nKG');

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

