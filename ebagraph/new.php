<?php
error_reporting(E_ALL);
ini_set( 'display_errors', 1 );
session_start();


if($_SERVER["REQUEST_METHOD"] != "POST"){
    //初回
    require_once('view/new.php');
}else{
    $category = $_POST['category'];
    $body = $_POST['body'];
    require('model/db_connect.php');
    print_r($_POST);
    // フォームからPOSTによって要求された場合
    $stmt = $pdo->prepare("INSERT INTO information(category, body, created_at) VALUES (:category, :body, now())");
    $stmt->bindParam(':category', $category, PDO::PARAM_STR);
    $stmt->bindParam(':body', $body, PDO::PARAM_STR);
        $flag = $stmt->execute();
        if ($flag){
            print('データの追加に成功しました<br>');
        }else{
            print('データの追加に失敗しました<br>');
        }        
    //index.phpにリダイレクト
      header("HTTP/1.1 301 Moved Permanently");
      header("Location: /ebagraph/index.php");
        
    print("書き込みました。戻ります<br>");
    
    //セッションの削除
    session_unset();
    
}
?>
