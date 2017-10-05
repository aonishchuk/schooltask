<?php
/* После обработки полученных данных
перенаправляем пользователя обратно на страницу с формой */
header('Location: index.php');

$user = 'root';
$password = 'root';
$db = 'task';
$host = 'localhost:8889';
    // подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $db) 
        or die("Ошибка " . mysqli_error($link)); 
  $description = $_REQUEST['taskDescription1'];
    $id = $_REQUEST['id'];

      $query ="UPDATE task SET description='$description' , dateofchange = now() WHERE id = '$id'";
 
    // выполняем запрос
    $res = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));      
exit;
?>