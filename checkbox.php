<?php
header('Location: index.php');
if(isset($_POST['checked']) && 
   $_POST['checked'] == 'true') 
{
	$user = 'root';
$password = 'root';
$db = 'task';
$host = 'localhost:8889';
    // подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $db) 
        or die("Ошибка " . mysqli_error($link)); 
    $id = $_REQUEST['id'];

      $query ="UPDATE task SET checking= 1 , dateofchange = now() WHERE id = '$id'";
 
    // выполняем запрос
    $res = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

}
exit;
?>