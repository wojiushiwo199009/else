<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加分类</title>
<link href="<?php echo W_BASE_URL;?>css/admin/admin.css" rel="stylesheet" type="text/css" />
<script type='text/javascript' src='<?php echo W_BASE_URL;?>js/jquery.min.js'></script>
</head>
<body>

<div class="main-wrap">
	<div class="path"><p>当前位置：后台管理<span>&gt;</span>EDM营销<span>&gt;</span>分类管理<span>&gt;</span><?= V('r:classid',0) == 0 ? '添加' : '修改';?></span></p></div>
    <div class="main-cont">
        <h3 class="title"><?= V('r:classid',0) == 0 ? '添加' : '修改';?>分类</h3>
        <div class="set-area">
        	<div class="form web-info-form">
            	<?php //var_dump($info);?>
            	<form action="<?= URL('mgr/email.save_class');?>" name="form1" method="post" id="this_form">
				
                    <div class="form-row">
                        <label class="form-field">分类名称：</label>
                        <div class="form-cont">
                            <input name="classname" class="input-txt" warntip="#nameTip" type="text" style="width:350px;" value="<?= isset($info['classname']) ? $info['classname'] : '';?>" />
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <label class="form-field">排序：</label>
                        <div class="form-cont">
                            <input name="sort" class="input-txt" warntip="#nameTip" type="text" style="width:30px;" value="<?= isset($info['sort']) ? $info['sort'] : '0';?>" onfocus="this.select()" maxlength="5"/>
                        </div>
                    </div>

					<div class="btn-area" style="margin-top:0px;">
                    	<input type="hidden" name="classid" value="<?= isset($info['classid']) ? $info['classid'] : '0';?>"/>
                   		<input type="submit" id="submit" style="display:none;" />
                        <a href="javascript:subm();" class="btn-general highlight" name="保存修改">
                        <span>提交</span></a>
                        <a href="javascript:history.go(-1);" class="btn-general highlight" name="返回">
                        <span>返回</span></a>
                    </div>
                    
                </form>
            </div>
        </div>

    </div>
    
    
</div>
<script>
	function subm(){
		$('#submit').click();
	}
	$('#is_ok').val(<?= isset($info['is_ok']) ? $info['is_ok'] : '';?>);

</script>
</body>
</html>
