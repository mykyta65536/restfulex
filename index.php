<?php

use Api\Calculator;
use Api\Operations\Addition;
use Api\RequestReader;

include_once 'loader.php';

var_dump($_REQUEST);
exit;


$operationCollection = new ArrayObject();
$request = new RequestReader([

]);
$operationCollection->append((new Addition($request)));

$calculator = new Calculator(
    $operationCollection,
    $request
);

$result = $calculator->calculate();



