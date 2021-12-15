<?php

require_once "vendor/autoload.php";

use Digital\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipCode('69023022');

print_r($resultado);