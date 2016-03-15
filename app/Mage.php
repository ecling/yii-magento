<?php
/*
** Mage类
*/
define('DS',DIRECTORY_SEPARATOR);
define('PS', PATH_SEPARATOR);
define('BP',dirname(dirname(__FILE__)));

$path[] = BP.DS.'lib';
$path[] = BP.DS.'lib'.DS.'Yii';
$path[] = BP.DS.'app'.DS.'code';

$appPath = implode(PS,$path);

set_include_path($appPath . PS . get_include_path());

include_once('Varien/Autoload.php');

Varien_Autoload::register();

final class Mage{
    static private $_app;
    public static function run(){
        self::$_app = new Mage\Core\Model\App();
        self::$_app->run();
    }
    
    public static function getModel(){
        
    }
    
    public static function getResource(){
        
    }
    
    public static function helper(){
        
    }
    
    public static function app(){
        if(!self::$_app){
            self::$_app = new Mage\Core\Model\App();
        }
        return self::$_app;
    }
    
    public static function getControllerInstance($ControllerClassName,$request){
        return new $ControllerClassName($request);
    }
}