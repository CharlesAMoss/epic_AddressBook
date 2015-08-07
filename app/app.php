<?php
    
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/contact.php";

    session_start();
    if (empty($_SESSION['list_of_foo'])) {
        $_SESSION['list_of_foo'] = array();
    }

    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    
    


    $app->get("/", function() use ($app) {
        return $app['twig']->render('foo.html.twig');
    });
 
 	




	return $app;

?>