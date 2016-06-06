<?php
if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    ini_set("session.save_handler", "files");
    session_save_path ("/tmp");
    $file = __DIR__ . $_SERVER['REQUEST_URI'];
    if (is_file($file)) {
        return false;
    }
}

require __DIR__ . '/../vendor/autoload.php';

session_start();

// Instantiate the app
$settings = [
        'displayErrorDetails' => true, // set to false in production
];

$app = new \Slim\App($settings);

$app->get('/', function ($request, $response, $args) {
    // Render index view
    return "hello world";
});

// Run app
$app->run();
