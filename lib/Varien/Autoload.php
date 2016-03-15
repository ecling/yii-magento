<?php
/*
**自动加载类文件
*/
class Varien_Autoload{
    static private $_instance;
    static public function instance(){
        if(!self::$_instance){
            self::$_instance = new Varien_Autoload;
        }
        return self::$_instance;
    }
    static public function register(){
        spl_autoload_register(array(self::instance(), 'autoload'));
    }
    
    public function autoload($class){
        $classFile = str_replace(' ', DIRECTORY_SEPARATOR, ucwords(str_replace('_', ' ', $class)));
        $classFile .= '.php';
        //var_dump($classFile);
        include $classFile;
    }
    
}