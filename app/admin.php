<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Bilou
 * Date: 06/03/13
 * Time: 11:04
 * To change this template use File | Settings | File Templates.
 */

$app->get('/admin', function () use ($app) {
    return $app['twig']->render('template/admin/index.twig', array(
    ));

});

return $app;

?>