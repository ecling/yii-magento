<?php
/*
**
*/
namespace Mage\Core\Model;
class App{
    protected $_initFrontController;
    protected $_response;
    protected $_request;
    public function run(){
        $this->getFrontController()->dispatch();
    }
    
    public function getFrontController(){
        if(!$this->_initFrontController){
            $this->initFrontController();
        }
        return $this->_initFrontController;        
    }
    
    public function initFrontController(){
        $this->_initFrontController = new \Mage\Core\Controller\Varien\Front();
        $this->_initFrontController->init();
        return $this;
    }
    
    public function getResponse(){
        if(!$this->_response){
            $this->_response = new \Mage\Core\Controller\Response\Http();
        }
        return $this->_response;
    }
    
    public function getRequest(){
        if(!$this->_request){
            $this->_request = new \Mage\Core\Controller\Request\Http();
        }
        return $this->_request;
    }
}