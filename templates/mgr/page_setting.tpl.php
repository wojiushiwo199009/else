<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<title>页面设置 - 页面模块 - 界面管理</title>
<link type="text/css" rel="stylesheet" href="<?php echo W_BASE_URL;?>css/admin/admin2.css" media="screen" />
<link type="text/css" rel="stylesheet" href="<?php echo W_BASE_URL;?>css/default/skin_set.css">
<script type="text/javascript" src="<?php echo W_BASE_URL;?>js/jquery.min.js"></script>
<script src="<?php echo W_BASE_URL;?>js/admin/admin_lib.js"></script>
<script src="<?php echo W_BASE_URL;?>js/admin-all.js"></script>
<script src="<?php echo W_BASE_URL;?>js/admin/jquery-ui-1.8.11.custom.min.js"></script>
<script type="text/javascript">
	var pageID = <?php echo $page_id;?>;
</script>
<script type="text/javascript" src="<?php echo W_BASE_URL;?>js/admin/pagesetting.js"></script>
</head>

<body class="main-body">
	<div class="path"><p>当前位置：界面管理<span>&gt;</span><a href="<?= URL('mgr/page_manager') ?>">页面设置</a><span>&gt;</span><?= APP::F('escape', $page['page_name']);?>设置</p></div>
	<div class="main-cont clear">
		<h3 class="title large"><?= APP :: F('escape', $page['page_name']);?>设置</h3>
		
		<?php if (!$page['native']){?>
		<div class="title-set">
			<label>修改页面名称：<input type="text" name="new_page_name" id="new_page_name" value="<?= APP :: F('escape', $page['page_name']);?>" class="input-txt w180" /></label>
			<a href="javascript:void(0);" class="btn-general highlight" id="doEditPageData"><span>保存</span></a>
            <a class="btn-general" onClick="newPop('<?php echo URL('mgr/page_manager.componentCategory', array('page_id'=>$page_id, 'componentType'=>1));?>','添加新组件','692');return false;"><span>添加模块</span></a>
            
            <?php //if ($page['type'] == '1') {?>
			<a class="btn-general" href="javascript:;" id="setBackground"><span>设置背景</span></a>
			<?php //}?>
		</div>
		<?php } ?>
		<div class="drag-area clear" style="width:540px;">
			<!--<div class="caption-box"><span>logo位置</span></div>-->
            
            
			<div class="drag-area-left" id="left">
			<?php if (!$page['native'] ||  $page['page_id'] == '1') {?>
				<?php if (isset($main_modules) && is_array($main_modules) && !empty($main_modules)) {
					 foreach($main_modules as $m) {?>
                
				<div class="drag-box" data="<?php echo $m['id']; ?>">
					<h4>
						<span>
						<a href="javascript:;" onClick="openPop('<?php echo URL('mgr/page_manager.editComponentView', array('page_id'=>$page_id, 'id'=>$m['id'], 'settingTpl'=>$m['settingTpl'])).'\' ,\''.$m['title'].'设置\','.$m['component_id'] ;?>);return false;" >设置</a>
						<?php if(empty($m['isNative'])) { ?>
							<a href="javascript:;" onClick="delConfirm('<?php echo URL('mgr/page_manager.delComponent', array('page_id'=>$page_id, 'pmId'=>$m['id']));?>');return false;" title="删除">删除</a>
						<?php } ?>
                        
						</span>
						<?= F('escape', $m['newTitle']);?>
						<em style='color:#707070'> — <?php echo F('escape',$m['name'])?></em>
					</h4>
				</div>
				<?php }?>

			<?php } else {?>
				<p class="no-data">
					您添加的页面还没有内容,您可以添加一些模块
				</p>
			<?php }?>
			
			<?php } else {?>
				<p class="no-data">
					该页面没有可以添加模块
				</p>
			<?php }?>
			</div>


			<?php /*?><div class="drag-area-right" id="right" >
				<div class="caption-box"><span>个人信息</span></div>
				<?php if (isset($side_modules) && is_array($side_modules) && !empty($side_modules)) {foreach($side_modules as $m) {?>
					<div class="drag-box"  data="<?php echo $m['id']; ?>">
						<h4>
						<span>
						<a href="#" onClick="openPop('<?php echo URL('mgr/page_manager.editComponentView', array('page_id'=>$page_id, 'id'=>$m['id'])).'\',\''.$m['title'].'设置\','.$m['component_id'] ;?>);return false;" >设置</a>
						<?php if(empty($m['isNative'])) { ?>
							<a href="#" onclick= "delConfirm('<?php echo URL('mgr/page_manager.delComponent', array('page_id'=>$page_id, 'pmId'=>$m['id']));?>');return false;" title="删除">删除</a>
						<?php } ?>
						</span>
						<?php echo F('escape', $m['name']);?>
						</h4>
					</div>
				<?php }} else {?>
				<p class="no-data">
					您添加的页面还没有内容,您可以添加一些模块
				</p>
				<?php }?>
				<a class="btn-general" href="#" onclick = "newPop('<?php echo URL('mgr/page_manager.componentCategory', array('page_id'=>$page_id, 'componentType'=>2));?>','添加新组件','692');return false;"><span>添加右侧模块</span></a>
			</div><?php */?>
            
		</div>
        
        <p>
			<a class="btn-general" href="javascript:;" id="saveSort"><span>保存排序</span></a>

            <a class="btn-general highlight" target="_blank" href="<?php echo URL("{$page['url']}", array('page_id'=>$page_id), 'index.php');?>"><span>预览</span></a>
		</p>
	
    
    </div>
</body>
</html>
