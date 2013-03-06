<?php

$app = require __DIR__.'/bootstrap.php';

use Symfony\Component\HttpFoundation\Request;

//Appel le fichier twig en fonction de la page
$app->get('/', function () use ($app) {
    $texte = 'test';
    return $app['twig']->render('template/site/index.twig', array(
        'texte'=>$texte,
    ));

});

$app->get('/accueil', function () use ($app) {
    $texte = 'test';
    return $app['twig']->render('template/site/index.twig', array(
        'texte'=>$texte,
    ));

});

return $app;

?>