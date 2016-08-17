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
define('DB_NAME', 'leeoyote_wordpresse7d');

/** MySQL database username */
define('DB_USER', 'leeoyote_worde7d');

/** MySQL database password */
define('DB_PASSWORD', 'FK2vSJz1cRqu');

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
define('AUTH_KEY', 'ik}r{-sbcJulxO&aXYJW|)t*?_eE[)_SntU]d%?NppcH=rR_GC_xoveRvARJALhyc+ItMM&tCHQ?iIf!De)(ghTcJibq)H{Z_L_M-qfnElKoUjUPBMPoNAbh<m=;m!mF');
define('SECURE_AUTH_KEY', '}e[jsWCGC[ADm)?PX(qr!bc?ba_son$xRe[KYTo_H}T[tQftN)DoNP@TnDHhzTvKctSeFx@A[@TRzRyDq|>pUzc/jHFCqT+t/pLB{bC$]TrhK)|SR;I(/CaBLuyqJiAa');
define('LOGGED_IN_KEY', 'blE^Ozx|bpRlRjd}vn^|YoXPg/}J=RJ+>}x|BmyvS*nupJ{|yjjT}oP/Q;E$ztsP)$=Nqh!lh+o$uqNYhJr!UXJvLEu;?^uBS|MnRgUK?jWn]i[lxXlkBWtEhqwgEt@/');
define('NONCE_KEY', 'r&}_;rOMrGV+Ash;-=ww!aQe&vJ-_O>RYSdPz/I$FvLas}rxJ+!]zJkrx!/i>?I/_GZ?Gmp]]GjouMQ/tZv*SUfQ(ba^&lt$IlsrsdJ|a[K*mqKg_n[b^n(Ez<Hc$f_k');
define('AUTH_SALT', 'Y{llFYGjXEu_QYyd/ox*zo(}Y|X_qz=j[Y>>(!KF|]!DbMOCMl!b?EXAE<w@G&K/q)&=;Qi;cpJ}W*BUoTcY%%-$pi?mzxEisS[mLeZYj<ghI@&P%{I/P;Qfkv!^jE{&');
define('SECURE_AUTH_SALT', '?*{Tpt@Ye}k|*xbKGacH>Dwm_WYL}ftvfQ?}CG?[}>+T|X[t)g+Q=}qBUF[iFH]uCJdD=@?_dA|mTwu%cs&BM*cj!fiwcRIq)Ds>AIda$EwYzcZ%cE_;t)hs|a@slML-');
define('LOGGED_IN_SALT', 'Zbpn&SkfV)]_F+GZ&f]j+EUeuC<B!ulf}O[wNoU^LeW**p[cpCb?Llk]C%G{P}pF}>+O}>?IMFrXLm};g?UoJ%HjS*TRBJ*RIq&XgEf}Sruvib+KbW!!mCTw_Rri$$)G');
define('NONCE_SALT', 'pk[oOIIX&*fioEQkp-sLp?PK/ArH!Hqq}%v@&N[{Rc&gWk/vnvEDqSNUkg}aTfdyGaOrwQx;iIKmdjWJr*Ncx_^r_w+Hb*cBRFXNf?@rnfxo*@oNiB^EVyl/;dNXFG[I');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_xvpe_';

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
