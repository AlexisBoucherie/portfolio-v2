<?php

require "Controllers/AppController.php";

$parsed_url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$appController = new AppController();

if ('/home' === $parsed_url) {
    $appController->home();
} else {
    echo "Désolé... Cette page n'existe pas";
}
