<?php

class Router
{
    private function getURI()
    {
        if(isset($_SERVER['REQUEST_URI']))
            return trim($_SERVER['REQUEST_URI']);
    }

    public static function start()
    {
        $controllerName = 'MainController';
        $actionName = 'actionIndex';
        $uri = self::getURI();

        $rotes = explode('/', $uri);

        if(!empty($rotes[1])) {
            $controllerName = $rotes[1] . 'Controller';
        }
        if(!empty($rotes[2])) {
            $actionName =  'Action' . ucfirst($rotes[2]);
        }

        $controllerFilePath = ROOT . '/controllers/' . $controllerName . '.php';

        if(file_exists($controllerFilePath)) {
            include $controllerFilePath;

            $controller = new $controllerName;

            if(method_exists($controller, $actionName)) {
                $controller->$actionName();
            }
            else {
                header('Status: 404 Not Found');
                echo '<h1>404 Not Found</h1>';
            }
        }
        else {
            header('Status: 404 Not Found');
            echo '<h1>404 Not Found</h1>';
        }
    }
}