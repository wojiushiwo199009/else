<?php
/**************************************************
*  Created:  2015-06-22
*
*  微信第三方登录
*
*  @Xsmart (C)2015-2099 Nit Inc.
*  @Author Chenyining
*
***************************************************/
header("Content-Type: text/html;charset=utf-8");

class wxOauth_mod 
{
	// 微信登录
	function login($flag = true){
		if($flag)
		
		$_SESSION['refererUrl'] = $_SERVER['HTTP_REFERER'];
		$_SESSION['wxState'] = rand(1000,9999);
		header('location:https://open.weixin.qq.com/connect/qrconnect?appid='.WX_APPID.'&redirect_uri='.urlencode('http://'.$_SERVER['SERVER_NAME'].'/index.php?m=wxOauth.callback').'&response_type=code&scope=snsapi_login&state='.$_SESSION['wxState'].'#wechat_redirect');
		//header('location:https://open.weixin.qq.com/connect/qrconnect?appid='.WX_APPID.'&redirect_uri='.urlencode('http://'.$_SERVER['SERVER_NAME'].'/index.php?m=wxOauth.callback').'&response_type=code&scope=snsapi_base&state='.$_SESSION['wxState'].'#wechat_redirect');
	}
	
	// 回调地址 - 获取凭证
	function callback(){
		if($_SESSION['wxState'] != V('g:state')){
			exit;
		}
		if(V('g:code','') == ''){
			$this->login(false);
		}
		$url='https://api.weixin.qq.com/sns/oauth2/access_token?appid='.WX_APPID.'&secret='.WX_APPSECRET.'&code='.V('g:code').'&grant_type=authorization_code';
		//exit('{"url":'.$url.' }'); 

		//$result0=file_get_contents($url);

		//if(empty($result0)){	
		   //exit('{"url":'.$url.',"refresh_token":"666666"}');  
		//}else{
		   //exit('{"url":'.$url.',"result0": '.$result0.'}');  
		//}

		//$result1=json_decode(file_get_contents($url),true);

		//if(empty($result1)){	
		   //exit('{"url":'.$url.',"refresh_token":"888888"}');  
		//}

		//$rs =json_decode(trim(file_get_contents($url),chr(239).chr(187).chr(191)),true);

		//$rs =json_decode(file_get_contents($url),true);

		//$content=file_get_contents("https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx3bc44d622ae5911b&secret=31f1d13c87634bde4db8f30bafd2c85b&code=031iYLpA0TdYgd2184tA0BPJpA0iYLpt&grant_type=authorization_code");
		//exit('{"url":'.$url.',"refresh_token":'.$rs['refresh_token'].'}');  	

		$rs = json_decode(file_get_contents($url),true);

		//exit('{"status":1,"info":" WX Login成功！","WX_APPID":'.WX_APPID.',"secret":'.WX_APPSECRET.',"refresh_token":'.$rs['refresh_token'].'}');

		$rs = json_decode(file_get_contents('https://api.weixin.qq.com/sns/oauth2/refresh_token?appid='.WX_APPID.'&grant_type=refresh_token&refresh_token='.$rs['refresh_token']),true);

                //print_r($rs);
                  
		//exit('{"status":1,"info":" WX Login成功！","URL": 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.WX_APPID.'&secret='.WX_APPSECRET.'&code='.V('g:code').'&grant_type=authorization_code' }');

		//exit('{"status":1,"info":" WX Login成功！","WX_APPID":'.WX_APPID.',"secret":'.WX_APPSECRET.'}');

		$_SESSION['WX_access_token']	= $rs['access_token'];
		$_SESSION['WX_openid'] 			= $rs['openid'];

		//exit('{"status":1,"info":" WX Login成功！","access_token":'.$rs['access_token'].',"openid":'.$rs['openid'].'}');

                //exit('{"status":1,"info":" WX Login成功！","realname":'.$data['realname'].',"logo":'.$data['logo'].'}');

		header('Location: '.URL('wxOauth.doing'));
	}
	
	// 业务处理...
	function doing(){
		// 获取用户信息
		$arr = json_decode(file_get_contents('https://api.weixin.qq.com/sns/userinfo?access_token='.$_SESSION['WX_access_token'].'&openid='.$_SESSION['WX_openid']),true);
		
		//exit('{"status":1,"info":" WX Login成功！","acess_token":'.$rs['access_token'].'}');

		$result	= DS("publics._get","","users","WopenId='".$arr['openid']."'");	 //var_dump($result);die;

		

		if(empty($result)){
			
                       
			$data['WopenId'] = $arr['openid'];
			$data['openid'] = $arr['unionid'];
			$data['realname']= $arr['nickname'];
			$data['logo']	 = $arr['headimgurl'];

                        	

			$re	=	DS("publics._save","",$data,"users");
			if($re){
				$_SESSION['xr_id'] = $re;
			}
 			

		}else{
			//exit( '{"status":"n","info": "yyyyyyyyyyyyyyyyyyy"}' );
			$_SESSION['xr_id']	=	$result[0]['id'];	
		}		
		//var_dump($arr);die;
		// 跳转登录前页面
		header('Location: '.$_SESSION['refererUrl']);
	}
	
}
