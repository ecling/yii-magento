<?php
namespace Mage\Core\Controller\Varien;

Abstract class Action{
    protected $_request;
    public function __construct($request){
        $this->_request = $request;
    }
    public function dispatch($action){
        $action = 'action'.ucfirst($action);
        $this->$action();
    }
    public function getRequest(){
        return $this->_request;
    }
}