<?php 
use Core\Core;

$obj = new Core;

$comp = $obj->create(
    'header.html.twig', $values
);