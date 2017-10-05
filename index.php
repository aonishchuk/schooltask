  <!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MainPage</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="main.css">
  </head>
 

  <body>


  	<div class="container-1">
      <p class="container-1_header"> Список задач </p>
      
      <div class="container-1_form">
       <form action="form.php" method="post" name="forma">
        <fieldset>
        <label for="taskName" class="formText">Задача:</label><br/><div class="emptiness"></div>
        <textarea type="text" name="taskName" size="90" required="Заполните это поле" class="form1"></textarea><br/><div class="emptiness"  ></div>


        <label for="taskDescription" class="formText">Описание задачи:</label><br/><div class="emptiness"></div>

        <textarea type="text" name="taskDescription" size="90" class="form11" required="Заполните это поле"></textarea> <br/><div class="emptiness"></div>


        <label for="taskAuthor" class="formText">Автор задачи:</label><br/><div class="emptiness"></div>
         <textarea type="text" name="taskAuthor" size="90" required="Заполните это поле" class="form1"></textarea><br/><div class="emptiness"  ></div>
         <label for="executor" class="formText">Исполнитель задачи:</label><br/><div class="emptiness"></div>
         <textarea type="text" name="executor" size="90" class="form1"></textarea><br/><div class="emptiness"  ></div>

         <label for="dateofend" class="formText">Дата до которой необходимо выполнить задачу:</label><br/><div class="emptiness"></div>
         <textarea type="text" name="dateofend" size="90" class="form1"></textarea><br/><div class="emptiness"  ></div>
        </fieldset>
      <br/>
        <fieldset>
        <input id="submit" type="submit" value="Добавить задачу в список" class="bottom"><br/>
        </fieldset>
      </form>
        
      </div>
    	
  	</div>  
   <?php $user = 'root';
$password = 'root';
$db = 'task';
$host = 'localhost:8889';
    // подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $db) 
        or die("Ошибка " . mysqli_error($link)); 
  


      $query ='SELECT * FROM  `task`';
 
    // выполняем запрос
    $res = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));      
//$tempCount = 1;  Переменная, по которой определяется каки цветом закрашивать строку таблицы 
$count = 0; 
while($row = mysqli_fetch_array($res)) 
{ 
$count++;  ?>




  <div class="container-2">
          <table class="tab">
            <tr>
              <td class="tab1">
                <div class="container-2_table">
                   <div class="taskName1" >
                    Задача:
                  </div>
                  <div class="input">
                    <?=$row['name'];?>

                    
                    </div>
                    <form action="edit.php" method="post" name="forma">
                    <fieldset>
              <textarea type="text" name="taskDescription1" size="90" class="input1"> 
                    <?=$row['description'];?>
                    </textarea>
                    
        <input type="hidden" name="id" value="<?=$row['id'];?>">
<table><tr><td>
                    <input id="submit1" type="submit" value="Сохранить изменения" class="bottom2" value="<?=$row['id'];?>">

                    </form></td>
                    <td>
                    <?if ( $row['checking'] == "0") { echo ' 
<form action="checked.php" method="post">';?>
 <input type="hidden" name="id" value="<?=$row['id'];?>">
    <input type="submit" name="Submit" class="bottom2" value="Выполнено">
    
    
   
</form> <?}
else { echo '

                    <form action="delete.php" method="post" name="forma">'?>

        <input type="hidden" name="id" value="<?=$row['id'];?>">
                    <input id="submit2" type="submit" value="Удалить задачу" class="bottom2" value="<?=$row['id'];?>">


                    </form><?}?>
                    </td>
                    </tr></table>
                                      

                    
                    </br>

                    <p class="undertext">
                    Автор : <?=$row['author'];?>, Дата создания: <?=$row['date'];?> <?if ( $row['dateofchange'] != NULL) {echo '
                      , Дата изменения: ';  print($row['dateofchange']);} 
                      if ( $row['executor'] != NULL) {echo '
                      , Исполнитель: ';  print($row['executor']);}
                     if ( $row['dateofend'] != '0000-00-00') {echo '
                      , Дата окончания: ';  print($row['dateofend']);}
                      ?>
                    </p></div>
               
            <?PHP 

} 

mysqli_close($link);

?>
          </table>
      </div>

  </body>
  <footer>
    
  </footer>
  </html>