<?php

use Core\Core;

$obj = new Core;


$comp = $obj->create(
    '<h1>{{ heading }}</h1>',
    $values
);
