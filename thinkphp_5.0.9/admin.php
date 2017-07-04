<?php  
	// ��̨Ӧ������ļ�  
	  
	// ���PHP����  
	

use Think\App;

if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');  
	  
	// ��������ģʽ ���鿪���׶ο��� ����׶�ע�ͻ�����Ϊfalse  
	define('APP_DEBUG',True);  
	  
	//�󶨲����ɺ�̨Ŀ¼��  
	define('BIND_MODULE','Admin');  
	  
	define ('THINK_PATH','./ThinkPHP/');
	define ('APP_NAME','home');
			// ����Ӧ��Ŀ¼  ������Application�ļ��У���������ĿĿ¼�ṹ��
	define('APP_PATH','./Application/'); 
				
	// ����ThinkPHP����ļ�  
	require_once THINK_PATH.'start.php';
			App::run();

?>