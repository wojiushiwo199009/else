<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="baidu-site-verification" content="mV1xuWEdD9" />
<meta http-equiv="X-UA-Compatible" content="IE=7;IE=9;IE=10;IE=Edge;IE=8">
<title>
<?php 
	$site_name = DS('publics.get_index','','site_name');
	$member = DS("publics2._get","","users","id=".$_SESSION['xr_id']);
	if($member[0]['type'] == 1){
		if($tid == 2 || $tid == 0){
			$before	=	"提问我的";	
		}else if($tid == 3){
			$before	=	"个人中心";		
		}else if($tid == 4){
			$before	=	"个人资料";	
		}
	}else{
		if($tid == 1 || $tid == 0){
			$before	=	"我的课程";	
		}else if($tid == 2){
			$before	=	"我的问答";		
		}else if($tid == 3){
			$before	=	"随堂笔记";	
		}else if($tid == 5){
			$before	=	"我的考核";	
		}else if($tid == 6){
			$before	=	"账户中心";	
		}else if($tid == 7){
			$before	=	"个人资料";	
		}else if($tid == 8){
			$before	=	"安全中心";	
		}	
	}
	echo $before."—".$site_name[0]['value']?>
</title>    
<meta name="keywords" content="<?php $site_keyword = DS('publics.get_index','','site_keyword'); echo $site_keyword[0]['value']?>">  
<meta name="description" content="<?php $site_meat = DS('publics.get_index','','site_meat'); echo $site_meat[0]['value']?>">  
<link rel="stylesheet" type="text/css" href="css/head.css" /> 
<link rel="stylesheet" type="text/css" href="css/foot.css" /> 
<link href="css/jquery.alerts.css" rel="stylesheet" />  
	<link rel="stylesheet" type="text/css" href="css/menu/global.css" /> 
<link rel="stylesheet" type="text/css" href="css/menu/common-header9.css" /> 
<!-- 滚动图片 -->
<!--  <script type="text/javascript" src="js/jQuery.v1.8.3-min.js"></script>-->
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script src="/js/jquery.alerts.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/zzsc.js"></script>		

	<script type="text/javascript" src="js/menu/base-all.js"></script>		
<script type="text/javascript" src="js/menu/common-header.js"></script>	
<!-- 纵向导航 -->
<script type="text/javascript">
$(document).ready(function(){
    $(".sort-list>ul>li").hover(function(){
        $(this).addClass("hover");
    },function(){
        $(this).removeClass("hover");
    });
});
</script>

<script type="text/javascript"> 
	var InterValObj; //timer变量，控制时间 
	var count = 60; //间隔函数，1秒执行 
	var curCount;//当前剩余秒数 
	function sendMessage() { 
		var usr		= $("#usr").val();
		var pwd 	= $("#pwd").val(); 
		var pwd1 	= $("#pwd1").val();
		var nk_name = $("#nk_name").val();
		var telReg = usr.match(/^(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/);
		curCount = count; 
		if(usr!='' && pwd!='' && pwd1 != '' && nk_name != '' && telReg && pwd == pwd1){
		　　//设置button效果，开始计时 
			　　 //向后台发送处理数据 
			$.ajax({
				url:'<?= URL('login.send_code')?>',
				type:'POST',
				data:{
					username	:	usr,
				},
				success:function(r){  
					e = eval('(' + r + ')'); 
					if(e.status == '1'){
						//jAlert(e.info,'温馨提示'); 
						$("#btnSendCode").attr("disabled", "true"); 
						$("#btnSendCode").val(curCount + "秒后重新发送"); 
						InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次    
						//$("#register1").css('display','');	  
					}else{
						jAlert(e.info,'温馨提示');
					}	
				}
			});
		}else if(usr == ''){
			jAlert('请填写手机号','温馨提示');	
		}else if(pwd == ''){
			jAlert('请填写密码','温馨提示');
		}else if(pwd != pwd1){
			jAlert('密码不一致','温馨提示');
		}else if(nk_name == ''){
			jAlert('请填写昵称','温馨提示');
		}else if(!telReg){
			jAlert('请填写合理手机号','温馨提示');	
		} 
	} 
			//timer处理函数 
	function SetRemainTime() { 
		if (curCount == 0) { 
			window.clearInterval(InterValObj);//停止计时器 
			$("#btnSendCode").removeAttr("disabled");//启用按钮 
			$("#btnSendCode").val("重新发送"); 
		} else { 
			curCount--; 
			$("#btnSendCode").val(curCount + "秒后重新发送"); 
		}
	}
</script>	
<!-- 选项卡 -->
<script>
    function setTab(name,cursel,n){
		for(i=1;i<=n;i++){
			var menu=document.getElementById(name+i);
			var con=document.getElementById("con_"+name+"_"+i);
			menu.className=i==cursel ? "hover" : "";
			//con.style.display=i==cursel ? "block" : "none";
			if(con.style.display=i==cursel){
				$(con).fadeIn();
			}else{
				con.style.display = "none";
			}
		}
    }
</script>
<!-- 点击左右滑动 -->
<script type="text/javascript" src="js/jq.Slide.js"></script>
<!-- 图片显示div -->
<script type="text/javascript" src="js/tc.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(e) {			
		t = $('.top').offset().top; //固定块距离窗口顶部位置				
		$(window).scroll(function(e){
			s = $(document).scrollTop();	//滚动条距离顶部高度
			if( s > t){
				$('.top').css('position','fixed');
				$('.top').css('top',0+'px');
				$
			}else{
				$('.top').css('position','');
			}
		})
	});
	$(document).ready(function () {
		$(document).keyup(function (evnet) {
			if (evnet.keyCode == '13') {
				if($('#message12').css('display') == 'block'){
					$('#registerr').click();	
				}else if($('#alert').css('display') == 'block'){
					$('#log').click();	
				}else if($('#message12').css('display') == 'none' && $('#alert').css('display') == 'none'){
						
							$('#sosuo').click();
						
				}
			}
		});
		
	});
	
</script>
</head>
<body>
<div class="container">
	<div class='ali-common-header-inner'>
		<ul class="menu item pull-left" id='J_common_header_menu' data-spm='201'>
			<li class="top-menu-item" has-dropdown="true" menu-type="product" data-spm-click="">
				<span class="menu-hd">
				</span>
          <div class="menu-dropdown common-header-clearfix">
            <div class="menu-dropdown-inner">
			  <div class="menu-dropdown-sidebar pull-left">
			  	<?
				  				$link_list = DS('publics._get', '', 'linkage', ' parentid = 0 and keyid = 1');

					if($link_list){
						foreach($link_list as $key => $val){
							?>
								<a data-spm-click="gostr=/aliyun;locaid=" class="active common-header-clearfix" sidebar-type="<?=$val['linkageid']?>" href="<?= URL('courSystem.index','&couClass='.$val['linkageid'])?>"><?= $val['name']?><span class="icon pull-right">
                  </span></a>
								
							<?
						}
					}
					?>
			  </div>

              <div class="menu-dropdown-content">
                <!-- 下拉右侧内容 -->
                <!-- 模板一： -->

				<?
								$link_list = DS('publics._get', '', 'linkage', ' parentid = 0 and keyid = 1');

					if($link_list){
						foreach($link_list as $key => $val){
				?>

						<div style="display: block;"
                class="item-sub ecs-bg tpl1 product-bg-common common-header-clearfix" sidebar-type="<?=$val['linkageid']?>">
			                 <div class="menu-dropdown-bd menu-dropdown-split-line">
			                    <div class="menu-dropdown-down-item">

									<?
									$c_list = DS('publics._get','','linkage',' parentid = '.$val['linkageid']) ?>
										<?

										if($c_list){
											foreach($c_list as $ck => $cv){
												?>
												<a href="<?= URL('courSystem.index','&couClass='.$cv['linkageid'])?>">
													<h4><?=$cv['name']?></h4>
												</a>
												<?
											}
										}
										?>
									</div>
									
								</div>
							</div>
							<?
						}
					}
				?>

              </div>
            </div>
          </div>
        </li>
		</ul>
	</div>
    <?php TPL :: display("header1")?>
<div class="content">
<?php TPL :: display("member/member_left")?>
<?php if($info['type'] == '1'){ 
   	/**************************************************************type=1  老师***********************************************************/
     TPL ::display("member/teacher");
  
}else{
	/**************************************************************type=2  学生***********************************************************/
	TPL :: display("member/student");
 }?>
    <div class="clearfloat"></div>        
</div>
<!--footer-->            
<?php TPL :: display("footer1")?>
<!--footer-->
</div>
</body>
</html>
