<?php
/* Template Name: Starter */
require 'wp-content/themes/infinityTheme/core/App.php';

use App\App;

$proj = new App();

$route = $proj->route(); //For Routing

$proj->run('region', [
    "head" => $proj->component('head', [
        "title" => 'infinityTheme'
    ]),
    "header" => $proj->component('header', [
        "class" => "navbar navbar-expand-lg navbar-light bg-light",
        "title" => 'infinityTheme',
        "menus" => [
            [
                "link" => home_url(),
                "name" => "Home"
            ],
            [
                "link" => "#",
                "name" => "About"
            ]
        ]
    ]),
    "main" => $proj -> component($route['page'],$route['page_content']),
    "footer" => $proj -> component('footer',[
        "year" => date("Y"),
    ]),

]);