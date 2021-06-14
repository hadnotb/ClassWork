<?php
require __DIR__ . '/../config.php';
require __DIR__ . '/../vendor/autoload.php';


$path = $_SERVER['PATH_INFO'] ?? '/';
dump($path);



$routes = [];
$routes = [
    
"homepage" => ['path'=>'/',
               'controller'=>'home.php'],
    
"article" => ['path'=>'/article',
                'controller'=>'article.php'],
                


"categorie"=> ['path' => '/categorie',
                    'controller' => 'categorie.php'],

"signup"=> ['path' => '/signup',
                    'controller' => 'signup.php'],

"login"=> ['path' => '/login',
                    'controller' => 'login.php'],

"logout"=> ['path' => '/logout',
                    'controller' => 'logout.php'],                  

];
define('ROUTES', $routes);

$controller = null;
foreach ($routes as $route) {
   if ($route['path'] === $path) {
       $controller = $route['controller'];
       break;
   }
}

$controller = $controller ?? '404.php';

ob_start();


require CONTROLLER_DIR . '/' . $controller;
$content = ob_get_clean();
echo $content ;



// require('../controller/article.php');