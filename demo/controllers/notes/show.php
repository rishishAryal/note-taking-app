<?php


use Core\App;
use Core\Database;


$db=App::resolve(Database::class);
$currentUserId = 1;



    $note = $db->query('SELECT * FROM notes where id = :id', [
        'id' => $_GET['id']
    ])->findOrFail();

    authorize($note['user_id'] === $currentUserId);

    views("notes/show.view.php", [
        "heading" => 'Note',
        'note' => $note
    ]);
