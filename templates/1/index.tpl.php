<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">



	<meta property="qc:admins" content="254647636026375" />
	<meta http-equiv="X-UA-Compatible" content="IE=7;IE=9;IE=10;IE=Edge;IE=8">
	<title><?php $site_name = DS('publics.get_index','','site_name'); echo $site_name[0]['value']?></title>    
	<meta name="keywords" content="<?php $site_keyword = DS('publics.get_index','','site_keyword'); echo $site_keyword[0]['value']?>" />  
	<meta name="description" content="<?php $site_meat = DS('publics.get_index','','site_meat'); echo $site_meat[0]['value']?>" /> 


	<link rel="stylesheet" type="text/css" href="css/head.css?2017040823" /> 
	<link rel="stylesheet" type="text/css" href="css/foot.css?2017040822" /> 
	<link href="/css/jquery.alerts.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/circle-menu.css" /> 
	<meta name="baidu-tc-verification" content="bbf97a97d2668dce1ed093cba54014e6" />

<!--  20170408 yinzj4
<script src="http://siteapp.baidu.com/static/webappservice/uaredirect.js" type="text/javascript"></script><script type="text/javascript">uaredirect("http://m.bigdata001.com","http://www.bigdata001.com");</script> 
-->

<!-- 滚动图片 -->
<!--  <script type="text/javascript" src="js/jQuery.v1.8.3-min.js"></script>-->
<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
<script src="/js/jquery.alerts.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery1.42.min.js"></script>
<script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
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
	// function setTab(name,cursel,n){
	// 	for(i=1;i<=n;i++){
	// 		var menu=document.getElementById(name+i);
	// 		var con=document.getElementById("con_"+name+"_"+i);
	// 		menu.className=i==cursel ? "hover" : "";
	// 		//con.style.display=i==cursel ? "block" : "none";
	// 		if(con.style.display=i==cursel){
	// 			$(con).fadeIn();
	// 		}else{
	// 			con.style.display = "none";
	// 		}
	// 	}
	// }
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
				$('#left_class').fadeOut();
			}else{
				$('#left_class').fadeIn();
				$('.top').css('position','');
			}
		})
	});
	
</script>
<link rel="stylesheet" type="text/css" href="css/index1.css" /> 
<link rel="stylesheet" media="screen" type="text/css" href="css/new-index.css"/>
<link rel="stylesheet" href="css/swiper.min.css">
<style>
	.swiper-container {
		width: 100%;
		position:relative;
		top:42px;
		/*background:url(images/zr.gif) no-repeat center center;*/
	}
	.swiper-wrapper{
		height:auto;
	}
	.swiper-slide {
		text-align: center;
		/* Center slide text vertically */
		display: -webkit-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		-webkit-box-pack: center;
		-ms-flex-pack: center;
		-webkit-justify-content: center;
		justify-content: center;
		-webkit-box-align: center;
		-ms-flex-align: center;
		-webkit-align-items: center;
		align-items: center;
	}
	.swiper-container img{
		width:100%;
	}
	.swiper-container-horizontal > .swiper-pagination .swiper-pagination-bullet{width: 11px;height: 11px;text-align: center;margin:9px 10px;background:url(images/img_20.png) no-repeat;}
	.swiper-container-horizontal > .swiper-pagination .swiper-pagination-bullet-active{position: relative;background:url(images/img_21.png) no-repeat;}
</style>

 <!--百度异步统计代码
 <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?4449a883d67a851a47b40dd00c604602";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>
-->

</head>
<body>

	<div class="container">
		<img src="images/zr.gif" style="display:none;"/>
		<?php TPL :: display("header");?>
		<div class="swiper-container">

			<div class="sort" id="left_class" style="">
			</div>
			<div class="menuHolder">
				<div class="menuWindow">
					<ul class="p1">
						<li class="s1"><a href="javascript:;">菜单</a>
							<ul class="p2">
								<?
								if($link_list){
									foreach($link_list as $key => $val){
										?>
										<li class='s2'>
											<a href="<?= URL('courSystem.index','&couClass='.$val['linkageid'])?>"><?= $val['name']?></a>
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
			</div>


			<div class="swiper-wrapper" style="width:1920px;">
				<div class="swiper-slide"><img src="images/banner1.jpg"></div>
				<div class="swiper-slide"><img src="images/banner4.jpg"></div>
				<div class="swiper-slide"><img src="images/banner6.jpg"></div>
				<?php if(!empty($banner)){
					foreach($banner as $bk => $bv){?>
					<div class="swiper-slide"><img src="<?= $bv['imgurl']?>"></div>
					<?php }}?>
			</div>
				<!-- Add Pagination -->
			<div class="swiper-pagination" style="width:100%;min-width:1200px;height:28px;margin:0 auto;position:absolute;bottom:0;left:0;background:url(images/back.png);z-index:10;"></div>
		</div>
			<script src="js/swiper.min.js"></script>
			<script>
				var swiper = new Swiper('.swiper-container', {
					pagination: '.swiper-pagination',
					paginationClickable: true,
					effect : 'fade',
					loop: true,
					autoplay : 3000,
					autoplayDisableOnInteraction: false
				});
			</script>
			<!-- 纵向导航 -->
			<script type="text/javascript">
				$(document).ready(function(){
					$(".sort-list>ul>li").hover(function(){
						$(this).addClass("hover")
					},function(){
						$(this).removeClass("hover")
					});
					
				});
			</script>
			<script>
				function setTabb($class,$id){
					$("."+$class).fadeOut();
					$("#"+$id).fadeIn();
				}
			</script>
			<div class="content">
				<!-- <div class="lib_Menubox lib_tabborder">
					<ul>
						<li id="one1" onClick="setTab('one',1,5)" class="hover">热门推荐</li>
						<li id="one2" onClick="setTab('one',2,5)" >人气最高</li> 
						<li id="one3" onClick="setTab('one',3,5)">项目实战</li>   
						<li id="one4" onClick="setTab('one',4,5)">仙人指路</li>
						<li id="one5" onClick="setTab('one',5,5)">企业之声</li>
					</ul>
				</div> -->
				<input type="hidden" name="huid" id="huid" value="<?= $_SESSION['xr_id']?>">
				<input type="hidden" name="url" id="url" value="<?= $_SERVER['HTTP_HOST']?>">
				<div class="lib_Contentbox lib_tabborder" style="overflow:hidden;">
					<div id="con_one_1" class="hover n-index-course">
						<h3 class='con-title'>热门推荐</h3>
						<div class="tab_content n-course-box w-content">
							<ul>
								<?
								if($exce1){
									foreach($exce1 as $kex1 => $vex1){
										$buy_sys	=	DS("publics2._get","","integral","sourceType=1 and systemid=".$vex1['id']." group by userID"); 
										?>
										<li><div class="course-pic-txt"><img src="<?=$vex1['thumb']?>" /><div class="n-pic-mask"></div>
										</div>
										<div class="c-course-info">
											<div class="c-course-name"><a href="<?= URL('courSystem.courseCon','classid='.$vex1['couClass'].'&sid='.$vex1['id'].'&cid=2')?>" target="_blank"><?php echo $vex1['stitle']?></a></div>
											<div class="c-course-detail">
												简介：简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介
											</div>
											<div class="course-info">
												<div class="course-bot-info">
													<span class="c-details right">更新时间：<em><?= date("Y-m-d", $vex1['inputtime'])?></em></span>
													<span class="c-details right" style="float:right;"><em><?= count($buy_sys)?></em>人在学习</span>
												</div>
												<div class="course-time">
													<a  class="n-collect" status="0"  href="javascript:void(0);" treeid="9094" onclick="collect(<?= $vex1['id']?>,2)"></a>
													<!-- <a  href="javascript:void(0);"><img src="images/course_conimg_09.png" title="分享"/></a>-->
													<span>时长：<em><?php echo $vex1['sys_hours']?></em></span>
												</div>
											</div>
											<div class="course-hover-btn">
												<span class="study-btn"><a href="<?= URL('courSystem.courseCon','classid='.$vex1['couClass'].'&sid='.$vex1['id'].'&cid=2')?>" target="_blank">开始学习</a></span>
												<span class="det-btn"><a title="购买" href="javascript:;" onClick="checkBuy(<?= $vex1['id']?>,0,0,2,1)">购买</a></span>
											</div>
										</div></li>
										<?
									}
								}
								?>
							</ul>
							<div class="clearfloat"></div>
						</div>
					</div>
					<div id="con_one_2" class="hover n-index-course">
						<h3 class='con-title'>人气最高</h3>
						<div class="tab_content n-course-box w-content">
							<ul>
								<?
								if($exce2){
									foreach($exce2 as $kex2 => $vex2){
										$buy_sys	=	DS("publics2._get","","integral","sourceType=1 and systemid=".$vex2['id']." group by userID"); 
										?>
										<li><div class="course-pic-txt"><img src="<?=$vex2['thumb']?>" /><div class="n-pic-mask"></div>
										</div>
										<div class="c-course-info">
											<div class="c-course-name"><a href="<?= URL('courSystem.courseCon','classid='.$vex2['couClass'].'&sid='.$vex2['id'].'&cid=2')?>" target="_blank"><?php echo $vex2['stitle']?></a></div>
											<div class="c-course-detail">
												简介：简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介
											</div>
											<div class="course-info">
												<div class="course-bot-info">
													<span class="c-details right">更新时间：<em><?= date("Y-m-d", $vex2['inputtime'])?></em></span>
													<span class="c-details right" style="float:right;"><em><?= count($buy_sys)?></em>人在学习</span>
												</div>
												<div class="course-time">
													<a  class="n-collect" status="0"  href="javascript:void(0);" treeid="9094" onclick="collect(<?= $vex2['id']?>,2)"></a>
													<span>时长：<em><?php echo $vex2['sys_hours']?></em></span>
												</div>
											</div>
											<div class="course-hover-btn">
												<span class="study-btn"><a href="<?= URL('courSystem.courseCon','classid='.$vex2['couClass'].'&sid='.$vex2['id'].'&cid=2')?>" target="_blank">开始学习</a></span>
												<span class="det-btn"><a title="购买" href="javascript:;" onClick="checkBuy(<?= $vex2['id']?>,0,0,2,1)">购买</a></span>
											</div>
										</div></li>
										<?
									}
								}
								?>
							</ul>
							<div class="clearfloat"></div>
						</div>
					</div>
					<div id="con_one_3" class="hover n-index-course">
						<h3 class='con-title'>项目实战</h3>
						<div class="tab_content n-course-box w-content">
							<ul>
								<?
								if($exce3){
									foreach($exce3 as $kex3 => $vex3){
										$buy_sys	=	DS("publics2._get","","integral","sourceType=1 and systemid=".$vex3['id']." group by userID"); 
										?>
										<li><div class="course-pic-txt"><img src="<?=$vex3['thumb']?>" /><div class="n-pic-mask"></div>
										</div>
										<div class="c-course-info">
											<div class="c-course-name"><a href="<?= URL('courSystem.courseCon','classid='.$vex3['couClass'].'&sid='.$vex3['id'].'&cid=2')?>" target="_blank"><?php echo $vex3['stitle']?></a></div>
											<div class="c-course-detail">
												简介：简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介
											</div>
											<div class="course-info">
												<div class="course-bot-info">
													<span class="c-details right">更新时间：<em><?= date("Y-m-d", $vex3['inputtime'])?></em></span>
													<span class="c-details right" style="float:right;"><em><?= count($buy_sys)?></em>人在学习</span>
												</div>
												<div class="course-time">
													<a  class="n-collect" status="0"  href="javascript:void(0);" treeid="9094" onclick="collect(<?= $vex3['id']?>,2)"></a>
													<span>时长：<em><?php echo $vex3['sys_hours']?></em></span>
												</div>
											</div>
											<div class="course-hover-btn">
												<span class="study-btn"><a href="<?= URL('courSystem.courseCon','classid='.$vex3['couClass'].'&sid='.$vex3['id'].'&cid=2')?>" target="_blank">开始学习</a></span>
												<span class="det-btn"><a title="购买" href="javascript:;" onClick="checkBuy(<?= $vex3['id']?>,0,0,2,1)">购买</a></span>
											</div>
										</div></li>
										<?
									}
								}
								?>
							</ul>
							<div class="clearfloat"></div>
						</div>
					</div>
					<div id="con_one_4" class="hover n-index-course">
						<h3 class='con-title'>仙人指路</h3>
						<div class="tab_content n-course-box w-content">
							<ul>
								<?
								if($exce4){
									foreach($exce4 as $kex4 => $vex4){
										$buy_sys	=	DS("publics2._get","","integral","sourceType=1 and systemid=".$vex4['id']." group by userID"); 
										?>
										<li><div class="course-pic-txt"><img src="<?=$vex4['thumb']?>" /><div class="n-pic-mask"></div>
										</div>
										<div class="c-course-info">
											<div class="c-course-name"><a href="<?= URL('courSystem.courseCon','classid='.$vex4['couClass'].'&sid='.$vex4['id'].'&cid=2')?>" target="_blank"><?php echo $vex4['stitle']?></a></div>
											<div class="c-course-detail">
												简介：简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介
											</div>
											<div class="course-info">
												<div class="course-bot-info">
													<span class="c-details right">更新时间：<em><?= date("Y-m-d", $vex4['inputtime'])?></em></span>
													<span class="c-details right" style="float:right;"><em><?= count($buy_sys)?></em>人在学习</span>
												</div>
												<div class="course-time">
													<a  class="n-collect" status="0"  href="javascript:void(0);" treeid="9094" onclick="collect(<?= $vex4['id']?>,2)"></a>
													<span>时长：<em><?php echo $vex4['sys_hours']?></em></span>
												</div>
											</div>
											<div class="course-hover-btn">
												<span class="study-btn"><a href="<?= URL('courSystem.courseCon','classid='.$vex4['couClass'].'&sid='.$vex4['id'].'&cid=2')?>" target="_blank">开始学习</a></span>
												<span class="det-btn"><a title="购买" href="javascript:;" onClick="checkBuy(<?= $vex4['id']?>,0,0,2,1)">购买</a></span>
											</div>
										</div></li>
										<?
									}
								}
								?>
							</ul>
							<div class="clearfloat"></div>
						</div>
					</div>
					<div id="con_one_5" class="hover n-index-course">
						<h3  class='con-title'>企业之声</h3>
						<div class="tab_content n-course-box w-content">
							<ul>
								<?
								if($exce5){
									foreach($exce5 as $kex5 => $vex5){
										$buy_sys	=	DS("publics2._get","","integral","sourceType=1 and systemid=".$vex5['id']." group by userID"); 
										?>
										<li><div class="course-pic-txt"><img src="<?=$vex5['thumb']?>" /><div class="n-pic-mask"></div>
										</div>
										<div class="c-course-info">
											<div class="c-course-name"><a href="<?= URL('courSystem.courseCon','classid='.$vex5['couClass'].'&sid='.$vex5['id'].'&cid=2')?>" target="_blank"><?php echo $vex5['stitle']?></a></div>
											<div class="c-course-detail">
												简介：简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介
											</div>
											<div class="course-info">
												<div class="course-bot-info">
													<span class="c-details right">更新时间：<em><?= date("Y-m-d", $vex5['inputtime'])?></em></span>
													<span class="c-details right" style="float:right;"><em><?= count($buy_sys)?></em>人在学习</span>
												</div>
												<div class="course-time">
													<a  class="n-collect" status="0"  href="javascript:void(0);" treeid="9094" onclick="collect(<?= $vex5['id']?>,2)"></a>
													<span>时长：<em><?php echo $vex5['sys_hours']?></em></span>
												</div>
											</div>
											<div class="course-hover-btn">
												<span class="study-btn"><a href="<?= URL('courSystem.courseCon','classid='.$vex5['couClass'].'&sid='.$vex5['id'].'&cid=2')?>" target="_blank">开始学习</a></span>
												<span class="det-btn"><a title="购买" href="javascript:;" onClick="checkBuy(<?= $vex5['id']?>,0,0,2,1)">购买</a></span>
											</div>
										</div></li>
										<?
									}
								}
								?>
							</ul>
							<div class="clearfloat"></div>
						</div>
					</div>

				</div>
			</div>
			<!--video-->

			<div class="tanchu2">
			<script>
				//收藏   
				function collect(systemid,catid){     
					var uid = $('#huid').val();            
					if(uid != '' && uid != 0){
						$.ajax({
							url:'<?= URL('bone.collect_sys')?>',
							type:'POST',
							data:{
								uid		:	uid,
								systemid	:	systemid,
								catid	:	catid,	
							},
							success:function(r){
								e = eval('(' + r + ')');
								if(e.status == '1'){
									//alert(1);
									jAlert(e.info,'温馨提示');
									location.reload(true); 
								}else{
									jAlert(e.info,'温馨提示');
								}	
							}
						});
					}else{
						//jAlert('请先登录','温馨提示');
						$("#alert").css("display","block");
						$("#maskLayer").css("display","block");		
					}
				} 
				//分享   
				function share(systemid,catid){
					var uid = $('#huid').val();
					var url =  $('#url').val();
					//alert(url);
					if(uid != '' && uid != 0){
						$.ajax({
							url:'<?= URL('bone.share')?>',
							type:'POST',
							data:{  
								uid		:	uid,
								url		:	url,
							},
							success:function(r){
								e = eval('(' + r + ')');
								if(e.status == '1'){
									//alert(1);
									//jAlert(e.info,'温馨提示');
									//location.reload(true); 
									$("#links").html(e.url)
									$("#fenxiang_con").css("display","block");
									$("#maskLayer").css("display","block");
								}else{
									jAlert(e.info,'温馨提示');
								}	
							}
						});
					}else{
						//jAlert('请先登录','温馨提示');
						$("#alert").css("display","block");
						$("#maskLayer").css("display","block");		
					}
				}
				//验证购买信息
				function checkBuy(systemid,pid,coid,catid,type){
					var uid = $("#huid").val();												//alert(uid); 
					if(uid=='' || uid == 0){
					// jAlert('请先登录','温馨提示');
					$("#alert").css("display","block");
					$("#maskLayer").css("display","block");
					}else{
						$.ajax({  
							url:'<?= URL('courSystem.checkBuy')?>',                   
							type:'POST',
							data:{uid:uid,systemid:systemid,pid:pid,coid:coid,catid:catid,type:type,},
							
							success:function(r){
								e = eval('(' + r + ')');
								if(e.status == '1'){
									$("#pricess1").html(e.info);
									$("#xiangxi").html(e.intro);
									$("#a1").show();
									$("#qwww").show();
									$("#buyuid1").val(uid);
									$("#type1").val('1');
									$("#systemid1").val(systemid);
									$("#pid1").val(pid);
									$("#coid1").val(coid);
									$("#catid1").val(catid);
								}else{
									jAlert(e.info,'温馨提示');	
								} 
							}
						});	
					}
				}
			</script>
<script>
	$(function(){
		$("#b1").click(function(){
			$("#a1").css("display","none");
			$("#qwww").css("display","none");
		})
		$("#b2").click(function(){
			$("#a2").css("display","none");
			$("#qwww").css("display","none");
		})
		$("#b3").click(function(){
			$("#a3").css("display","none");
			$("#qwww").css("display","none");
		})
	})
	
	function buy(t){
		
		var uid  	= $("#buyuid1").val();
		var type 	= $("#type1").val();
		var systemid	= $("#systemid1").val()
		var pid		= $("#pid1").val();
		var coid	= $("#coid1").val();
		var catid	= $("#catid1").val();	
		
		$.ajax({  
			url:'<?= URL('courSystem.buy')?>',
			type:'POST',
			data:{
				uid		:	uid,
				systemid	:	systemid,
				type	:	type,
				pid		:	pid,
				coid	:	coid,
				catid	:	catid, 
				
			},
			success:function(r){
				//alert(r)
				e = eval('(' + r + ')');
				
				if(e.status == '1'){
					//alert(1);
					$("#a1").hide();
					$("#a2").hide();
					$("#a3").hide();
					$("#qwww").show()
					jAlert(e.info,'温馨提示');
					location.reload(true); 
				}else{
					$("#a1").hide();
					$("#a2").hide();
					$("#a3").hide();
					jAlert(e.info,'温馨提示');
					$("#qwww").hide()	
				} 
			}
		});	
	}
</script>
<div class="tanchu_one" id="a1" style="display:none">
	<h3>购买本体系课程<img src="images/one_img_03.png" id="b1" /></h3>
	<div class="clearfloat"></div>
	<div class="xiangxi" id="xiangxi"></div>
	<p id="pricess1"></p>
	<input type="hidden" name="buyuid1" id="buyuid1" value="" />
	<input type="hidden" name="type1" id="type1" 	value="1" />
	<input type="hidden" name="systemid1" id="systemid1" value="" />
	<input type="hidden" name="pid1" id="pid1" value="" />
	<input type="hidden" name="coid1" id="coid1" value="" />
	<input type="hidden" name="catid1" id="catid1" value="" />
	<a href="javascript:;" onClick="buy(1)">立即购买</a>
</div>
</div>

<div id="qwww" style="width:100%; position: fixed; top:0; left:0; z-index:111; height:100%; background:#000; opacity:0.4;filter:alpha(opacity=40); display:none; "></div>
<!--study
	<?
		 $ad_list = DS('publics._get','','ad',' id = 1 and classid = 1 and audit = 1');
	?>
-->
		<div class="clearfloat"></div>
		<div class="news">
				<div class="clearfloat"></div>
			</div>
		<script>
			function dialog(url,title,width,height){
				$.dialog({
					title:title,
					id: 'dialsg',
					width: width,
					height: height,
					fixed: true,
					lock: true,
					background: '#000',
					opacity: 0.5,
					content: 'url:'+url
				});
			}
		</script>

<?php TPL :: display("footer1")?>
</div>
		</div>

</body>
</html>