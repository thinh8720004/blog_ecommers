<?php
class Main
{
    public $url;
    public $controllerName = "index";
    public $methodName = "index";
    public $controllerPath = "app/controllers/";
    public $controller;
    public function __construct()
    {
        $this->getURL();
        $this->loadController();
        $this->callMethod();
    }

    public function getURL()
    {
        $this->url = isset($_GET['url']) ? $_GET['url'] : NULL;
        if ($this->url != NULL) {
            $this->url = rtrim($this->url, '/');
            $this->url = explode('/', filter_var($this->url, FILTER_SANITIZE_URL));
        } else {
            unset($url);
        }
    }

    public function loadController()
    {
        if (!isset($this->url[0])) {
            include $this->controllerPath.$this->controllerName.'.php';
            $this->controller = new $this->controllerName();
        } else {
            $this->controllerName = $this->url[0];
            $fileName = $this->controllerPath.$this->controllerName.'.php';
            if (file_exists($fileName)) {
                include $fileName;
                if (class_exists($this->controllerName)) {
                    $this->controller = new $this->controllerName();
                } else {

                }
            } 
            else {
                
            }
        }
    }

    public function callMethod()
    {
        if (isset($this->url[2])) {
            $this->methodName = $this->url[1];
            if (method_exists($this->controller, $this->methodName)) {
                $this->controller->{$this->methodName}($this->url[2]);
            } else {
                header("Location:".BASE_URL."/index/notFound");
            }
        } else {
            if (isset($this->url[1])) {
                $this->methodName = $this->url[1];
                if (method_exists($this->controller, $this->methodName)) {
                    $this->controller->{$this->methodName}();
                } else {
                    header("Location:".BASE_URL."/index/notFound");
                }
            } else {
                if (method_exists($this->controller, $this->methodName)) {
                    $this->controller->{$this->methodName}();
                } else {
                    header("Location:".BASE_URL."/index/notFound");
                }
                
            }
        }
    }
}
