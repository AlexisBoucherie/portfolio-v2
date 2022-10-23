<?php

require "Controllers/AppController.php";

$parsed_url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$appController = new AppController();

switch ($parsed_url) {
    case '/':
    case '/home':
        $appController->home();
        break;
    case '/about':
        $appController->about();
        break;
    case '/projects':
        $appController->projects();
        break;
    case '/contacts':
        $appController->contacts();
        break;
    default:
        $appController->pageNotFound();
}