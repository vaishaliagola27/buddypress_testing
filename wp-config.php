<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bptesting_com');

/** MySQL database username */
define('DB_USER', 'bptesting_com');

/** MySQL database password */
define('DB_PASSWORD', 'haREiXPmw1bIg7C');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '#>O~n9_i1&-Mk?+$JQR5?0m-[F-52hrMQfph],!>TKHQx%9V1O &kfdWC|* fv8Z');
define('SECURE_AUTH_KEY',  'Z|=%f}AR-vs?#y 0$ReUj<+&qsA]Wz.dA~h&EZhSAGN g,|HxL-:o>VQ:lYg-+R0');
define('LOGGED_IN_KEY',    ' 1)[!5Jt~H;,-6nu@VE$q;;tf? f-=(ZjpY{YCEnpg~=cZ}Z!hv4YB}(-HD*PJAs');
define('NONCE_KEY',        'MB .rED=VYR8#S`!5m>O];U^%d=hlg$2960+Z83?E=TK.[aM`ink-`Q_gZyRamEu');
define('AUTH_SALT',        'hD_$l3#LzlgDrv4u5yNr,bpB`|-6>CyMqYYhnb$]~;XaGpC/e@{3Xh`amJ?sEebn');
define('SECURE_AUTH_SALT', ',expB0`(Fh)GB7H.?*@b_Up=A}mqb*X6bT|D.jg=STSuk3hYJtrh6`Nk& +)F-jw');
define('LOGGED_IN_SALT',   '8B~w;HF=u4h1f8lsLb|oV^jr5$Ve$a4vfYry,:%` E-Z<{iKvS+>Z]cz8>P1[TTC');
define('NONCE_SALT',       '~+xNFriO,t*eBKRfZXN XCrR<g;}1>K,&* n9(0042pZ+lkg-}IY(1{id49<EY-+');


$table_prefix = 'wp_';


 

define('WP_DEBUG', false); 



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
