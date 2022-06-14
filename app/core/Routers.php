<?php
namespace App\core\Routers;

use CoffeeCode\Router\Router;
use App\controllers\FormController;
use App\controllers\PageController;

$router = new Router('http://localhost/orcasiteproject');
$router->namespace("Test");

$router->group(null);
$router->get("/", function(){
    echo PageController::pageControl('01.php');
});

$router->post("/{sendForm}", function($sendForm){
    return FormController::formControl($sendForm);
    // Para uma Query abaixo. Para enviar ARRAY em cima. 
    // return PostController::postControl($sendForm['sendForm']);
});


$router->dispatch();

// var_dump($router);