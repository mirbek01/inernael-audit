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
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Отправка сообщений!!!</title>

    <style type="text/css">
   TABLE {
    width: 1700px; /* Ширина таблицы */
    border-collapse: collapse; /* Убираем двойные линии между ячейками */
   }
   TD, TH {
    padding: 3px; /* Поля вокруг содержимого таблицы */
    border: 1px solid black; /* Параметры рамки */
   }
   TH {
    background: #b0e0e5; /* Цвет фона */ 
   } 
  </style> 
</head>

<form action="send.php" method="POST">





<?php
$connect=@mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 
mysql_set_charset("utf8");
?>

<?php if(isset  ($_GET['edit'])) {$id=$_GET['edit'];$res0=mysql_query("SELECT * FROM audit  WHERE id='$id'");$row0 =mysql_fetch_array($res0 );}if(isset  ($_POST['newName0'])){$newName0=$_POST['newName0'];$id=$_POST['id'];echo "<meta http-equiv='refresh'content='0;url=redit1fil.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$opis11=$_GET['edit'];$res2=mysql_query("SELECT * FROM audit  WHERE opis11='$opis11'");$row2=mysql_fetch_array($res2);}if(isset  ($_POST['newName2'])){$newName2=$_POST['newName2'];$opis11=$_POST['opis11']; echo "<meta http-equiv='refresh'content='0;url=redit1fil.php'>";}?>

<strong>Получатель e-mail:</strong><br />
<input name="email" type="text" size="250" value="<?php  echo $row0[19];?>;batyrkojoeva@optimabank.kg;kanym.beisheeva@optimabank.kg;mirbek.tukeev@optimabank.kg "/>
<br />
<strong>Ваше сообщение:</strong><br />
<input name="mess" type="text" size="80" value="Здр. Коллеги,В рамках мониторинга мер на  "/><br/>




 <input type = "text" name="newName8" size="80"value=", просим сообщить статус исполнения нижеуказанной меры/мер:"></br>

<strong># </strong><br> <input type = "text" name="newName2" size="270"value="<?php  echo $row0[2];?>"><br/>
<strong>Наименование отчета:</strong> <br> <input type = "text" name="newName5" size="370"value="<?php  echo $row0[5];?>"> <input type = "text" name="newName7" size="80"value="<?php  echo $row0[4];?>"><br/>
<strong>Нарушение: </strong>  <br> <input type = "text" name="newName9" size="370"value="<?php  echo $row0[8];?>"><br/>
<strong>Мероприятие:</strong> <br> <input type = "text" name="newName10" size="370"value="<?php  echo $row0[9];?>"><br/>
<strong>Ответственное подразделение: </strong> <br> <input type = "text" name="newName11" size="370"value="<?php  echo $row0[10];?>"><br/>
<strong>Первоначальная Дата исполнения: </strong> <br> <input type = "text" name="newName12" size="370"value="<?php  echo $row0[14];?>"><br/>
<strong>Новая дата исполнения:   </strong>   <br> <input type = "text" name="newName13" size="370"value="<?php  echo $row0[16];?>"><br/>
<strong>Подпись  </strong><br> <input type = "text" name="newName6" size="370"value=" Сообщаем , что система отправляет данное сообщение в автоматическом режиме, информацию и соответствующие материалы просим отправлять на следующие электронные адреса:  
batyrkojoeva@optimabank.kg; kanym.beisheeva@optimabank.kg; mirbek.tukeev@optimabank.kg
   "><br/>



Статус письма:
<p>
<input type="submit" value="Отправить сообщение"/>
</p><?php
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['mess'])) {$mess = $_POST['mess'];}
if (isset($_POST['newName0'])) {$mess1 = $_POST['newName0'];}
if (isset($_POST['newName8'])) {$mess6 = $_POST['newName8'];}
if (isset($_POST['newName2'])) {$mess2 = $_POST['newName2'];}
if (isset($_POST['newName5'])) {$mess3 = $_POST['newName5'];}
if (isset($_POST['newName7'])) {$mess5 = $_POST['newName7'];}
if (isset($_POST['newName9'])) {$mess7 = $_POST['newName9'];}
if (isset($_POST['newName10'])) {$mess8 = $_POST['newName10'];}
if (isset($_POST['newName11'])) {$mess9 = $_POST['newName11'];}
if (isset($_POST['newName12'])) {$mess10 = $_POST['newName12'];}
if (isset($_POST['newName13'])) {$mess11 = $_POST['newName13'];}
if (isset($_POST['newName6'])) {$mess4 = $_POST['newName6'];}


if (empty($email))
{
echo "<b>Не указан e-mail!<p>";
echo "<a href=contacts.html>Вернуться к заполнению формы</a>";
exit;
}
if (empty($mess))
{
echo "<b>Сообщение не написано!<p>";
echo "<a href=contacts.html>Вернуться к заполнению формы</a>";
exit;
}
$to = $email;
//$from = "@Автоматизированная система мониторинга мер Департамента внутреннего аудита";
 //$from = "InternalAudit@optimabank.kg ";
 $from = "";
$headers = "Content-type: text/plain; charset = windows-1251";
$subject = "Сообщение о мониторинге: $mess2 $mess3  ";
$subject = "=?utf-8?b?".base64_encode($subject)."?=";
        $headers = "From: $from\r\nReply-to:$from\r\nContent-type:text/html;charset=utf-8\r\n";

$message = "$mess $mess1  $mess6  $mess2<tr> <td><br> <b> <br/>Наименование отчета:</b> $mess3 $mess5 <br/><b>Нарушение:</b>  $mess7  <br/><b>Мероприятие: </b>$mess8 <br/><b>Ответственное подразделение:</b> $mess9 <br/><b>Первоначальная Дата исполнения: </b> $mess10 <br/><b>Новая дата исполнения </b>$mess11 <br/> $mess12 <br/> $mess4</td></tr></tr> ";

$send = mail ($to, $subject, $message, $headers);
if ($send == 'true')
{
echo "<b>Спасибо за отправку вашего сообщения!<p>";
echo "<a href=index.html>Нажмите,</a> чтобы вернуться на главную страницу";
}
else 
{
echo "<p><b>Ошибка. Сообщение не отправлено!";
}
?>
<body>
<big>Вы успешно отправили сообщение !!!</big>

</body>




</form>

</html>