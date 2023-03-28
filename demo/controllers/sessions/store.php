<?php


use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
$email = $_POST['email'];
$password = $_POST['password'];

// log in the user if the credentials match
$errors =[];
if(!Validator::email($email)){

    $errors['email'] = 'please provide a valid email address';

}

if (!Validator::string($password, 7, 255)){

    $errors['password'] = 'please provide a valid password';

}
if(! empty($errors)){
    return views('sessions/create.view.php',
        [
            'errors'=>$errors
        ]);
}

//match the credentials

$user =$db->query('select * from users where email = :email',
[
    'email'=>$email
])->find();

if ( $user){
    // we have a user but we dont know if the password provided is right or wrong

    if(password_verify($password,$user['password'])){

        login([
            'email'=>$email
        ]);
        header('location: /');
        exit();
    }
}



views('sessions/create.view.php',
    [
        'errors'=>[
            'email'=>'No matching email address or password'
        ]
    ]);
