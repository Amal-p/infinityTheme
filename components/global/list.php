<?php

/* title: list.php 
Author: Amal - P
date: 2022-09-28 23:17:45 */


use Core\Core;

$obj = new Core;

$comp = $obj->create( 'global/list.html.twig' ,
    $values
);