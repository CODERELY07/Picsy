<?php
session_start();

include('includes/db.php'); 
include('includes/functions.php'); 


$routes = [
    'home' => 'home.php',
    'login' => 'user/login.php',
    'register' => 'user/register.php',
    'logout' => 'user/logout.php',
    'profile' => 'user/profile.php',
    'gallery' => 'pages/gallery.php',
    'upload' => 'user/upload.php',
    'order' => 'user/order.php',
    'admin' => 'admin/dashboard.php',
    '404' => 'pages/404.php'
];


$route = isset($_GET['page']) ? $_GET['page'] : 'home';


if (array_key_exists($route, $routes)) {
    include($routes[$route]);
} else {
    include($routes['404']);
}
