<?php
include 'Database.php';
include 'utils.php';
$db =new Database();
$statement = $db->query("SELECT * FROM notes");
$notes = $statement->fetchAll();
dd($db);


$navTitle ="Notes";
include 'views/notes.view.php'
?>