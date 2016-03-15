<?php
/*
**
*/
namespace Mage\Core\Controller\Varien;

class Front{
    
    protected $_router = array();
    
    public function init(){
        $default = new \Mage\Core\Controller\Varien\Router\DefaultRouter();
        $this->addRouter('default', $default);
        return $this;
    }
    public function dispatch(){
        foreach ($this->_router as $router){
            if($router->metch($this->getRequest())){
                
            }
        }
        $this->getResponse()->send();
        return $this;
    }
    
    public function getRequest(){
        return \Mage::app()->getRequest();
    }
    
    public function getResponse(){
        return \Mage::app()->getResponse();
    }
    
    public function addRouter($name,$router){
        $this->_router[$name] = $router;
    }
}