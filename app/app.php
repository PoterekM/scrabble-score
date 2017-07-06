<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();


    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/score", function() use ($app){
        $finalScore = new Scrabble;
        $the_outcome = $finalScore->scrabbleAtor($_GET['word']);
        return $app['twig']->render('score.html.twig', array('result' => $the_outcome));
    });
    return $app;
?>
