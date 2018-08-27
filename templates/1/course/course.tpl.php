<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="baidu-site-verification" content="mV1xuWEdD9" />
<meta http-equiv="X-UA-Compatible" content="IE=7;IE=9;IE=10;IE=Edge;IE=8">
<title><?php $site_name = DS('publics.get_index','','site_name'); echo '结果'  ." - ".  $site_name[0]['value']?></title>    
<meta name="keywords" content="<?php echo $ad_list[0]['keyword']?>">   
<meta name="description" content="<?php echo $ad_list[0]['description']?>">
<link rel="stylesheet" type="text/css" href="css/head.css" /> 
<link rel="stylesheet" type="text/css" href="css/foot.css" /> 
<link href="css/jquery.alerts.css" rel="stylesheet" />
<!-- <link rel="stylesheet" type="text/css" href="css/circle-menu.css" />  -->
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
<script type="text/javascript">
    $(function(){
        $("#temp4").Slide({
            effect : "scroolLoop",
            autoPlay:true,
            speed : "normal",
            timer : 3000,
            steps : 1
        });
    });
</script>
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
<link rel="stylesheet" type="text/css" href="css/course_content.css" />
<link rel="stylesheet" type="text/css" href="css/course.css" />
<link rel="stylesheet" media="screen" type="text/css" href="css/new-index.css"/>
	<link rel="stylesheet" type="text/css" href="css/menu/global.css" /> 
<link rel="stylesheet" type="text/css" href="css/menu/common-header9.css" /> 
 <!--百度异步统计代码-->
 <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?4449a883d67a851a47b40dd00c604602";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
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

						<div style="display: block;background-image:url(./images/ecs-bg-x1.jpg);"
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

	<!-- <div class="menuHolder" style="top:58px;">
				<div class="menuWindow">
					<ul class="p1">
						<li class="s1"><a href="javascript:;">菜单</a>
							<ul class="p2">
								<?
									$link_list = DS('publics._get','','linkage',' parentid = 0 and keyid = 1');
										if($link_list){
											foreach($link_list as $key => $val){
									?>
										<li class='s2'>
											<a href="javascript:;"><?= $val['name']?></a>
											<?
											$c_list = DS('publics._get','','linkage',' parentid = '.$val['linkageid']) ?>
											<ul class="p3 <?='a'.count($c_list)?>">
												<?

												if($c_list){
													foreach($c_list as $ck => $cv){
														?>
														<li><a href="<?= URL('courSystem.index','&couClass='.$cv['linkageid'])?>"><?=$cv['name']?></a></li>
														<?
													}
												}
												?>
											</ul>
										</li>
										<?
									}
								}
								?>
							</ul>
						</li>
					</ul>
				</div>
			</div> -->
<? TPL :: display('header1');?>
<!--start_banner-->
<!--<div style="background:url(images/kecheng_img_08.png) center top no-repeat #f4f4f4;width:100%;margin:0 auto;">
-->	

<div class="content scontent">
		
		
       	<input type="hidden" name="usr" id="xr_uid" value="<?= $_SESSION['xr_id']?>">
		<div class="content_right n-course-box w-content">
			<ul>
				<?php
				//var_dump($course);die;
					if($course){
						foreach($course as $sk => $sv){
							$buy_sys	=	DS("publics2._get","","integral","sourceType=1 and coid=".$sv['id']." and type=3 group by userID"); 
				?> 
						<li><div class="course-pic-txt"><img width="273" height="158" src="<?= !empty($sv['thumb'])?$sv['thumb']:'images/banner2.png'?>" /><div class="n-pic-mask"></div>
                    </div>
                    <div class="c-course-info">   
						<div class="c-course-name"><?php echo $sv['title']?></div>
						<div class="c-course-detail">
							简介：简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介
						</div>
						<div class="course-info">
							<div class="course-bot-info">
								<span class="c-details right"><em><?= count($buy_sys)?></em>人在学习</span>  
							</div>
                        	<div class="course-time">
                            <!--<a  class="n-collect" status="0"  href="javascript:void(0);" treeid="9094" ></a>-->
								<span>时长：<em><?php echo $sv['kc_hours']?></em></span>
							</div>
						</div>
                        <div class="course-hover-btn">
                        	<?php if($sv['is_open'] == 1){?>
                            <span class="study-btn"><a href="<?= URL('courSystem.curriculumEver','classid='.$sv['couClass'].'&id='.$sv['id'].'&catid=2');?>" target="_blank">免费</a></span>
                           	<?php }else{?>
                            	<!--<span class="study-btn"><a href="<?= URL('courSystem.curriculumEver','classid='.$sv['couClass'].'&id='.$sv['id'].'&catid=2');?>" target="_blank">开始学习</a></span>-->
                                <span class="study-btn"><a href="javascript:checkbuy(<?= $sv['id']?>);">开始学习</a></span>
                            <?php }?>
                        </div>
                    </div>
							<!--<p class="right_title"><?php //echo $sv['stitle']?></p>-->
							<!--<span class="con_lft">
							<?php // date('Y-m-d',$sv['updatetime'])?>
							更新</span><span class="con_rgt"><?= count($buy_sys)?>人学习</span> </a>-->
						</li>
				<?
						}
					}
				?>
			</ul>
			<div class="clearfloat"></div>
        <div class="fenye">
        <?= $pager?>
        </div>
        <script>
        	function checkbuy(coid){
				//alert(coid);
				var uid	=	$('#xr_uid').val();
				//alert(uid);
				if(uid == '' || uid ==0){
					// $("#alert").slideDown();
					$("#maskLayer").css("display","block");	
					$(".denglu").show()
		$(".zhuce").hide()	
		 $(".zhuceAndDenglu").css("display",'block');
		 	window.scroll(0,0)
				}else{
					$.ajax({
						url:'<?= URL('courSystem.isbuy')?>',
						type:'POST',
						data:{
							uid		: uid,
							coid	: coid,
						},
						success:function(r){
							e = eval('(' + r + ')');
							if(e.status==1){
								window.location.href="<?= URL('courSystem.curriculumEver','&catid=2&id=')?>"+coid;
							}else{
								jAlert(e.info,"温馨提示");	
							}
						}
					});	
				}	
			}
        </script>
		</div>
		<div class="clearfloat"></div>
	</div>
<? TPL :: display('footer');?>