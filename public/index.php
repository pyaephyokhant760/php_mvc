<?php
use PixelFix\Framework\Http\Request;
define("BASE_PATH", __DIR__ );

require_once BASE_PATH . '/vendor/autoload.php';

$request = Request::create();


echo "Hello, World!";