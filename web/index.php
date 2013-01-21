<?php
try {
	$app = require __DIR__ . '/../app/web.php';
	$app->run();
} catch( \Exception $e ) {
	echo $e->getMessage();
}
?>