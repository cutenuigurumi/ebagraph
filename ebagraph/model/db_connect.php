<?php

//データベースに接続
$dsn = 'mysql:dbname=graph;host=127.0.0.1';
$user = 'root';
$password = 'ned5725';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>
