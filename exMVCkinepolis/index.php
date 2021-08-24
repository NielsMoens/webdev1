<?php

require_once 'config.php';
require_once 'lib/db.php';

$server = $_SERVER['REQUEST_URI'];

$path = explode('/', $server);

print_r($path);
$controller = ( !empty($path[1]) ) ? ucfirst(strtolower($path[1])) : 'Photo';
$method = ( !empty($path[2]) ) ? strtolower($path[2]) : 'index';
$param = ( !empty($path[3]) ) ? $path[3] : null;
//print_r($method);

$controller_name =$controller . 'Controller';
$controller_path = 'controllers/' . $controller_name . '.php';
//print_r($controller_path);
if (file_exists($controller_path)) {
    require_once $controller_path;

    //dynamic controller an example could be: $controller_name === new ProjectController();
    $controller_class = new $controller_name();

    if (method_exists($controller_class, $method)) {
        $controller_class->$method($param);
    } else {
        echo 'das ier ni just eh vriendschap';
    }
} else{
    echo 'das ier ni just eh ';
}
?>