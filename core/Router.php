<?php
class Router
{

    const NOT_FOUND_ACTION = 'notFoundAction';
    const NOT_FOUND_CONTROLLER = 'NotFoundController';

    private $controller = 'home';
    private $action = 'default';
    private $params = array();
    private $scope = "site";

    public function __construct()
    {
        $this->_parseUrl();
    }
    private function _parseUrl()
    {
        $url = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
        if (in_array("admin", $url)){
            array_shift($url);
            $this->scope = "admin";
            if(!isset($_SESSION['username'])){
                header('Location:/login');
              }
          }
         
        if(isset($url[0]) && $url[0] != '') {
            $this->controller = $url[0];
        }
        if(isset($url[1]) && $url[1] != '') {
            $this->action = $url[1];
        }
        if(isset($url[2]) && $url[2] != '') {
            $this->params = explode('/', $url[2]);
        }
    }

    public function resolve()
    {
        $controllerClass = ucfirst($this->controller).'Controller';
        $actionName = $this->action . 'Action';
    
        if(!class_exists($controllerClass)) {
            $controllerClass = self::NOT_FOUND_CONTROLLER;
            $this->action = $actionName = self::NOT_FOUND_ACTION;

        }
 
        $controller = new $controllerClass();
        if (!method_exists($controllerClass,$actionName)){
            $this->action = $actionName = self::NOT_FOUND_ACTION;
        }
      
        $controller->setController($this->controller);
        $controller->setAction($this->action);
        $controller->setParams($this->params);
        $controller->setScope($this->scope);
        $controller->$actionName();

    }



}
