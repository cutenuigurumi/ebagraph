<?php

//デバッグ用å
error_reporting(E_ALL);
ini_set( 'display_errors', 1 );
session_start();

require('model/db_connect.php');

$stmt = $pdo->query("SELECT * FROM graph.information ORDER BY created_at ASC");
$results = array();
while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
    $results[] = $row;
}

require_once('view/index.php');


?>
