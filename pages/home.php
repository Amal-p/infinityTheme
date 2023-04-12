
<?php

use App\App;

$proj = new App();


$page_content = [
  "table" => $proj -> component('home/table',[]),
  "terminal" => $proj -> component('home/terminal',[]),
];