<?php

include 'Database.php';
include 'utils.php';

$db = new Database();

// ----Handles note deletion----
// ----Handles note deletion----
$method = $_POST['_method'] ?? '';

if ($method === 'DELETE') {
  $id = $_POST['id'];

  $db->query("DELETE FROM note WHERE id = :id", [':id' => $id]);

  header('Location: notes.php');
  exit;
}
// ------------------------------

// ----Fetches notes from the database----
$notes = $db->query("SELECT * FROM note")->fetchAll(PDO::FETCH_ASSOC);
// ----------------------------------------

$navTitle = "Notes";

include 'views/notes.view.php';