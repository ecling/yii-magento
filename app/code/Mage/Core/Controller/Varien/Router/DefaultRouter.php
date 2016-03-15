<?php
namespace Mage\Core\Controller\Varien\Router;

class DefaultRouter extends \Mage\Core\Controller\Varien\Router\AbstractRouter{
    public function metch($request){
        $pathinfo = trim($request->pathinfo,'/');
        $p = explode('/',$pathinfo);

        $moduleName = urldecode($p['0']);
        
        $controllerName = isset($p['1'])?urldecode($p['1']):'index';
        
        $aciton = isset($p['2'])?urldecode($p['2']):'index';
        
        $request->setModuleName($moduleName)
            ->setControllerName($controllerName)
            ->setActionName($aciton);
            
        $ControllerClassName = $this->getControllerClassName($request);
        
        $controllerInstance = \Mage::getControllerInstance($ControllerClassName,$request);
        
        for($i=3;$i<count($p);$i+=2){
            $request->setParam($p[$i],isset($p[$i+1])?urldecode($p[$i+1]):'');
        }
        
        $action = $request->getActionName();
        $controllerInstance->dispatch($action);
        
    }
    
    protected function getControllerClassName($request){
        $Classname = 'Mage\\'.ucfirst($request->getModuleName()).'\\Controllers\\'.ucfirst($request->getControllerName()).'Controller';
        return $Classname;
    }
}