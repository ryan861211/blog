<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', '');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'k^rN`E>@gAeMw[V]V5D_LG7g@g7Hb;4i|U{C(^:ZpGobbrF}}M}0icbpAr*|5A*+');
define('SECURE_AUTH_KEY',  'Vu~kz?nyvg/UNP!L*{%v9/~c2G4!|6eh8Eg%5%gQ@ifxWiSKb6<&pgDoyY^><<0c');
define('LOGGED_IN_KEY',    '}jDp<eMJ!,$Eg*YS2GH2k.l`GD/DTD_RG`t%z37oB:n-OT#=KL{o/e]|g{{2xR1A');
define('NONCE_KEY',        'h[T.m>v+;l{6hN7;ce6?m6h<Exu9.!Es]Dh,<RC$]Yw)!HnP.aUvfIU+M5(1aznB');
define('AUTH_SALT',        '!W{3:-Sbc#XtTj(Hl!ecu`[-6AoX4uWXhU^2=Y@2uR6VIvu:g#y:8E,dyU~uhb:s');
define('SECURE_AUTH_SALT', 'dTN(-Bs?|#1)x@]T:t(sjy9Jxm aQ_$Y>T+OKQrSn*8ZT&eQ27r/qW69c!FLDpMM');
define('LOGGED_IN_SALT',   'Ud=ra?`2[mvo=>`q)N_$&nKk%&?KbeV*1%0TfHpL._=A%*s*T;8o!(.[(Q`m[ X<');
define('NONCE_SALT',       'todfS8ahsQ/xxPA2`)R q*dC^k5.i{Ia8.AkNY)s_HLy7HxU#KTV9ks62bM_!,j.');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
