<?php








use Core\App;
use Core\Database;
use Core\Validator;


$db=App::resolve(Database::class);
$currentUserId = 1;


// find the corresponding note

$note = $db->query('SELECT * FROM notes where id = :id', [
    'id' => $_POST['id']
])->findOrFail();


//authorize that the current user can edit the note

authorize($note['user_id'] === $currentUserId);

$errors=[];

//validate the form
if (!(validator::string($_POST['body'],1,1000))){
    $errors['body']= 'A body of no more than 1000 character  is required';
}

//if no validation errors, update the record in the notes database table.
if(count($errors)) {
    return views('notes/edit.view.php',
    [
        'heading'=> 'Edit Note' ,
        'errors' => $errors,
        'note'   => $note

    ]);
}

$db->query('update notes set body = :body where id= :id',[

    'id'=> $_POST['id'],
    'body'=> $_POST['body']


    ]);


//redirect the user

header('location: /notes');
die();
