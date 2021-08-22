<?php

require_once 'config.php';
require_once 'lib/db.php';

$server = $_SERVER['REQUEST_URI'];

$path = explode('/', $server);

//ucfirst = first letter to capital
$controller = ucfirst(strtolower($path[3]));
$method = ( !empty($path[4])) ? strtolower($path[4]) : 'index';
// path id
$param = ( !empty($path[5])) ? ($path[5]) : null;

$controller_name =$controller . 'Controller';
$controller_path = 'controllers/' . $controller_name . '.php';

include 'views/_partials/header.php';

// Controller in laden en method aanroepen
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
    echo 'das ier ni just eh vriendschap';
}

include 'views/_partials/footer.php';