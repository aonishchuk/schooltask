<?php
header('Location: index.php');
$user = 'root';
$password = 'root';
$db = 'task';
$host = 'localhost:8889';
$link = mysqli_connect($host, $user, $password, $db) 
        or die("Ошибка " . mysqli_error($link)); 
 

 $id = $_REQUEST['id'];
 echo "$id";
$query = "DELETE FROM task WHERE id=$id";

      
 
    $res = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));      
exit;
?>