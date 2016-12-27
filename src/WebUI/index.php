<?php
/**
 * User: wujunwei
 * Date: 2016/12/27
 * Time: 18:00
 */

require __DIR__.'/../../vendor/autoload.php';

$app = new Slim\App();

$app->get('/', function ($request, $response) {
    $response->write("Hello, SpiderMan");
    return $response;
});

$app->get('/hello/{name}', function ($request, $response, $args) {
    $response->write("Hello, " . $args['name']);
    return $response;
});

$app->run();