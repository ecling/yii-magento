<?php
namespace Mage\Core\Controller\Request;

class Http extends \yii\web\Request{
    protected $_module;
    protected $_controller;
    protected $_action;
    
    public function setModuleName($name){
        $this->_module = $name;
        return $this;
    }
    
    public function setControllerName($name){
        $this->_controller = $name;
        return $this;
    }
    
    public function setActionName($name){
        $this->_action = $name;
        return $this;
    }
    
    public function getModuleName(){
        return $this->_module;
    }
    
    public function getControllerName(){
        return $this->_controller;
    }
    
    public function getActionName(){
        return $this->_action;
    }
    
    public function setParam($name,$value){
        $params = $this->getQueryParams();
        $params[$name] = $value;
        $this->setQueryParams($params);
        return $this;
    }
}