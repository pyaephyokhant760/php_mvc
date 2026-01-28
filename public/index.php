<?php
use PixelFix\Framework\Http\Request;
use PixelFix\Framework\Http\Response;
define("BASE_PATH", __DIR__ );

require_once BASE_PATH . '/../vendor/autoload.php';

$request = Request::create();
// dd($request);

$content = "hello, world!";

$response = new Response($content);

$response->send();

