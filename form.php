<?php
header('Location: index.php');

  $user = 'root';
$password = 'root';
$db = 'task';
$host = 'localhost:8889';
$link = mysqli_connect($host, $user, $password, $db) 
        or die("Ошибка " . mysqli_error($link)); 

     $taskName = $_REQUEST['taskName'];
$taskDescription = $_REQUEST['taskDescription'];
$taskAuthor = $_REQUEST['taskAuthor'];
$ex = $_REQUEST['executor'];
$dat = $_REQUEST['dateofend'];

    $query ="INSERT INTO task VALUES(NULL,'$taskName', '$taskDescription', '$taskAuthor', now(), now(), 0, '$ex', '$dat')";
     
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
   
    mysqli_close($link);
exit;
?>




