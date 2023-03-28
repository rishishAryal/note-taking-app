<?php

use Core\App;
use Core\Database;


$db=App::resolve(Database::class);


$config = require base_path("config.php") ;
$db = new Database($config['database']);



$notes =$db ->query('SELECT * FROM notes ') ->get();


views("notes/index.view.php",[
    "heading"=>'Notes',
    'notes'=>$notes
]);
