<?php
 session_start ();
if (!isset($_SESSION['auth']))
{

exit ("go to <a href='admin111.php'>login page</a>");
}
echo "<a href='adminpanel.php?exit=1'> EXIT </a><br>";
if (isset($_GET['exit']) ==1)

{

unset ($_SESSION['auth']);
session_destroy();
 exit();
}

?>

<html><head><title>Согласования отделов и управлении</title></head><body bgcolor= "#a8d7ff" background= "./img/rD000.gif">
<img src="./img/lombard24.png">


<?php

$connect=@mysql_connect('localhost:3306','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase');  mysql_set_charset("utf8");


if(isset($_POST['submit'])) {
$name =htmlspecialchars ($_POST['name']);
$resulturmopis =htmlspecialchars ($_POST['resulturmopis']);
$name =htmlspecialchars ($_POST['name']);
$resultolopis =htmlspecialchars ($_POST['resultolopis']);
$name =htmlspecialchars ($_POST['name']);
$resultouresopis =htmlspecialchars ($_POST['resultouresopis']);
$name =htmlspecialchars ($_POST['name']);
$resultemsopis =htmlspecialchars ($_POST['resultemsopis']);

	$query1 = mysql_query("INSERT INTO result1(name,resulturmopis) values ('$name','$resulturmopis')") or die (mysql_error());
    //mysql_close();
		//header("Location: msg-result.php");
		
	$query2 = mysql_query("INSERT INTO result2(name,resultolopis) values ('$name','$resultolopis')") or die (mysql_error());
   // mysql_close();
		//header("Location: msg-result.php");
		
			$query3 = mysql_query("INSERT INTO result3(name,resultouresopis) values ('$name','$resultouresopis')") or die (mysql_error());
   // mysql_close();
		//header("Location: msg-result.php");
		
			$query4 = mysql_query("INSERT INTO result4(name,resultemsopis) values ('$name','$resultemsopis')") or die (mysql_error());
    mysql_close();
		header("Location: msg-result.php");
		}



?>

<form method="post" action="result.php">

<a href="adminpanel.php" class="url-min" title="Наш сайт">Назад</a><br><br>



<br> <br> 
<b><u>Согласование</b></u><br><br>



  <b><u>Согласование ОРБ:</b></u>      <input type="text" name="name" required size="100" placeholder='ОРБ' /> <br><br>
  Описание:    <textarea name="resulturmopis" required cols="60" rows="5" placeholder=' Описание ОРБ' >  </textarea></p><br><br><br><br>
  
  
  <b><u>Согласование ОК: </b></u>          <input type="text" name="name" required size="100"  placeholder='ОК' /> <br><br>
  Описание:    <textarea name="resultolopis" required cols="60" rows="5" placeholder=' Описание ОК' >  </textarea></p><br><br><br><br>
   
   
  <b><u>Согласование УИТ:  </b></u>     <input type="text" name="name" required size="100" placeholder='УИТ' /> <br><br>
  Описание:    <textarea name="resultouresopis" required cols="60" rows="5" placeholder=' Описание УИТ' >  </textarea></p><br><br><br><br>
  
  
  <b><u>Согласование УИБ:  </b></u>    <input type="text" name="name" required size="100"placeholder='УИБ' /> <br><br>
  Описание:    <textarea name="resultemsopis" required cols="60" rows="5" placeholder=' Описание УИБ' >  </textarea></p><br><br><br><br>
  

 
 
 <b><u>OPTIMA BANK</b></u><br> <br> 
Телефон+99631200000<br> 
факс+99631200000<br> 
e-mail: optimabank.kg<br> 
Веб-сайт госоргана - www.optima24.kg<br> <br> <br> 
<b><u>_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________</b></u> <br> <br> 

<b><u>_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________</b></u> <br> <br> 
	


<input type="reset" name="reset" value="Отмена"/> <br><br><br>
<input type="submit" name="submit" value="Согласовать"/> <br>



<br><br><br>




<div class="avtor"><br>
<a href="showresult.php" class="url-min" title="Просмотр согласовании">Просмотр согласовании</a><br><br>

<a href="adminpanel.php" class="url-min" title="Назад">Назад</a><br><br>

  </div>

</body>
</html>


