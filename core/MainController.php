<?php

class MainController
{
    use lang;
    protected $controller;
    protected $action;
    protected $params;
    protected $scope;
    
    protected $data = [];

    public function notFoundAction()
    {
        $this->view();
    }

    public function setController($controllerName)
    {
        $this->controller = $controllerName;

    }
    public function setData($data)
    {
        $this->data = $data;

    }
    public function setScope($scope)
    {
        $this->scope = $scope;

    }
    public function setAction($actionName)
    {
        $this->action = $actionName;
    }


    public function setParams($params)
    {
        $this->params = $params;
  
    }
    public function switchLang()
    {
        if (!isset($_SESSION["lang"])) {
            $_SESSION["lang"] = "AR";
        }
        
        if (isset($_POST["lang"])) {
            switch ($_SESSION["lang"]) {
                  case "AR":
                  $_SESSION["lang"] = "EN";
                  break;
                  case "EN":
                  $_SESSION["lang"] = "AR";
                  break;
                  default:
                  $_SESSION["lang"] = "AR";
              }
            //   var_dump($_SESSION["lang"]);
            // if($_SESSION["lang"] == "AR"){
            //     $_SESSION["lang"] = "EN";
            // }else if($_SESSION["lang"] == "EN"){
            //     $_SESSION["lang"] = "AR";
            // }
        }


      

    }
    public function setLang(){
        $lang = $this->lang;
        foreach ($lang as $key => $value) {
            $lang[$key] = $lang[$key][$_SESSION["lang"]];
            
        }
        return $lang;
    }

    protected function layoutContent()
    {
        $lang = $this->setLang();
        ob_start();
        include_once VIEWS_PATH . $this->scope . DS . "layouts" . DS . "main.php";
        return ob_get_clean();
    }
    protected function renderOnlyView($info)
    {
        $lang = $this->setLang();

        $LN = strtolower($_SESSION["lang"]);
        $data = $this->data;
        $view = VIEWS_PATH . $this->scope . DS . $this->controller . DS . $this->action . '.php';
      
        if ($this->action == Router::NOT_FOUND_ACTION || !file_exists($view)) {
            $view = VIEWS_PATH . 'notfound' . DS . 'notfound.view.php';
        }
        foreach ($info as $key => $value) {
            echo $$key = $value;
        }
        ob_start();
        include_once $view;
        return ob_get_clean();
    }
    public function view($info = [])
    {
        $this->switchLang();
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($info);
        echo str_replace("{{content}}", $viewContent, $layoutContent);
    }
}