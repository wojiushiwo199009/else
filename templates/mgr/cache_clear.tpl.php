<?php
$dir = $_SERVER['DOCUMENT_ROOT'].'\var\cache';
function deldir($dir) {
  $dh=opendir($dir);
  while ($file=readdir($dh)) {
    if($file!="." && $file!="..") {
      $fullpath=$dir."/".$file;
      if(!is_dir($fullpath)) {
          unlink($fullpath);
      } else {
          deldir($fullpath);
      }
    }
  }
  closedir($dh);
  if(rmdir($dir)) {
    return true;
  } else {
    return false;
  }
}
deldir($dir);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>清除缓存</title>
<link href="<?php echo W_BASE_URL;?>css/admin/admin.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="wrapper">
    	<div class="tips_box">
            <div class="tips_c">
                <div class="tips_r">
                    <h3>清除缓存！</h3>
                    <p><?php echo $dir;?></p>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>