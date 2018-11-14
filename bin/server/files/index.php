<?php


/*
if(!$_COOKIE['think_language']){
	header("Location: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'?l=zh-CN');
}
*/
//var_dump();
//exit();
define('THINK_PATH', './ThinkPHP/');
define('APP_PATH', './App/');
define('APP_NAME', 'App');
define('APP_DEBUG', true);  
define('BUILD_DIR_SECURE', true);
define('DIR_SECURE_FILENAME', 'default.html');
define('DIR_SECURE_CONTENT', '  ');
function readover(){return true;}//定义一个函数，用于防止跨脚本访问
require (THINK_PATH.'ThinkPHP.php');


?>