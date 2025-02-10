<?php
namespace app\Routes;

class Router{
    private string $controller = 'app\\controllers\\HomeController';
    private string $method = 'index';
    private array $params = array();

    public function __construct()
    {
        $this->Sender();
    }

    public function Sender()
    {
        $uri = $_SERVER['REQUEST_URI'] ?? '';
        $uri = explode('/', trim(strtolower($uri), '/'));
    // var_dump($uri);
        if (!empty($uri[0])) {
            $controller = ucwords($uri[0]) . 'Controller';
            $controller = "\\app\\Controllers\\" . $controller;
    // echo  $controller;
            if (class_exists($controller)) {
                // echo "HGDSU";
                $this->controller = $controller;
                // var_dump( $this->controller);
            } else {
                require_once dirname(__DIR__, 1) . '\\views\\component\\error404.php';
                exit;
            }
        }
    
        $class = $this->controller;
        $objectController = new $class;
    
        if (isset($uri[1])) {
            // echo "HGDSUSQSQ";
            $method = $uri[1];
    // var_dump($method);
            if (method_exists($objectController, $method)) {
                $this->method = $method;
            } else {
                require_once dirname(__DIR__, 1) . '\Views\pages\error404.php';
                exit;
            }
        }
    
        
        if (isset($uri[2])) { 
            $this->params[] = $uri[2];  
        }
    
        if (!empty($_REQUEST)) {
            // var_dump($_REQUEST);
            $this->convertArray($_REQUEST);
        }
    
        echo call_user_func_array([$objectController, $this->method], $this->params);
    }
    

    private function convertArray($array)
    {

        foreach ($array as $value) {
            array_push($this->params, $value);
        }
    }
}
