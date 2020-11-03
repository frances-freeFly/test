<?php
/**
 * Description 全局配置
 * Created by PhpStorm
 * Author: runfang.deng
 * Date:   2020/11/2 10:10
 */
//服务设置
defined('SYSTEM_NAME') || define('SYSTEM_NAME', $_SERVER['SYSTEM_NAME'] ?? 'order_server');

//命令配置
defined('COMMANDS') || define('COMMANDS', ['start', 'stop', 'reload']);//服务操作命令

//目录配置
defined('SEPARATOR') || define('SEPARATOR', '/');
defined('ROOT') || define('ROOT', dirname(__DIR__, 2) . SEPARATOR);
defined('VENDER') || define('VENDER', ROOT . 'vendor'.SEPARATOR);
defined('APP') || define('APP', 'Applications' . SEPARATOR);
defined('APP_CONFIG') || define('APP_CONFIG', APP . 'Config' . SEPARATOR);//配置文件目录
defined('LOG_PATH') || define('LOG_PATH', ROOT .'wwwlogs'.SEPARATOR);//日志文件目录

