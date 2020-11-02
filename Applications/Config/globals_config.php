<?php
/**
 * Description 全局配置
 * Created by PhpStorm
 * Author: runfang.deng
 * Date:   2020/11/2 10:10
 */
//命令配置
defined('COMMANDS') || define('COMMANDS', ['start', 'stop', 'reload']);//服务操作命令

//目录配置
defined('SEPARATOR') || define('SEPARATOR', '/');
defined('ROOT') || define('ROOT', dirname(__DIR__, 2) . SEPARATOR);
defined('VENDER') || define('VENDER', ROOT . 'vendor/');
defined('APP') || define('APP', 'Applications' . SEPARATOR);
defined('APP_CONFIG') || define('APP_CONFIG', APP . 'Config' . SEPARATOR);//配置文件目录