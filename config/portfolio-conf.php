<?php
// This file generated by Propel 1.6.9-dev convert-conf target
// from XML runtime conf file /Users/Bilou/GitHub/portfolio/runtime-conf.xml
$conf = array (
  'datasources' => 
  array (
    'portfolio' => 
    array (
      'adapter' => 'mysql',
      'connection' => 
      array (
        'dsn' => 'mysql:host=127.0.0.1;dbname=portfolio',
        'user' => 'root',
        'password' => 'root',
      ),
    ),
    'default' => 'portfolio',
  ),
  'generator_version' => '1.6.9-dev',
);
$conf['classmap'] = include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classmap-portfolio-conf.php');
return $conf;