<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';
$globals=dirname(__FILE__).'/protected/config/globals.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

define('SLIDE_SHOW','/images/slideshow/');
define('IMAGE_EVENT','/images/event/');
define('TEMP_IMAGE','/images/temp_image/');
$_date = date("Y-m-d");
define('DATE_EVENT','images/event/'.$_date);
define('DATE_EVENT_PATH','/images/event/'.$_date.'/');

require_once($yii);
require_once($globals);
Yii::createWebApplication($config)->run();
