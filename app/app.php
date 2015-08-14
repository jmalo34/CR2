<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    // check file names methods etc
     $app->get("/view_instances", function() use($app) {
         $my_RepeatCounter = new RepeatCounter;
    //     $instances_within = $my_RepeatCounter->makeCountVonCount($_GET['string']);
    //      return $app['twig']->render('instances_counted.html.twig', array('result' => $instances_counted));
     });

    return $app;
 ?>
