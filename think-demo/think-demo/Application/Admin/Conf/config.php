<?php
return array(
     /*数据库配置*/
	 'DB_TYPE' => 'mysql',   //数据库类型
	 'DB_HOST' => '127.0.0.1',  //数据库地址
	 'DB_NAME' => 'think',    //数据库名称
	 'DB_USER' => 'root',   //用户名
	 'DB_PWD'  => '',      //密码
	 
	/*模板配置*/
	'TMPL_PARSE_STRING' => array(
	    '__PUBLIC__' => '/think-demo/Application/Admin/View/Public',
	),

	/*SESSION和COOKIE配置*/
	'SESSION_PREFIX'  => 'think_admin'


);