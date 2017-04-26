<?php

class Router
{

    private $routes;

    public function __construct()
    {
        $routersPath = ROOT . '/config/routes.php';
        $this->routes = include($routersPath);
    }

    /**
     * Returns request string
     * $return string
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return $uri = trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        $uri = $this->getURI();

        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {

                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action' . ucfirst(array_shift($segments));

                $parameters = $segments;


                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';

                if (file_exists($controllerFile) && method_exists($controllerName, $actionName)) {
                    include_once($controllerFile);
                    //создать объект запустить action
                    $controllerObject = new $controllerName;
                    $result = call_user_func_array([$controllerObject, $actionName], $parameters);
                }else {
                    echo 'NotFoundException 404';
                    die();
                }
                }
            }
        }
}