<?php
require __DIR__ . '/../../vendor/autoload.php';

$view = new Spindle\View('template.phtml', __DIR__);
$view->title = 'example 3';
$view->data = range(1, 4);

echo $view->render();
