<?php
require_once 'config.php';

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) . 'Controller' : 'HomeController';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controllerFile = __DIR__ . '/controllers/' . $controllerName . '.php';
if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controller = new $controllerName();
    if (method_exists($controller, $action)) {
        $controller->$action();
    } else {
        echo "Action not found.";
    }
} else {
    echo "Controller not found.";
}

//https://github.com/rbaena/mvcPHP.git

