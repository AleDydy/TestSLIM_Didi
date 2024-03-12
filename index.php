<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
require __DIR__ . '/vendor/autoload.php';
include_once "DispositivoDiAllarme.php";
include_once "Impianto.php";
include_once "Rilevatore.php";
include_once "RilevatoreDiPressione.php";
include_once "RilevatoreDiUmidita.php";
include_once "controllers/ImpiantoController.php";
include_once "controllers/DispositiviDiAllarmeController.php";

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->get('/impianto', 'ImpiantoController:index');

$app->get('/dispositivi_di_allarme', 'DispositiviDiAllarmeController:index');


$app->run();
