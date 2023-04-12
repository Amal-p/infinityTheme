<?php

/* title: buttons.php 
Author: Amal - P
date: 2022-09-28 12:18:54 */


use Core\Core;

$obj = new Core;

$comp = $obj->create( 'global/buttons.html.twig' ,
    $values
);