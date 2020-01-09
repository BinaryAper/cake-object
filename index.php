<?php
require_once __DIR__ . '/vendor/autoload.php';

$hello = new \Binaper\CakeObject\Hello();

echo $hello->say();

echo PHP_EOL;

var_dump($hello instanceof stdClass);