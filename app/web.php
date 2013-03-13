<?php

$app = require __DIR__.'/bootstrap.php';

use Symfony\Component\HttpFoundation\Request;

//Appel le fichier twig en fonction de la page
$app->get('/', function () use ($app) {
    return $app->redirect($app['url_generator']->generate('site_index'));

});

$app->get('/accueil', function () use ($app) {
    $etudes = PortfolioEtudeQuery::create()->orderByStart('DESC')->find();
    $diplomes = PortfolioDiplomeQuery::create()->orderByYears('DESC')->find();
    $companies = PortfolioCompanyQuery::create()->orderByStart('DESC')->find();
    $skills = PortfolioSkillsQuery::create()->orderById('ASC')->find();
    $formations = PortfolioFormationQuery::create()->orderByYears('DESC')->find();
    $interests = PortfolioInterestQuery::create()->orderById('ASC')->find();

    return $app['twig']->render('template/site/index.twig', array(
        'etudes'=>$etudes,
        'diplomes'=>$diplomes,
        'companies'=>$companies,
        'skills'=>$skills,
        'formations'=>$formations,
        'interests'=>$interests,
    ));

})->bind('site_index');

$app->get('/sites', function () use ($app) {
    $sites = PortfolioArticleQuery::create()->filterByCategorie(1)->orderById()->find();
    return $app['twig']->render('template/site/sites.twig', array(
        'sites'=>$sites,
    ));

})->bind('article_site');

$app->get('/applications', function () use ($app) {

    return $app['twig']->render('template/site/index.twig', array(

    ));

})->bind('article_appli');

$app->get('/projets', function () use ($app) {

    return $app['twig']->render('template/site/index.twig', array(

    ));

})->bind('article_projet');

$app->get('/contact', function () use ($app) {

    return $app['twig']->render('template/site/index.twig', array(

    ));

})->bind('site_contact');

$app->get('/404', function () use ($app) {

    return $app['twig']->render('template/404.twig', array(

    ));

})->bind('404');

return $app;

?>