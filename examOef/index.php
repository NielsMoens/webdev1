<?php
session_start();

require_once 'config.php';
require_once 'lib/db.php';
require_once 'models/UserModel.php';

// Ingelogde gebruiker ophalen uit de session
//$current_user_id = $_SESSION['user_id'] ?? 0;
//$current_user = ($current_user_id) ? User::getById($current_user_id) : false;


//URI analyseren om de juiste controller in te laden
$request = $_SERVER['REQUEST_URI'];
if (substr($request, 0, strlen(URI)) == URI) {
    $request = substr($request, strlen(URI));
}

$path = explode('/', $request);
print_r($path);
$controller = ( !empty($path[0]) ) ? ucfirst(strtolower($path[0])) : 'Photo';
$method = ( !empty($path[1]) ) ? strtolower($path[1]) : 'index';
$param = ( !empty($path[2]) ) ? $path[2] : null;

$controller_name = $controller . 'Controller';
$controller_path = BASE_DIR . '/controllers/' . $controller_name . '.php';

//html head + header inladen
include BASE_DIR . '/views/_partials/header.php';

//Controller inladen en method aanroepen
if ( file_exists( $controller_path ) ) {
    require_once $controller_path;

    $controller_class = new $controller_name();

    if( method_exists($controller_class, $method) ) {
        $controller_class->$method($param);
    } else {
        echo "Method '$method' does not exist in '$controller'";
    }
}
else {
    echo "$controller does not exist";
}

//html footer inladen
include BASE_DIR . '/views/_partials/footer.php';
