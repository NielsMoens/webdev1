<?php

require_once 'config.php';
require_once 'lib/db.php';

$server = $_SERVER['REQUEST_URI'];

$path = explode('/', $server);

$controller = ucfirst(strtolower($path[3]));
$method = ( !empty($path[4])) ? strtolower($path[4]) : 'index';
// path id
$param = ( !empty($path[3])) ? ($path[3]) : null;

$controller_name =$controller . 'Controller';
$controller_path = 'controllers/' . $controller_name . '.php';
if (file_exists($controller_path)) {
    require_once $controller_path;

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