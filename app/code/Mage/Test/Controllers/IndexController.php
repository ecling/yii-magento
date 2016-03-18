<?php
namespace Mage\Test\Controllers;

class IndexController extends \Mage\Core\Controller\Varien\Action{
    public function actionIndex(){
        var_dump($this->getRequest()->get('id'));
    }
    
    public function actionView(){
        var_dump($this->getRequest()->get('id'));
    }
    
}
