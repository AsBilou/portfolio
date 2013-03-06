<?php

require_once __DIR__.'/../vendor/autoload.php';

use Silex\Provider\FormServiceProvider;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

//Crée une nouvelle application
$app = new Silex\Application();

//Affiche les bugs
$app['debug']=true;

//Mise en route de twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

//Mise en route de propel
$app->register(new Propel\Silex\PropelServiceProvider(), array(
    'propel.config_file' => __DIR__ . '/../config/portfolio-conf.php',
    'propel.model_path'  => __DIR__ . '/../src',
));
$app->register(new Silex\Provider\TranslationServiceProvider(), array(
    'translator.messages' => array(),
));

//Mise en route du service formulaire
$app->register(new Silex\Provider\FormServiceProvider());
$app->register(new Silex\Provider\ValidatorServiceProvider());
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

//Mise en route des sessions
$app->register(new Silex\Provider\SessionServiceProvider());

//Mise en route de la sécurité
$app->register(new Silex\Provider\SecurityServiceProvider(), array(
    'security.firewalls' => array(
        'admin' => array(
            'pattern' => '^/admin',
            'http' => true,
            'form' => array('login_path' => '/login', 'check_path' => '/admin/login_check'),
            'users' => array(
                'admin' => array('ROLE_ADMIN', '5FZ2Z8QIkA7UTZ4BYkoC+GsReLf569mSKDsfods6LYQ8t+a8EW9oaircfMpmaLbPBh4FOBiiFyLfuZmTSUwzZg=='),
            ),
            'logout' => array('logout_path' => '/admin/logout',),
        ),
    )));

return $app;

?>