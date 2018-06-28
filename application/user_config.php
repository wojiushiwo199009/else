<?php 
// 前缀
define('SITE_PREFIX','');
//当前文件所在目录路�?
define('W_BASE_URL_PATH','http://www.bigdata001.com/');
define('WB_AKEY',			'12345');

///  SECRET_KEY
define('IS_OPEN_WB_SKEY', 	0);
define('WB_SKEY', 			'nit2014');
define('WB_CHECKFILE_SIZE', 336);
/// 是否启用验证码，在SAE下验证码实现不完美，需关闭 设置为　０　或�?�?
define('IS_USE_CAPTCHA',	'1');
///产品序列�? liu
define('AUTH_KEY',	'12345678');

//----------------------------------------------------------------------
/// DB　相关的配�?
define('DB_PORT',		'3306');
 
define('DB_HOST',		'localhost');//数据库地址
define('DB_HOST_2',		DB_HOST);

define('DB_USER',		'root'); //数据库账�?
define('DB_PASSWD',		'root'); //数据库密�?
define('DB_CHARSET',	'utf8');
define('DB_PREFIX',		'xsmart_');
define('DB_NAME',		'study'); //数据库表�?
///----------------邮件@@liu
		define('SYS_SMTP_HOST', 'smtp.126.com');
		define('SYS_SMTP_FROM', 'bigdata001bak@126.com');
		define('SYS_SMTP_TITLE', 'SNS');
		define('SYS_SMTP_USER', 'bigdata001bak');
		define('SYS_SMTP_PASS', '4296174218');
		define('SYS_SMTP_PORT', '25');
//memcached 
define('MC_HOST', 			'');
//纯静态缓存时�?单位 : �?
define('HTML_TIME', 		3600);
// QQ登录配置
define('QQ_APPID', 			'101225896');
define('QQ_APPKEY', 		'af786d2372a8f39084f7febf1185c73c');
define('QQ_CALLBACK', 		'http://'.$_SERVER['SERVER_NAME'].'/index.php?m=qqConnect.callback');
define('QQ_SCOPE', 			'get_user_info');
// 微信登录配置
define('WX_APPID', 			'wx3bc44d622ae5911b');
define('WX_APPSECRET', 		'31f1d13c87634bde4db8f30bafd2c85b');

//---------------------------------------------------------------------
/// 全局配置变量
//----------------------------------------


//编辑器相关配�?
//EDITOR_FILE 相对于根目录，不需�?/"开�?
define('EDITOR_FILE','ueditor');
//设置是否裁切图片
//define('EDITOR_CUTIMG',true);
$GLOBALS['EDITOR_CUTIMG'] = true;
//设置裁切尺寸
//define('EDITOR_IMG_SIZE',660);
$GLOBALS["EDITOR_IMG_SIZE"] = 660;

//编辑器允许的最大边�?  一般不需要改
$GLOBALS["EDITOR_MAX_WIDTH_FLAG"] = true;
$GLOBALS["EDITOR_MAX_WIDTH"] = 800;



//会员中心的配�?
/// 初始化可通过 V('-:****'); 访问的部分变�?

//群组是否需要审�?  1是不需要审�?0是需要审�?
define('GROUP_AUDIT','1');

$cfg = array();
//应用开启情�?
$GLOBALS[V_CFG_GLOBAL_NAME]['appmode']	= array(
	'member'=>0,//是否开启会员系�?
	'member_check'=>0,//是否开启会员审�?
	'member_active'=>0,//是否开启会员邮件激�?
	'permit'=>0,//是否开启权限系�?
	'message'=>0,//是否启用私信功能，FALSE：不启用；TRUE：启�?
	'profile'=>0,//是否启用个人资料功能，FALSE：不启用；TRUE：启�?
	'profile_face'=>0,//是否启用修改头像功能，FALSE：不启用；TRUE：启�?
	'member_sina'=>0,//是否启新浪微博账号登陆功能，FALSE：不启用；TRUE：启�?
	'language'=>0,//是否开启语言包，FALSE：不启用；TRUE：启�?
	
	
);


//swfUpload相关配置参数
define('UPLOAD_IMG','*.jpg;*.jpeg;*.gif;*.png;*.bmp;*.pdf;*.rar');
define('UPLOAD_FILE','*.doc;*.docx;*.ppt,*.pptx;*.rar;*.zip');
//$inputid 	为保存文件地址文本�?
//$maxsize	为上传大�?单位M
//$type 	上传类型  图片img 文件file
//$num		为允许同时上传个�?
//$uploadnum为第几个上传按钮
//使用说明 swfUpload::showUpload($inputid="imgurl",$maxsize=1,$type="img",$num=1,$uploadnum=1)


//----------------------------------------------------------------------
//适配器文件路径及扩展�?
//----------------------------------------------------------------------
///  初始化全局数据
//$GLOBALS[V_GLOBAL_NAME]['Table'] 	= array();

$GLOBALS[V_GLOBAL_NAME] = array();
$GLOBALS[V_GLOBAL_NAME]['TPL'] 	= array();
$GLOBALS[V_GLOBAL_NAME]['LANG'] = array();
$GLOBALS[V_GLOBAL_NAME]['PAGELETS'] = array();
$GLOBALS[V_GLOBAL_NAME]['STATIC_STORE'] = array();

/// 初始化可通过 V('-:****'); 访问的部分变�?
$GLOBALS[V_CFG_GLOBAL_NAME]['userConfig']	= array();
$GLOBALS[V_CFG_GLOBAL_NAME]['sysConfig']	= array();
$GLOBALS[V_CFG_GLOBAL_NAME]['session']		= array();
$GLOBALS[V_CFG_GLOBAL_NAME]['siteInfo']		= array('site_name'=>'Nosite', 'site_uid'=>'','site_uname'=>'11111','reg_url'=>'', 'login_url'=>'');

/// 会员中心页头设置
//与sys_config 表结合来�?
define('HEADER_MODEL_SYSCONFIG', 	'wb_header_model');
define('HEADER_HTMLCODE_SYSCONFIG', 'wb_header_htmlcode');


/// SERVER　环境 类型 目前只有两种 common (一般的通用环境), sae　(sina SAE　环境)
define('XWB_SERVER_ENV_TYPE',	'common');
/// 标识Xsmart是否要覆盖安�? 默认�?,不覆盖安�? 2是覆盖安�?
define('XWB_INSTALL_COVER',		'1');
/// MC　KEY　的前缀
define('MC_PREFIX',			'mc_');
//----------------------------------------------------------------------
/// editor		适配器选择配置  uEditor
define('EDITOR_ADAPTER',		'uEditor');


/// HTTP		适配器选择配置  fsockopen curl
define('HTTP_ADAPTER',		'fsockopen');
/// CACHE 		适配器选择配置 file serialize memcache
define('CACHE_ADAPTER',		'file');
/// ACCOUNT		适配器选择配置
define('ACCOUNT_ADAPTER',	'xauthCookie');
/// SMTP		适配器选择配置
define('SMTP_ADAPTER',		'smtp');
/// DB			适配器选择配置
define('DB_ADAPTER',		'mysql');
///　上传适配�?
define('UPLOAD_ADAPTER',	'file');
/// FILE		适配器选择配置
define('FILE_ADAPTER',		'file');
/// auth			适配器选择配置
define('AUTH_ADAPTER',		'sae');
//图片处理
define('IMAGE_ADAPTER', 	'gd');
//session存储	适配器选择配置 可选�?default|db|mc
define('SESSION_ADAPTER', 'default');

//mail处理
define('MAIL_ADAPTER',		'sae');
//log处理
define('LOG_ADAPTER',		'file');
/// MC �?HOST 配置
//-----------------------------------------------------------
/// Xsmart模板配置
define('PAGE_TYPE_SYSCONFIG', 	'wb_page_type');
define('PAGE_TYPE_DEFAULT', 	'1');
/// 两栏不显示的后台
$cfg['adminNotShowNav'][1] = array(
		'mgr/setting.header' => 1
	);
/// 三栏不显示的后台
$cfg['adminNotShowNav'][2] = array(
		'mgr/skin' 						=> 1,
		'mgr/setting.getlink.header'	=> 1,
		'mgr/ad' 						=> 1
	);

//----------------------------------------------------------------------
/// api签名认证key
define('API_KEY',			'');
/// api　过期时间
define('API_TIMESTAMP',		60 * 10);
//----------------------------------------------------------------------
/// 最大的上传大小，单位　M
define('MAX_UPLOAD_FILE_SIZE',	'2');
define('UPLOAD_FILE_EXT',	'jpg,png,');

//----------------------------------------------------------------------
///  插件通讯的api签名认证key
define('XPLUGIN_API_KEY', '');
///  插件通讯的api请求过期时间
define('XPLUGIN_API_TIMESTAMP', 600);
/// 内容输出开关配置用于故障恢复：　true (全部开�?,false (全部关闭),'111111111'($str[$type-1]的值，决定类型�?type的内容输出是否关�?
define("WEIBO_SHOW_CACHE_SWITCH",	TRUE);

///  日志等级, 0:不记录任何错�?1:记录错误日志;2:错误+警告;
// 3:info等级,只有在info等级和url里带�?_loginfo=1 同时存在时，才会记录, 4:info等级的都显示
define('LOG_LEVEL', 2);
define('LOG_LEVEL_ERROR', 	'error');
define('LOG_LEVEL_WARNING', 'warning');
define('LOG_LEVEL_INFO', 	'info');
///  日志, DB、IO、MC、API长操作时�? 以秒为单�?
define('LOG_DB_WARNING_TIME', 0.5);
define('LOG_IO_WARNING_TIME', 0.5);
define('LOG_MC_WARNING_TIME', 0.5);
define('LOG_API_WARNING_TIME', 1);



//----------------------------------------------------------------------
/// 适配器选择�?
$cfg['adapter'] = array(
	'io'		=> FILE_ADAPTER,
	'db'		=> DB_ADAPTER,
	'http'		=> HTTP_ADAPTER,
	'cache'		=> CACHE_ADAPTER,
	'mailer'	=> SMTP_ADAPTER,
	'account'	=> ACCOUNT_ADAPTER,
	'upload'	=> UPLOAD_ADAPTER,
	'auth'		=> AUTH_ADAPTER,
	'image' 	=> IMAGE_ADAPTER,
	'mail'		=> MAIL_ADAPTER,
	'log'		=> LOG_ADAPTER,
	'editor'		=> EDITOR_ADAPTER
);
//----------------------------------------------------------------------
/// 适配器初始化数据配置变量
$cfg['adapter_cfg'] = array();
$_adapter = &$cfg['adapter_cfg'];
//----------------------------------------------------------------------
$_adapter['db'] = array();
$_adapter['account']['dzUcenter'] = array(
	'homeUrl'		=>'',
	'home2'			=>''
);

//----------------------------------------------------------------------
$_adapter['db'] = array();
$_adapter['db']['mysql'] = array(
	'default'=>array(
		'host'	 => DB_HOST,
		'port'	 => DB_PORT,
		'user'	 => DB_USER,
		'pwd'	 => DB_PASSWD,
		'charset'=> DB_CHARSET,
		'tbpre'	 => DB_PREFIX,
		'db'	 => DB_NAME,
		'slaves' => array(
				array(
					'host'	 => DB_HOST_2,
					'port'	 => DB_PORT,
					'user'	 => DB_USER,
					'pwd'	 => DB_PASSWD,
					)
			)
	
	),
	'center'=>array(
		'host'	 => 'localhost',
		'port'	 => '3306',
		'user'	 => 'jxgz',
		'pwd'	 => 'zzq955197449',
		'charset'=> 'uft-8',
		'tbpre'	 => 'xsmart_',
		'db'	 => 'center'
	)
);
//---------------------------------------------图片处理---------------------
$_adapter['image'] = array();
$_adapter['image']['sae'] = array();
//---------------------------------------------验证�?--------------------
$_adapter['auth'] = array();
$_adapter['auth']['sae'] = array();
//----------------------------------------------------------------------
$_adapter['upload'] = array();
$_adapter['upload']['upload'] = array();
//----------------------------------------------------------------------
$_adapter['io'] = array();
$_adapter['io']['file'] = array();
$_adapter['io']['ftp']	= array();
//----------------------------------------------------------------------
$_adapter['http'] = array();
$_adapter['http']['curl'] 		= array();
$_adapter['http']['fsockopen'] 	= array();
$_adapter['http']['snoopy'] 	= array();
//----------------------------------------------------------------------
$_adapter['mail'] = array();
$_adapter['mail']['sae']		= array();
//----------------------------------------------------------------------
$_adapter['cache'] = array();
$_adapter['cache']['file'] 				= array(
	'baseDir'=>		P_VAR_CACHE,
	'pathLevel'=>	3,
	'nameLen'=>		2,
	'varName'=>		'__cache_data'
);
$_adapter['cache']['serialize'] 		= array(
	'baseDir'=>		P_VAR_CACHE,
	'pathLevel'=>	3,
	'nameLen'=>		2
);

$_adapter['cache']['xcache'] 			= array();
$_adapter['cache']['memcache'] 			= array(
	'pconnect'=>false,
	'servers'=>	MC_HOST,
	'keyPre'=>	MC_PREFIX
);
$_adapter['cache']['eaccelerator'] 		= array();
//----------------------------------------------------------------------
$_adapter['mail'] = array();
$_adapter['mail']['mail'] 	= array();
$_adapter['mail']['smtp']	= array();
//----------------------------------------------------------------------
/// WB api接口错误状态吗
$cfg['apierrno'] = array('400', '403', '404', '500');
//----------------------------------------------------------------------
define('CSS_PATH',W_BASE_URL_PATH.'statics/css/');
define('JS_PATH',W_BASE_URL_PATH.'statics/js/');
define('IMG_PATH',W_BASE_URL_PATH.'statics/images/');
define('SYS_STYLE','zh-cn');


define('WB_SKIN_BGIMG_UPLOAD_DIR',	'/data/skinbg/');
define('USED_PERSON_DOMAIN',	1);
define('SITE_LANG',			'zh_cn');
//define('WB_UPGRADE_CHK_URL','http://cc.vi163.cn/xsmart/version_update.php?ver=' . WB_VERSION);
define('WB_UPGRADE_CHK_URL','');

define('SITE_SKIN_CSS_PRE',	'skin_');
/// 站点皮肤 CSS 自定义皮肤目�?
define('SITE_SKIN_CSS_CUSTOM',	'skin_define');
/// 站点皮肤  CSS 文件目录名称�?后缀
/// 当用户和系统都没有设�?且不能从预览变量路由中取得CSS皮肤值的时候即为当前�?
define('SITE_SKIN_TYPE',	'default');
/// 站点皮肤  模板目录名称（目录）
define('SITE_SKIN_TPL_DIR',	'1');
/// 预览皮肤时的 变量路由
define('SITE_SKIN_PREV_V',	'R:prev_skin');
/// 皮肤配置文件名称
define('SKIN_CONFIG',		'skinconfig.ini');
/// 皮肤预览图片名称
define('SKIN_PRE_PIC',		'thumbpic.png');

/// 字体目录
define('WB_FONT_PATH',			P_VAR_DATA . '/fonts');

////=============================================
/// 是否打开用户分组缓存 (目前实现尚不完美) ,设置�?false 以下用户分组缓存将被停用 , 如果想单独修改某项个缓存，请更改如下特定的缓存配�?
define('CACHE_USER_ALL_ENABLE',	false);
/// 我的首页缓存
define('CACHE_HOME_TIMELINE',	CACHE_USER_ALL_ENABLE ? 'u0/300' : '');
//默认缓存时间  5分钟
define('CACHE_TIME',	'u0/600' );



//=============

define('WB_LOGO_PREVIEW_FILE_NAME',	'/data/logo/logo_previews.png');
define('WB_LOGO_FILE_NAME',			'/data/logo/logo_upload.png');


//----------------------------------------------------------------------
/// 是否启用私信功能，FALSE：不启用；TRUE：启�?
define('HAS_DIRECT_MESSAGES', FALSE);
/// 是否启用个人资料功能，FALSE：不启用；TRUE：启�?
define('HAS_DIRECT_UPDATE_PROFILE', FALSE);
/// 是否启用修改头像功能，FALSE：不启用；TRUE：启�?
define('HAS_DIRECT_UPDATE_PROFILE_IMAGE', FALSE);

/*

//----------------------------------------------------------------------
/// 是否打开用户分组缓存 (目前实现尚不完美) ,设置�?false 以下用户分组缓存将被停用 , 如果想单独修改某项个缓存，请更改如下特定的缓存配�?
define('CACHE_USER_ALL_ENABLE',	false);
/// 我的首页缓存
define('CACHE_HOME_TIMELINE',	CACHE_USER_ALL_ENABLE ? 'u0/300' : '');
/// 我收到的评论缓存
define('CACHE_COMMENT_TO_ME',	CACHE_USER_ALL_ENABLE ? '' : '');
/// 提到我的微博缓存
define('CACHE_MENTIONS',		CACHE_USER_ALL_ENABLE ? '' : '');
/// 我的粉丝缓存
define('CACHE_FANS',			CACHE_USER_ALL_ENABLE ? '' : '');
/// 我的私信缓存
define('CACHE_MESSAGES',		CACHE_USER_ALL_ENABLE ? '' : '');
//---------------------------------------------------------------------
/// cache下标定义 屏蔽回复
define('CACHE_DISABLED_COMMENT',			'disabled_comment');
/// cache下标定义  屏蔽微博
define('CACHE_DISABLED_WEIBO',				'disabled_weibo');
/// cache下标定义 昵称关键�?
define('CACHE_DISABLED_NICK_KEYWORD',		'disabled_nick_keyword');
/// cache下标定义 内容关键�?
define('CACHE_DISABLED_CONTENT_KEYWORD',	'disabled_content_keyword');
/// cache下标定义 通过认证的用�?
define('CACHE_USER_VERIFY', 				'user_verify');
/// cache下标前缀定义 @me,评论,粉丝未读�?
define('CACHE_UNREAD_COUNTER',				'unread_counter_');
/// cache下标,用户后台配置缓存
define('CACHE_SYS_CONFIG',					'sys_config');
/// cache下标,用户自定义配置缓�?
define('CACHE_USER_CONFIG',					'user_config');
/// 组件配置信息缓存
define('CACHE_COMPONENT_CFG',				'component_cfg');

//==================================================================

/// 站点LOGO文件�?
define('WB_LOGO_DEFAULT_NAME',		'img/logo.png');
define('WB_LOGO_WAP_DEFAULT_NAME',		'img/logo_wap.png');
define('WB_LOGO_OUTPUT_DEFAULT_NAME',		'img/logo_output.png');
define('WB_LOGO_FILE_NAME',			'/data/logo/logo_upload.png');
define('WB_LOGO_WAP_FILE_NAME',			'/data/logo/logo_upload_wap.png');
define('WB_LOGO_OUTPUT_FILE_NAME',			'/data/logo/logo_upload_output.png');
define('WB_LOGO_PREVIEW_FILE_NAME',	'/data/logo/logo_previews.png');
/// 站点地址栏文件名
define('WB_ICON_DEFAULT_NAME',		'img/logo/default_icon.png');
define('WB_ICON_FILE_NAME',			'/data/logo/icon_upload.png');
define('WB_ICON_PREVIEW_FILE_NAME',	'/data/logo/icon_previews.png');
/// 网站认证大图�?
define('AUTH_BIG_ICON_DEFAULT_NAME',		'img/logo/default_v1.png');
define('AUTH_BIG_ICON_FILE_NAME',			'/data/logo/big_auth_icon_upload.png');
define('AUTH_BIG_ICON_PREVIEW_FILE_NAME',	'/data/logo/big_auth_icon_previews.png');
/// 网站认证小图�?
define('AUTH_SMALL_ICON_DEFAULT_NAME',		'img/logo/default_v2.png');
define('AUTH_SMALL_ICON_FILE_NAME',			'/data/logo/small_auth_icon_upload.png');
define('AUTH_SMALL_ICON_PREVIEW_FILE_NAME',	'/data/logo/small_auth_icon_previews.png');

define('WB_CELEB_PREVIEW_FILE_NAME',	'/data/logo/celeb_previews.png');
define('WB_CELEB_OUTPUT_FILE_NAME',	'/data/logo/celeb_banner.png');
*/
