<?php

// change the following paths if necessary

$yii=dirname(__FILE__).'/../yii/framework/yiilite.php';

$config=dirname(__FILE__).'/protected/config/main.php';
//echo $config;
// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
require_once('../FirePHPCore/FirePHP.class.php');

require_once($yii);

Yii::createWebApplication($config)->run();
