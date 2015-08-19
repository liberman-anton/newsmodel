<?php

error_reporting(E_ALL);

require_once __DIR__ . '/autoload.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$pathParts = explode('/', $path);

$ctrl = !empty($pathParts[1]) ? ucfirst($pathParts[1]) : 'News';
$act = !empty($pathParts[2]) ? ucfirst($pathParts[2]) : 'All';

$controllerClassName = 'Application\\Controllers\\' . $ctrl;

try {
    $controller = new $controllerClassName;
    $method = 'action' . $act;
    $controller->$method();
} catch (Application\Classes\ModelException $e) {
    $view = new Application\Classes\View();
    $view->error = $e->getMessage();
    //header("HTTP/1.0 404 Not Found");
    $view->display('error.php');
}
