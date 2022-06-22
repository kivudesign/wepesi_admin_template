<?php

use Wepesi\Controller\homeController;
use Wepesi\Core\Routing\Router;
use Wepesi\Core\View;

    $route=new Router();
    // setup get started pages index
    $route->get('/', function () {
        (new View)->display('home');
    });
    $route->get('/home', [homeController::class,"home"]);

    include "component.php";

    $route->run();