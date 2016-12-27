<?php
/**
 * User: wujunwei
 * Date: 2016/12/27
 * Time: 18:00
 */

require __DIR__.'/../../vendor/autoload.php';

$app = new Slim\App();

$app->get('/', function ($request, $response, $args) {
    $response->write("Hello, SpiderMan");
    return $response;
});

$app->get('/testParam', function ($request, $response, $args) {
    $myvar1 = $req->getParam('myvar'); //检查 _GET 和 _POST [不遵循 PSR 7]
    $myvar2 = $req->getParsedBody()['myvar']; //检查 _POST  [遵循 PSR 7]
    $myvar3 = $req->getQueryParams()['myvar']; //检查 _GET [遵循 PSR 7]
});

$app->get('/hello/{name}', function ($request, $response, $args) {
    $response->write("Hello, " . $args['name']);
    return $response;
});

$app->run();