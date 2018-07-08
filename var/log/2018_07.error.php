<?php  if(!defined("IN_APPLICATION")) { exit("Access Denied"); } ?> 


====================/index.php Start====================
[2018-07-02 20:30:53]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:Table 'study.xsmart_skins' doesn't exist. SQL:SELECT * FROM xsmart_skins ORDER BY `sort_num` , `skin_id`	
====================/index.php End====================

====================/index.php?m=login.ajax_register Start====================
[2018-07-02 20:31:21]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:Duplicate entry '15081128233' for key 'user_name'. SQL:INSERT  INTO xsmart_users(`username`,`password`,`realname`,`type`,`addtime`,`uptime`) VALUES("15081128233","202cb962ac59075b964b07152d234b70","jewo","2","1530534681","1530534681")	
====================/index.php?m=login.ajax_register End====================

====================/admin.php?m=mgr/admin.login Start====================
[2018-07-02 20:42:06]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:Select * From xsmart_admin_group Where gid=	
[2018-07-02 20:42:07]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:Select * From xsmart_admin_group Where gid=	
====================/admin.php?m=mgr/admin.login End====================

====================/admin.php?m=mgr/admin.chklogin&ajax=1 Start====================
[2018-07-02 20:42:11]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:Select * From xsmart_admin_group Where gid=	
[2018-07-02 20:42:11]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:Select * From xsmart_admin_group Where gid=	
====================/admin.php?m=mgr/admin.chklogin&ajax=1 End====================

====================/admin.php?m=mgr/modelForm.infoList&modelid=4&catid=1 Start====================
[2018-07-02 20:42:14]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:Unknown column 'a.catid' in 'where clause'. SQL:SELECT count(*) as num FROM `xsmart_course` as a LEFT JOIN xsmart_course_data as b ON a.id = b.id  where 1=1 and a.catid in (1) 	
[2018-07-02 20:42:14]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:Unknown column 'a.catid' in 'where clause'. SQL:SELECT * FROM xsmart_course as a LEFT JOIN xsmart_course_data as b ON a.id = b.id where 1=1 and a.catid in (1)  order by a.id desc limit 0,200	
====================/admin.php?m=mgr/modelForm.infoList&modelid=4&catid=1 End====================

====================/index.php Start====================
[2018-07-04 21:50:54]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:Table 'study.xsmart_skins' doesn't exist. SQL:SELECT * FROM xsmart_skins ORDER BY `sort_num` , `skin_id`	
====================/index.php End====================

====================/index.php?m=courJob.index&cid=38 Start====================
[2018-07-04 22:31:44]:	XXXSMART	0.2	12345	[cache]	[warning]	 [Used=0.556397199631]	[get]Key=gCacheKey_ comCache_common/userConfig.get_189792bdac22fb1a9c391c91edb7b390	
[2018-07-04 22:31:46]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where  classid = 38	
[2018-07-04 22:31:46]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:SELECT count(*)as num FROM `xsmart_system` where 1=1  and catid = 38	
[2018-07-04 22:31:46]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:SELECT * FROM xsmart_system where 1=1  and catid = 38 order by  updatetime  limit 0,10	
[2018-07-04 22:31:47]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select value from xsmart_sys_config where `key` = 'site_name'	
[2018-07-04 22:31:47]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where classid=38	
[2018-07-04 22:31:47]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_ad where bid=1 and classid=5 order by lmorder asc limit 0,1	
[2018-07-04 22:31:47]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where  parentid = 0 order by lmorder asc limit 5	
[2018-07-04 22:31:47]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_linkage where  parentid = 0 and keyid = 1	
[2018-07-04 22:31:47]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where  parentid = 7 and classid != 26 and classid != 27	
[2018-07-04 22:31:47]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where  parentid = 7 limit 5	
[2018-07-04 22:31:47]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_ad where bid=1 and classid=4 order by lmorder asc limit 0,2	
[2018-07-04 22:31:47]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_link where classid = 1 order by lmorder asc,times	
[2018-07-04 22:31:47]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select value from xsmart_sys_config where `key` = 'site_contact'	
====================/index.php?m=courJob.index&cid=38 End====================

====================/index.php?m=courJob.index&cid=38 Start====================
[2018-07-04 22:32:01]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where  classid = 38	
[2018-07-04 22:32:01]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:SELECT count(*)as num FROM `xsmart_system` where 1=1  and catid = 38	
[2018-07-04 22:32:01]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:SELECT * FROM xsmart_system where 1=1  and catid = 38 order by  updatetime  limit 0,10	
[2018-07-04 22:32:01]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select value from xsmart_sys_config where `key` = 'site_name'	
[2018-07-04 22:32:01]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where classid=38	
[2018-07-04 22:32:01]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_ad where bid=1 and classid=5 order by lmorder asc limit 0,1	
[2018-07-04 22:32:01]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where  parentid = 0 order by lmorder asc limit 5	
[2018-07-04 22:32:01]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_linkage where  parentid = 0 and keyid = 1	
[2018-07-04 22:32:01]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where  parentid = 7 and classid != 26 and classid != 27	
[2018-07-04 22:32:01]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where  parentid = 7 limit 5	
[2018-07-04 22:32:01]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_ad where bid=1 and classid=4 order by lmorder asc limit 0,2	
[2018-07-04 22:32:01]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_link where classid = 1 order by lmorder asc,times	
[2018-07-04 22:32:01]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select value from xsmart_sys_config where `key` = 'site_contact'	
====================/index.php?m=courJob.index&cid=38 End====================

====================/ Start====================
[2018-07-04 22:32:14]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_linkage where  parentid = 0 and keyid = 1	
[2018-07-04 22:32:14]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_system where catid=2 and  FIND_IN_SET("1",exception) order by listorder asc, updatetime desc limit 8	
[2018-07-04 22:32:14]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_system where catid=2 and  FIND_IN_SET("2",exception) order by listorder asc, updatetime desc limit 8	
[2018-07-04 22:32:14]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_system where catid=2 and  FIND_IN_SET("3",exception) order by listorder asc, updatetime desc limit 8	
[2018-07-04 22:32:14]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_system where catid=2 and  FIND_IN_SET("4",exception) order by listorder asc, updatetime desc limit 8	
[2018-07-04 22:32:14]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_system where catid=2 and  FIND_IN_SET("5",exception) order by listorder asc, updatetime desc limit 8	
[2018-07-04 22:32:14]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_ad where classid = 1 and (id =45 or id=46 or id=47) and audit =1 order by top desc, recommend desc, times desc limit 0,3	
[2018-07-04 22:32:14]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_star_student where id > 0 order by inputtime desc limit 0,6	
[2018-07-04 22:32:14]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where  classid = 14	
[2018-07-04 22:32:14]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_news where  catid = 14 and audit = 1 order by ontop desc,recommend desc,updatetime desc limit 5	
[2018-07-04 22:32:14]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where  classid = 15	
[2018-07-04 22:32:14]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_news where  catid = 15 and audit = 1 order by ontop desc,recommend desc,updatetime desc limit 5	
[2018-07-04 22:32:14]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_linkage where keyid=23  order by listorder asc	
[2018-07-04 22:32:15]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select value from xsmart_sys_config where `key` = 'site_name'	
[2018-07-04 22:32:15]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select value from xsmart_sys_config where `key` = 'site_keyword'	
[2018-07-04 22:32:15]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select value from xsmart_sys_config where `key` = 'site_meat'	
[2018-07-04 22:32:15]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_ad where bid=1 and classid=5 order by lmorder asc limit 0,1	
[2018-07-04 22:32:15]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where  parentid = 0 order by lmorder asc limit 5	
[2018-07-04 22:32:15]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_ad where  id = 1 and classid = 1 and audit = 1	
[2018-07-04 22:32:15]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_ad where  id = 7	
[2018-07-04 22:32:15]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_news where  catid = 16 and audit=1 order by ontop desc,recommend desc,listorder asc limit 0,6	
[2018-07-04 22:32:15]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_news where  catid = 16 and audit=1 order by ontop desc,recommend desc,listorder asc limit 7,6	
[2018-07-04 22:32:15]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where  parentid = 7 and classid != 26 and classid != 27	
[2018-07-04 22:32:15]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where  parentid = 7 limit 5	
[2018-07-04 22:32:15]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_ad where bid=1 and classid=4 order by lmorder asc limit 0,2	
[2018-07-04 22:32:15]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_link where classid = 1 order by lmorder asc,times	
[2018-07-04 22:32:15]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select value from xsmart_sys_config where `key` = 'site_contact'	
====================/ End====================

====================/ Start====================
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_linkage where  parentid = 0 and keyid = 1	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_system where catid=2 and  FIND_IN_SET("1",exception) order by listorder asc, updatetime desc limit 8	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_system where catid=2 and  FIND_IN_SET("2",exception) order by listorder asc, updatetime desc limit 8	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_system where catid=2 and  FIND_IN_SET("3",exception) order by listorder asc, updatetime desc limit 8	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_system where catid=2 and  FIND_IN_SET("4",exception) order by listorder asc, updatetime desc limit 8	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_system where catid=2 and  FIND_IN_SET("5",exception) order by listorder asc, updatetime desc limit 8	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_ad where classid = 1 and (id =45 or id=46 or id=47) and audit =1 order by top desc, recommend desc, times desc limit 0,3	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_star_student where id > 0 order by inputtime desc limit 0,6	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where  classid = 14	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_news where  catid = 14 and audit = 1 order by ontop desc,recommend desc,updatetime desc limit 5	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where  classid = 15	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_news where  catid = 15 and audit = 1 order by ontop desc,recommend desc,updatetime desc limit 5	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_linkage where keyid=23  order by listorder asc	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select value from xsmart_sys_config where `key` = 'site_name'	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select value from xsmart_sys_config where `key` = 'site_keyword'	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select value from xsmart_sys_config where `key` = 'site_meat'	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_ad where bid=1 and classid=5 order by lmorder asc limit 0,1	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where  parentid = 0 order by lmorder asc limit 5	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_ad where  id = 1 and classid = 1 and audit = 1	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_ad where  id = 7	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_news where  catid = 16 and audit=1 order by ontop desc,recommend desc,listorder asc limit 0,6	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_news where  catid = 16 and audit=1 order by ontop desc,recommend desc,listorder asc limit 7,6	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where  parentid = 7 and classid != 26 and classid != 27	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where  parentid = 7 limit 5	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_ad where bid=1 and classid=4 order by lmorder asc limit 0,2	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_link where classid = 1 order by lmorder asc,times	
[2018-07-04 22:34:10]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select value from xsmart_sys_config where `key` = 'site_contact'	
====================/ End====================

====================/ Start====================
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_linkage where  parentid = 0 and keyid = 1	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_system where catid=2 and  FIND_IN_SET("1",exception) order by listorder asc, updatetime desc limit 8	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_system where catid=2 and  FIND_IN_SET("2",exception) order by listorder asc, updatetime desc limit 8	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_system where catid=2 and  FIND_IN_SET("3",exception) order by listorder asc, updatetime desc limit 8	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_system where catid=2 and  FIND_IN_SET("4",exception) order by listorder asc, updatetime desc limit 8	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_system where catid=2 and  FIND_IN_SET("5",exception) order by listorder asc, updatetime desc limit 8	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_ad where classid = 1 and (id =45 or id=46 or id=47) and audit =1 order by top desc, recommend desc, times desc limit 0,3	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_star_student where id > 0 order by inputtime desc limit 0,6	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where  classid = 14	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_news where  catid = 14 and audit = 1 order by ontop desc,recommend desc,updatetime desc limit 5	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where  classid = 15	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_news where  catid = 15 and audit = 1 order by ontop desc,recommend desc,updatetime desc limit 5	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_linkage where keyid=23  order by listorder asc	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select value from xsmart_sys_config where `key` = 'site_name'	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select value from xsmart_sys_config where `key` = 'site_keyword'	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select value from xsmart_sys_config where `key` = 'site_meat'	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_ad where bid=1 and classid=5 order by lmorder asc limit 0,1	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where  parentid = 0 order by lmorder asc limit 5	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_ad where  id = 1 and classid = 1 and audit = 1	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_ad where  id = 7	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_news where  catid = 16 and audit=1 order by ontop desc,recommend desc,listorder asc limit 0,6	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_news where  catid = 16 and audit=1 order by ontop desc,recommend desc,listorder asc limit 7,6	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where  parentid = 7 and classid != 26 and classid != 27	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_article_class where  parentid = 7 limit 5	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_ad where bid=1 and classid=4 order by lmorder asc limit 0,2	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select * from xsmart_link where classid = 1 order by lmorder asc,times	
[2018-07-04 22:34:12]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:No database selected. SQL:select value from xsmart_sys_config where `key` = 'site_contact'	
====================/ End====================

====================/index.php Start====================
[2018-07-07 15:05:42]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:Table 'study.xsmart_skins' doesn't exist. SQL:SELECT * FROM xsmart_skins ORDER BY `sort_num` , `skin_id`	
====================/index.php End====================

====================/index.php?m=courSystem.courseCon&classid=85&sid=32&cid=2 Start====================
[2018-07-07 15:49:32]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:select * from xsmart_users where id=	
====================/index.php?m=courSystem.courseCon&classid=85&sid=32&cid=2 End====================

====================/index.php?m=courSystem.index&couClass=4 Start====================
[2018-07-07 17:38:23]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:select * from xsmart_article_class where  classid = 	
====================/index.php?m=courSystem.index&couClass=4 End====================

====================/index.php?m=courSystem.index&couClass=4 Start====================
[2018-07-07 17:41:58]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:select * from xsmart_article_class where  classid = 	
====================/index.php?m=courSystem.index&couClass=4 End====================

====================/admin.php?m=mgr/admin.login Start====================
[2018-07-08 13:34:54]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:Select * From xsmart_admin_group Where gid=	
[2018-07-08 13:34:54]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:Select * From xsmart_admin_group Where gid=	
====================/admin.php?m=mgr/admin.login End====================

====================/admin.php?m=mgr/admin.chklogin&ajax=1 Start====================
[2018-07-08 13:35:16]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:Select * From xsmart_admin_group Where gid=	
[2018-07-08 13:35:16]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:Select * From xsmart_admin_group Where gid=	
====================/admin.php?m=mgr/admin.chklogin&ajax=1 End====================

====================/admin.php?m=mgr/admin.chklogin&ajax=1 Start====================
[2018-07-08 13:35:26]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:Select * From xsmart_admin_group Where gid=	
[2018-07-08 13:35:26]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:Select * From xsmart_admin_group Where gid=	
====================/admin.php?m=mgr/admin.chklogin&ajax=1 End====================

====================/admin.php?m=mgr/modelForm.infoList&modelid=4&catid=1 Start====================
[2018-07-08 13:35:29]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:Unknown column 'a.catid' in 'where clause'. SQL:SELECT count(*) as num FROM `xsmart_course` as a LEFT JOIN xsmart_course_data as b ON a.id = b.id  where 1=1 and a.catid in (1) 	
[2018-07-08 13:35:29]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:Unknown column 'a.catid' in 'where clause'. SQL:SELECT * FROM xsmart_course as a LEFT JOIN xsmart_course_data as b ON a.id = b.id where 1=1 and a.catid in (1)  order by a.id desc limit 0,200	
====================/admin.php?m=mgr/modelForm.infoList&modelid=4&catid=1 End====================

====================/admin.php?m=mgr/modelForm.infoList&modelid=4&catid=1&router=classes/0/0 Start====================
[2018-07-08 13:36:20]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:Unknown column 'a.catid' in 'where clause'. SQL:SELECT count(*) as num FROM `xsmart_course` as a LEFT JOIN xsmart_course_data as b ON a.id = b.id  where 1=1 and a.catid in (1) 	
[2018-07-08 13:36:20]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:Unknown column 'a.catid' in 'where clause'. SQL:SELECT * FROM xsmart_course as a LEFT JOIN xsmart_course_data as b ON a.id = b.id where 1=1 and a.catid in (1)  order by a.id desc limit 0,200	
====================/admin.php?m=mgr/modelForm.infoList&modelid=4&catid=1&router=classes/0/0 End====================

====================/admin.php?m=mgr/modelForm.infoList&modelid=4&catid=1&router=classes/0/0 Start====================
[2018-07-08 13:36:31]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:Unknown column 'a.catid' in 'where clause'. SQL:SELECT count(*) as num FROM `xsmart_course` as a LEFT JOIN xsmart_course_data as b ON a.id = b.id  where 1=1 and a.catid in (1) 	
[2018-07-08 13:36:31]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:Unknown column 'a.catid' in 'where clause'. SQL:SELECT * FROM xsmart_course as a LEFT JOIN xsmart_course_data as b ON a.id = b.id where 1=1 and a.catid in (1)  order by a.id desc limit 0,200	
====================/admin.php?m=mgr/modelForm.infoList&modelid=4&catid=1&router=classes/0/0 End====================

====================/admin.php?m=mgr/modelForm.infoList&modelid=4&catid=1&router=classes/0/0 Start====================
[2018-07-08 13:37:47]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:Unknown column 'a.catid' in 'where clause'. SQL:SELECT count(*) as num FROM `xsmart_course` as a LEFT JOIN xsmart_course_data as b ON a.id = b.id  where 1=1 and a.catid in (1) 	
[2018-07-08 13:37:47]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:Unknown column 'a.catid' in 'where clause'. SQL:SELECT * FROM xsmart_course as a LEFT JOIN xsmart_course_data as b ON a.id = b.id where 1=1 and a.catid in (1)  order by a.id desc limit 0,200	
====================/admin.php?m=mgr/modelForm.infoList&modelid=4&catid=1&router=classes/0/0 End====================

====================/admin.php?m=mgr/modelForm.infoList&modelid=4&catid=1 Start====================
[2018-07-08 13:37:47]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:Unknown column 'a.catid' in 'where clause'. SQL:SELECT count(*) as num FROM `xsmart_course` as a LEFT JOIN xsmart_course_data as b ON a.id = b.id  where 1=1 and a.catid in (1) 	
[2018-07-08 13:37:47]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:Unknown column 'a.catid' in 'where clause'. SQL:SELECT * FROM xsmart_course as a LEFT JOIN xsmart_course_data as b ON a.id = b.id where 1=1 and a.catid in (1)  order by a.id desc limit 0,200	
====================/admin.php?m=mgr/modelForm.infoList&modelid=4&catid=1 End====================

====================/admin.php?m=mgr/modelForm.infoList&modelid=4&catid=1 Start====================
[2018-07-08 13:40:13]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:Unknown column 'a.catid' in 'where clause'. SQL:SELECT count(*) as num FROM `xsmart_course` as a LEFT JOIN xsmart_course_data as b ON a.id = b.id  where 1=1 and a.catid in (1) 	
[2018-07-08 13:40:13]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:Unknown column 'a.catid' in 'where clause'. SQL:SELECT * FROM xsmart_course as a LEFT JOIN xsmart_course_data as b ON a.id = b.id where 1=1 and a.catid in (1)  order by a.id desc limit 0,200	
====================/admin.php?m=mgr/modelForm.infoList&modelid=4&catid=1 End====================

====================/admin.php?m=mgr/admin.login Start====================
[2018-07-08 13:56:58]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:Select * From xsmart_admin_group Where gid=	
[2018-07-08 13:56:58]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:Select * From xsmart_admin_group Where gid=	
====================/admin.php?m=mgr/admin.login End====================

====================/admin.php?m=mgr/admin.chklogin&ajax=1 Start====================
[2018-07-08 13:57:04]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:Select * From xsmart_admin_group Where gid=	
[2018-07-08 13:57:04]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:Select * From xsmart_admin_group Where gid=	
====================/admin.php?m=mgr/admin.chklogin&ajax=1 End====================

====================/index.php Start====================
[2018-07-08 15:10:41]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:Table 'study.xsmart_skins' doesn't exist. SQL:SELECT * FROM xsmart_skins ORDER BY `sort_num` , `skin_id`	
====================/index.php End====================

====================/admin.php?m=mgr/admin.login Start====================
[2018-07-08 18:45:37]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:Select * From xsmart_admin_group Where gid=	
[2018-07-08 18:45:37]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:Select * From xsmart_admin_group Where gid=	
====================/admin.php?m=mgr/admin.login End====================

====================/admin.php?m=mgr/admin.login Start====================
[2018-07-08 18:45:39]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:Select * From xsmart_admin_group Where gid=	
[2018-07-08 18:45:39]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:Select * From xsmart_admin_group Where gid=	
====================/admin.php?m=mgr/admin.login End====================

====================/admin.php?m=mgr/admin.login Start====================
[2018-07-08 18:45:39]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:Select * From xsmart_admin_group Where gid=	
[2018-07-08 18:45:39]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:Select * From xsmart_admin_group Where gid=	
====================/admin.php?m=mgr/admin.login End====================

====================/index.php?m=courSystem.index&couClass=30 Start====================
[2018-07-08 19:14:46]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:select * from xsmart_article_class where  classid = 	
====================/index.php?m=courSystem.index&couClass=30 End====================

====================/index.php?m=courSystem.index&couClass=4 Start====================
[2018-07-08 19:14:53]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:select * from xsmart_article_class where  classid = 	
====================/index.php?m=courSystem.index&couClass=4 End====================

====================/index.php?m=courSystem.index&couClass=41 Start====================
[2018-07-08 19:14:55]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:select * from xsmart_article_class where  classid = 	
====================/index.php?m=courSystem.index&couClass=41 End====================

====================/index.php?m=courSystem.index&couClass=30 Start====================
[2018-07-08 19:20:14]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:select * from xsmart_article_class where  classid = 	
====================/index.php?m=courSystem.index&couClass=30 End====================

====================/index.php?m=courSystem.index&couClass=3 Start====================
[2018-07-08 19:20:21]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:select * from xsmart_article_class where  classid = 	
====================/index.php?m=courSystem.index&couClass=3 End====================

====================/index.php?m=courSystem.index&couClass=4 Start====================
[2018-07-08 19:20:49]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:select * from xsmart_article_class where  classid = 	
====================/index.php?m=courSystem.index&couClass=4 End====================

====================/index.php?m=courSystem.index&couClass=4 Start====================
[2018-07-08 19:24:15]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:select * from xsmart_article_class where  classid = 	
====================/index.php?m=courSystem.index&couClass=4 End====================

====================/index.php?m=courSystem.index&couClass=4 Start====================
[2018-07-08 19:25:34]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:select * from xsmart_article_class where  classid = 	
====================/index.php?m=courSystem.index&couClass=4 End====================

====================/index.php?m=courSystem.index&couClass=4 Start====================
[2018-07-08 19:25:36]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:select * from xsmart_article_class where  classid = 	
====================/index.php?m=courSystem.index&couClass=4 End====================

====================/index.php?m=courSystem.index&couClass=4 Start====================
[2018-07-08 19:25:37]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:select * from xsmart_article_class where  classid = 	
====================/index.php?m=courSystem.index&couClass=4 End====================

====================/index.php?m=courSystem.index&couClass=4 Start====================
[2018-07-08 19:25:38]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:select * from xsmart_article_class where  classid = 	
====================/index.php?m=courSystem.index&couClass=4 End====================

====================/index.php?m=courSystem.index&couClass=4 Start====================
[2018-07-08 19:25:38]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:select * from xsmart_article_class where  classid = 	
====================/index.php?m=courSystem.index&couClass=4 End====================

====================/index.php?m=courSystem.index&couClass=4 Start====================
[2018-07-08 19:25:38]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:select * from xsmart_article_class where  classid = 	
====================/index.php?m=courSystem.index&couClass=4 End====================

====================/index.php?m=courSystem.index&couClass=4 Start====================
[2018-07-08 19:25:43]:	XXXSMART	0.2	12345	[db]	[error]	[execute]query error:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1. SQL:select * from xsmart_article_class where  classid = 	
====================/index.php?m=courSystem.index&couClass=4 End====================
