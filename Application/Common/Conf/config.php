<?php
return array(
	//'配置项'=>'配置值'
	"MODULE_ALLOW_LIST"	=> array('Home','Admin','User'),
	"DEFAULT_MODULE"	=> "Home",	// 默认模块名称
	"DEFAULT_CONTROLLER"=> "Welcome",	//默认控制器
	"DEFAULT_ACTION"    => "index", // 默认操作名称
	"SESSION_AUTO_START"=> "true",	// 是否自动开启Session,

	//数据库配置
	"DB_TYPE"			=> "mysql",
	"DB_HOST"			=> '127.0.0.1',
	"DB_NAME" 			=> "test",
	"DB_USER" 			=> "root",
	"DB_PWD" 			=> "root",
	"DB_PORT" 			=> "3306",
	"DB_PREFIX"			=> "",
	"DB_CHARSET"		=> "urf8",
	

);