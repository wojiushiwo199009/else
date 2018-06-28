<?php
/* * 
 * 功能：支付宝页面跳转同步通知页面
 * 版本：3.3
 * 日期：2012-07-23
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究支付宝接口使用，只是提供一个参考。

 *************************页面功能说明*************************
 * 该页面可在本机电脑测试
 * 可放入HTML等美化页面的代码、商户业务逻辑程序代码
 * 该页面可以使用PPH开发工具调试，也可以使用写文本函数logResult，该函数已被默认关闭，见alipay_notify_class.php中的函数verifyReturn
 */

require_once("alipay.config.php");
require_once("lib/alipay_notify.class.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
//计算得出通知验证结果
$alipayNotify = new AlipayNotify($alipay_config);
$verify_result = $alipayNotify->verifyReturn();
if($verify_result) {//验证成功
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//请在这里加上商户的业务逻辑程序代码
	
	//——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
        //获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表

	//商户订单号

	$out_trade_no = $_GET['out_trade_no'];

	//支付宝交易号

	$trade_no = $_GET['trade_no'];

	//交易状态
	$trade_status = $_GET['trade_status'];


    if($_GET['trade_status'] == 'TRADE_FINISHED' || $_GET['trade_status'] == 'TRADE_SUCCESS') {
		//判断该笔订单是否在商户网站中已经做过处理
		//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
		//如果有做过处理，不执行商户的业务程序

	        $link = mysql_connect("localhost","root","vivian321!!");
		mysql_query('set names utf8');
		mysql_select_db('study',$link) or die ('选择失败');
		
		//以上数据库连接信息需要修改
		
		$sql = "select * from  xsmart_balance where oid = " . $out_trade_no;
		//$sql = "update xsmart_order set ispay = 1,pay_order_number = ".$trade_no." where nid = ".$out_trade_no;
	        $con = mysql_query($sql,$link);

	     
		
		$conarr 	= mysql_fetch_array($con);

 	       if ($conarr['finished'] == 0 ) {
		$oid		= $conarr['oid'];
		$uid		= $conarr['uid'];   
		$price		= $conarr['price']; 
		
		$sql1 		= "select * from  xsmart_users where id = " . $uid;
		$con1 		= mysql_query($sql1,$link);
		$conarr1 	= mysql_fetch_array($con1);
		$old		= $conarr1['frozen_money'];
		
		
		$sql5 		= "select * from  xsmart_sys_config where `key` = 'site_learn'";
		$con5 		= mysql_query($sql5,$link);
		$conarr5 	= mysql_fetch_array($con5);
		$cheng		= $conarr5['value'];
		  
		$newmoney	= $old + ($price*$cheng);
		$sql2		=  "update xsmart_users set frozen_money = '". $newmoney. "' where id = " . $uid;
		$con2 		= mysql_query($sql2,$link); 	
		$sql3		=  "update xsmart_balance set status = 2,finished = 1,pay_order_number = " . $trade_no . " where oid = " . $oid;
		$con3 		= mysql_query($sql3,$link);
		
		$sql4		=  "update xsmart_integral set status = 1 where oid = " . $oid;
		$con4 		= mysql_query($sql4,$link);
		
		//mysql_query('update xsmart_order set payfees = 1 where nid = "'.$out_trade_no.'"');

              }

    }
    else {
      echo "trade_status=".$_GET['trade_status'];
    }
		
	echo "";

	//——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}
else {
    //验证失败
    //如要调试，请看alipay_notify.php页面的verifyReturn函数
    echo "验证失败";
}
?>

<title>成功充值 - 大数据研习社教育</title>
<meta name="keywords" content="大数据研习社 教育  " />
<meta name="description" content="大数据研习社 教育  " />
<link href="/css/css1.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/js/jquery1.min.js"></script>

	</head>
    <body>

<div class="shopping_top">
<div class="shopping_top_wai">

<div class="shopping_top_wai_left">
<span><img src="/images/gouwu_03.gif" /></span>
<span><a href="http://www.bigdata001.com" onclick="window.external.addFavorite
(this.href,this.title);return false;" title='大数据研习社教育' rel="sidebar">大数据研习社教育</a> 
</span>
</div>
 

<div class="shopping_top_wai_right">
您好，欢迎来到大数据研习社!
<span><a href="/index.php?m=Ulogin.tuichu">[退出]</a> <a href="/index.php?m=member.xmember">[会员中心]</a></span>
<a href="/index.php?m=member.xmember&tid=6">账户中心</a>
</div>
<div class="clear"></div>
</div>
</div>
<div class="shopping_center" style="height:440px;">
<div class="shopping_cneter_top">
<div class="logo"><a href="/"><!--<img src="/images/logo.jpg" />--></a></div>
<div class="shopping_cneter_top_right"> 
<!--<span class="car_1">1.我的购物车</span> 
<span class="car_2">2.填写核对订单信息</span>
<span class="jss3">3.成功提交订单</span> $return_url = "http://www.bigdata001.com/index.php?m=member.success_bone";   
--></div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<span style="font-family:微软雅黑; font-size:18px; padding-top:25px; display:block;">成功充值订单
</span>
<div class="clear"></div>
<div class="ht"></div>
<div class="shopping_center_cneter">

<span style="float:left;"><img src="../images/gouwu_14.gif" /></span>
<span style=" float:right; display:block;"><img src="../images/gouwu_19.gif" /></span>

    <div style="background:url(../images/car04.png) no-repeat left center;   text-align:center; padding-left:80px; font-family:微软雅黑; font-weight:bold; color:#f00; font-size:18px; margin:0 auto; line-height:100px; width:400px; height:100px;">
    恭喜您，充值成功！<a href="/index.php?m=member.xmember&tid=6" >去我的账户查看</a>
    </div>	
    </div>


    </body>
</html>