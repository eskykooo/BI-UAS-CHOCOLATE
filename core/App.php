<?php
class App {
    public function __construct() {
        require_once '../routes/web.php';
        $url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';
        
        if (array_key_exists($url, $routes)) {
            $route = explode('@', $routes[$url]);
            $controllerName = $route[0];
            $methodName = $route[1];
        } else {
            $controllerName = 'DashboardController';
            $methodName = 'index';
        }

        require_once '../app/controllers/' . $controllerName . '.php';
        $controller = new $controllerName;
        call_user_func([$controller, $methodName]);
    }
}