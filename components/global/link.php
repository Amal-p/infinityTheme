<?php

/* title: link.php 
Author: Amal - P
date: 2022-09-29 10:35:27 */


use Core\Core;

$obj = new Core;

$comp = $obj->create( 'global/link.html.twig' ,
    $values
);