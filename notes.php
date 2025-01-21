<?php
include 'Database.php';
include 'utils.php';
$db =new Database();
$statement = $db->query("SELECT * FROM note");
$note = $statement->fetchAll();

dd($note);


$navTitle ="Notes";
include 'views/notes.view.php'
?>