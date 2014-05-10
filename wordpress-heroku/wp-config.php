<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
define('AUTH_KEY',         'G~:@=h]ajiK/NFX2h=yScbFforF|<?D;R5n<vy%.d4TDN+*|HkdB*yWrq]Y$Y=pu');
define('SECURE_AUTH_KEY',  '47Z_zg^6#IJA5LH> bc4-$+&~:)>$O{3BSrt)*+9*B-Eh09Y?@C_m5Px!)_jB@V9');
define('LOGGED_IN_KEY',    '8rL>(X5:OSL&eeRdQT&E-PD#bKD*yGODd8:j,N`f8@RuUc[._y5(t%[.|FM6`1]|');
define('NONCE_KEY',        'q[#Y*+*h1?r>}X5+ E{#g,KOeoTqSeoJT+YJP|cB}_`8KCX4+?|hat/>!ltD8w5<');
define('AUTH_SALT',        '4XF($R@ #@dh]4QabZw0haTwl@SN-H!dLlzzzV]J37K;-fm5iaf_*`|Mg9U8p}It');
define('SECURE_AUTH_SALT', '(<s8Nsx/E|+;+M-.)MIa4G,Z|=$h+5vDVt-x--B+}c~dzFZj_cK)QhIzx+uB!W+*');
define('LOGGED_IN_SALT',   'V+z`3c-(du0+<|]278RCO|}mCR!h)|}!| qg$-([OikdnK`BbTgNZ09--N;|Ve%c');
define('NONCE_SALT',       'p(S*^b-A<O|EyA4}Yb*-qh[-{|+c>s_^u<UOF/E$D|r}$!q|deR+Zr6Z:5tc*Tqz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
