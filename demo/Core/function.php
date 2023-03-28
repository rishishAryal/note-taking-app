<?php

use Core\Response;

function dd($value){
    echo "<pre>";

    var_dump($value);
    echo "</pre>";
    die();
}
function abort($code = 404)
{
    http_response_code(404);
    require base_path("views/{$code}.php");
    die();

}

function urlIs($value){

    return $_SERVER['REQUEST_URI']=== $value;

}

function authorize($condition , $status = Response::FORBIDDEN){
    if(!$condition){
        abort($status);
    }
}


function base_path($path){

    return  BASE_PATH . $path;

}


function views($path , $attributes=[]){

    extract($attributes);

    require base_path('views/' . $path);
}


function login($user){

    $_SESSION['user'] = [
        'email'=>$user['email']
    ];

    session_regenerate_id(true);
}


function logout(){

    $_SESSION=[];
    session_destroy();

    $params = session_get_cookie_params();
    setcookie('PHPSESID','',time()-360,$params['path'],$params['domain'],$params['secure'],$params['httponly']);

}
