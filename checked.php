<?php
header('Location: index.php');

	$user = 'root';
$password = 'root';
$db = 'task';
$host = 'localhost:8889';
    // подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $db) 
        or die("Ошибка " . mysqli_error($link)); 
    $id = $_REQUEST['id'];

      $query ="UPDATE task SET checking = '1' WHERE id = '$id'";
 
    // выполняем запрос
    $res = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));


exit;
?>