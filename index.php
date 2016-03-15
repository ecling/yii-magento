<?php
/*
** 入口文件
**
*/

/**
 * 错误报告
 */
error_reporting(E_ALL | E_STRICT);

/**
 * 定义根目录常量
 */
define('MAGENTO_ROOT', getcwd());

$mageFilename = MAGENTO_ROOT . '/app/Mage.php';

include_once($mageFilename);

Mage::run();
