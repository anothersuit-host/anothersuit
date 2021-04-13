<?php
require 'vendor/Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim(array(
	'templates.path' => './views'
));

// Set Base Url
$app->baseUrl = 'https://anothersuit.000webhostapp.com/addisontruck';
// $app->baseUrl = 'http://addisontruck.com';

$app->view->setData('baseUrl', $app->baseUrl);

// Set Default timezone
date_default_timezone_set('America/Toronto');

/*--------------------------------------------------*/

// Routes
$app->get('/', function () use ($app) {
	$app->render('home.php',
		array('currentPage' => 'home')
	);
});

$app->get('/products', function () use ($app) {
	$app->render('products.php',
		array('currentPage' => 'products')
	);
});


$app->get('/about', function () use ($app) {
	$app->render('about.php',
		array('currentPage' => 'about')
	);
});

$app->get('/contact', function () use ($app) {
	$app->render('contact.php',
		array('currentPage' => 'contact')
	);
});

$app->post('/contact', function () use ($app) {
	$app->render('contact.php',
		array('currentPage' => 'contact')
	);
});

/*--------------------------------------------------*/

// Init
$app->run();