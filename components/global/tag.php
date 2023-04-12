<?php

/* title: tag.php 
Author: Amal - P
date: 2022-09-30 13:51:54 */


use Core\Core;

$obj = new Core;

if(!isset($values["close_tag"])){
    $values["close_tag"] = true;
}
$comp = $obj->create( 'global/tag.html.twig' ,
    $values
);