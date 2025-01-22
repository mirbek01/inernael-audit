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

<html><head><title>Составление  отчетов всех сразу</title></head><body>
<body bgcolor= "#01DFD7" background= "./img/.png"><img src="./img/lombard24.png">
<br>


<?php

$connect=@mysql_connect('localhost:3306','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase'); 

mysql_set_charset("utf8");


if(isset($_POST['submit'])) {
$Audittype =htmlspecialchars ($_POST['Audittype']);
$opis11 =htmlspecialchars ($_POST['opis11']);
$nomerotcheta =htmlspecialchars ($_POST['nomerotcheta']);
$auditna =htmlspecialchars ($_POST['auditna']);
$naimenovanieotcheta =htmlspecialchars ($_POST['naimenovanieotcheta']);
$resheniepravlenie =htmlspecialchars ($_POST['resheniepravlenie']);
$dataotcheta =htmlspecialchars ($_POST['dataotcheta']);
$narushenie =htmlspecialchars ($_POST['narushenie']);
$meropiatia =htmlspecialchars ($_POST['meropiatia']);
$otvetctvenoepodrazdel =htmlspecialchars ($_POST['otvetctvenoepodrazdel']);
$auditori =htmlspecialchars ($_POST['auditori']);
$liniacompitenci =htmlspecialchars ($_POST['liniacompitenci']);
$reiting =htmlspecialchars ($_POST['reiting']);
$pervonachalnidataispolenie =htmlspecialchars ($_POST['pervonachalnidataispolenie']);
$status =htmlspecialchars ($_POST['status']);
$novaiadataispolnenia =htmlspecialchars ($_POST['novaiadataispolnenia']);
$monitoringperiod =htmlspecialchars ($_POST['monitoringperiod']);
$rassilka =htmlspecialchars ($_POST['rassilka']);
$eladressrassilki =htmlspecialchars ($_POST['eladressrassilki']);
$komment =htmlspecialchars ($_POST['komment']);
$neophodimiecorrectmeri =htmlspecialchars ($_POST['neophodimiecorrectmeri']);
$opis1 =htmlspecialchars ($_POST['opis1']);
$opis2 =htmlspecialchars ($_POST['opis2']);
$opis3 =htmlspecialchars ($_POST['opis3']);
$opis4 =htmlspecialchars ($_POST['opis4']);
$opis5 =htmlspecialchars ($_POST['opis5']);
$opis6 =htmlspecialchars ($_POST['opis6']);
$opis7 =htmlspecialchars ($_POST['opis7']);
$opis8 =htmlspecialchars ($_POST['opis8']);




	$query = mysql_query("INSERT INTO audit(Audittype,opis11,nomerotcheta,auditna,naimenovanieotcheta,resheniepravlenie,dataotcheta,narushenie,meropiatia,otvetctvenoepodrazdel,auditori,liniacompitenci,reiting,pervonachalnidataispolenie,status,novaiadataispolnenia,monitoringperiod,rassilka,eladressrassilki,komment,neophodimiecorrectmeri,opis1,opis2,opis3,opis4,opis5,opis6,opis7,opis8) values('$Audittype','$opis11','$nomerotcheta','$auditna','$naimenovanieotcheta','$resheniepravlenie','$dataotcheta','$narushenie','$meropiatia','$otvetctvenoepodrazdel','$auditori','$liniacompitenci','$reiting','$pervonachalnidataispolenie','$status','$novaiadataispolnenia','$monitoringperiod','$rassilka','$eladressrassilki','$komment','$neophodimiecorrectmeri','$opis1','$opis2','$opis3','$opis4','$opis5','$opis6','$opis7','$opis8')") or die (mysql_error());
  
   mysql_close();
		header("Location: msg15.php");
				
	

	
	}



?>

<form method="post" action="1.php">

<a href="adminpanel.php" class="url-min" title="Наш сайт">Назад</a><br><br>

<?php //$textfile = "https://zaiaviteli-basrmir.nas.gov.kg//Filedata/111.txt"; //путь к файлу

//if ($quotes = @file("$textfile")) {$quote = rand(0, sizeof($quotes)-0);}else{echo ("Нет рандомного контента");} //вывод сообщения, если файл не найден 
//if ($quotes = @file("$textfile")) {$quote = rand(0, sizeof($quotes)-1);}else{echo ("Нет рандомного контента");} //вывод сообщения, если файл не найден 
//if ($quotes = @file("$textfile")) {$quote = rand(0, sizeof($quotes)-1);}else{echo ("Нет рандомного контента");} //вывод сообщения, если файл не найден 
//if ($quotes = @file("$textfile")) {$quote = rand(0, sizeof($quotes)-1);}else{echo ("Нет рандомного контента");} //вывод сообщения, если файл не найден 

/*if ($file = file('https://zaiaviteli-basrmir.nas.gov.kg//Filedata/111.txt'))
{ 
mt_srand ((float) microtime() * 1000000); 
$random = mt_rand(0,count($file) - 1); 
$random1 = mt_rand(0,count($file) - 1);
$random2 = mt_rand(0,count($file) - 1);
$random3 = mt_rand(0,count($file) - 1);
$random4 = mt_rand(0,count($file) - 1);
$random5 = mt_rand(0,count($file) - 1);
$random6 = mt_rand(0,count($file) - 1);
$random7 = mt_rand(0,count($file) - 1);
$random8 = mt_rand(0,count($file) - 1);
$random9 = mt_rand(0,count($file) - 1);
//echo '<br>'.$file[$random].$file[$random1].$file[$random2].$file[$random3].$file[$random4].$file[$random5].$file[$random6].$file[$random7].$file[$random8].$file[$random9].'<br>';
}else{echo ('Нет рандомного контента'); //вывод сообщения, если файл не найден
}
*/


// читаем файл в массив
$fopen=@file("/wamp/www/optimabank-dba.kg/Filedata/1.txt");
// номер строки (напоминаем, что php считает с 0,
//т.е. данный скрипт выведет вторую строку)
//$need="1";  
//print $fopen[$need];

// или сразу
/*print "$fopen[0]";
print "$fopen[1]";
print "$fopen[2]";*/
?>


<br> <br> 
<b><u>СТАТИСТИЧЕСКАЯ ОТЧЕТНОСТЬ ПО МОНИТОРИНГУ МЕР</b></u><br><br>
<b><u>ОПТИМА БАНК   Административная (ведомственная) статистическая отчетность:</b></u><br> <br> 
Телефон+996312111111<br> 
факс+996312000000<br> 
e-mail: hr@optimabank.kg<br> 
Веб-сайт банка - www.optimabank.kg <br> <br> <br> 
<b><u>_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________</b></u> <br> <br> 

Audit type&nbsp;&nbsp;<input type="text" name="Audittype" required size="70 " value="<?php echo $fopen[0];?>" placeholder='' /> <br><br>
#&nbsp;&nbsp;<input type="text" name="opis11" required size="70 " value="<?php echo $fopen[1];?>" placeholder='#' /> <br><br>
Номер отчета&nbsp;&nbsp;<input type="text" name="nomerotcheta" required size="70 " value="<?php echo $fopen[2];?>" placeholder='' /> <br><br>
Аудит на&nbsp;&nbsp;<input type="text" name="auditna" required size="70 " value="<?php echo $fopen[3];?>" placeholder='' /> <br><br>
Наименование отчета&nbsp;&nbsp;<input type="text" name="naimenovanieotcheta" required size="70 " value="<?php echo $fopen[4];?>" placeholder='' /> <br><br>
Решение Правления&nbsp;&nbsp;<input type="text" name="resheniepravlenie" required size="70 " value="<?php echo $fopen[5];?>" placeholder='' /> <br><br>
Дата отчета&nbsp;&nbsp;<input type="text" name="dataotcheta" required size="70 " value="<?php echo $fopen[6];?>" placeholder='' /> <br><br>
Нарушение&nbsp;&nbsp;<input type="text" name="narushenie" required size="70 " value="<?php echo $fopen[7];?>" placeholder='Нарушение' /> <br><br>
Мероприятие&nbsp;&nbsp;<input type="text" name="meropiatia" required size="70 " value="<?php echo $fopen[8];?>" placeholder='Мероприятие' /> <br><br>
Ответственное подразделение&nbsp;&nbsp;<input type="text" name="otvetctvenoepodrazdel" required size="70 " value="<?php echo $fopen[9];?>" placeholder='' /> <br><br>
Аудиторы&nbsp;&nbsp;<input type="text" name="auditori" required size="70 " value="<?php echo $fopen[10];?>" placeholder='' /> <br><br>
Линия компетенции&nbsp;&nbsp;<input type="text" name="liniacompitenci" required size="70 " value="<?php echo $fopen[11];?>" placeholder='' /> <br><br>
Рейтинг&nbsp;&nbsp;<input type="text" name="reiting" required size="70 " value="<?php echo $fopen[12];?>" placeholder='' /> <br><br>
Первоначальная дата исполнения&nbsp;&nbsp;<input type="text" name="pervonachalnidataispolenie" required size="70 " value="<?php echo $fopen[13];?>" placeholder='' /> <br><br>
Статус&nbsp;&nbsp;<input type="text" name="status" required size="70 " value="<?php echo $fopen[14];?>" placeholder='' /> <br><br>
Новая дата исполнения&nbsp;&nbsp;<input type="text" name="novaiadataispolnenia" required size="70 " value="<?php echo $fopen[15];?>" placeholder='' /> <br><br>
monitoring period&nbsp;&nbsp;<input type="text" name="monitoringperiod" required size="70 " value="<?php echo $fopen[16];?>" placeholder='' /> <br><br>
рассылка&nbsp;&nbsp;<input type="text" name="rassilka" required size="70 " value="<?php echo $fopen[17];?>" placeholder='' /> <br><br>
эл.адрес рассылки&nbsp;&nbsp;<input type="text" name="eladressrassilki" required size="70 " value="<?php echo $fopen[18];?>" placeholder='' /> <br><br>
Комментарии&nbsp;&nbsp;<input type="text" name="komment" required size="70 " value="<?php echo $fopen[19];?>" placeholder='' /> <br><br>
Необходимые корректирующие меры&nbsp;&nbsp;<input type="text" name="neophodimiecorrectmeri" required size="70 " value="<?php echo $fopen[20];?>" placeholder='Необходимые корректирующие меры' /> <br><br>
Описание№1&nbsp;&nbsp;<input type="text" name="opis1" required size="70 " value="<?php echo $fopen[21];?>" placeholder='' /> <br><br>
Описание№2&nbsp;&nbsp;<input type="text" name="opis2" required size="70 " value="<?php echo $fopen[22];?>" placeholder='' /> <br><br>
Описание№3&nbsp;&nbsp;<input type="text" name="opis3" required size="70 " value="<?php echo $fopen[23];?>" placeholder='' /> <br><br>
Описание№4&nbsp;&nbsp;<input type="text" name="opis4" required size="70 " value="<?php echo $fopen[24];?>" placeholder='' /> <br><br>
Описание№5&nbsp;&nbsp;<input type="text" name="opis5" required size="70 " value="<?php echo $fopen[25];?>" placeholder='' /> <br><br>
Описание№6&nbsp;&nbsp;<input type="text" name="opis6" required size="70 " value="<?php echo $fopen[26];?>" placeholder='' /> <br><br>
Описание№7&nbsp;&nbsp;<input type="text" name="opis7" required size="70 " value="<?php echo $fopen[27];?>" placeholder='' /> <br><br>
Описание№8&nbsp;&nbsp;<input type="text" name="opis8" required size="70 " value="<?php echo $fopen[28];?>" placeholder='' /> <br><br>
<b><u>_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________</b></u> <br> <br> 
	
 



<input type="reset" name="reset" value="Отмена"/> <br><br><br>
<input type="submit" name="submit" value="Оформить"/> <br>

<input type="button" name="sub" value="загрузка новых файлов" onclick = "window.location = 'upload1.php'"/> <br><br>

<br><br><br>




<div class="avtor"><br>
<a href="adminpanel.php" class="url-min" title="Назад">Назад</a><br><br>

  </div>

</body>
</html>


