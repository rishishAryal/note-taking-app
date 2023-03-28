<?php


use Core\Validator;

require  base_path('/Core'."/Validator.php");

use Core\App;
use Core\Database;


$db=App::resolve(Database::class);
$errors=[];

if (!(validator::string($_POST['body'],1,1000))){
    $errors['body']= 'A body of no more than 1000 character  is required';
    }
    if(!empty($errors)) {

        views("notes/create.view.php",[
            "heading"=>' Create Note',
            'errors'=> $errors
        ]);
    }
    else {


        $db->query('INSERT INTO notes(body,user_id) VALUES(:body,:user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
        header('location: /notes');
        die();
