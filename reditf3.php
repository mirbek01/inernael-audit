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

<html><head>  
<meta http-equiv="Content-type" content="text/html; charset=windows-1251" />


</head><body></body>
<div class="avtor"><br><br>
<a href="adminpanel.php" class="url-min" title="Наш сайт">Back</a><br><br>

  </div>
  
 
<img src="./img/lombard24.png">
<title>Редактирование отчетов</title>
<?php
$connect=@mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 

mysql_set_charset("utf8");
	
if(isset($_POST['id'])) 
{
$name = $_POST['id'];
if(mysql_query("INSERT INTO audit VALUES('','$name')"))
	echo "Successful Insertion!";
else
	echo "Please try again";
}
$res1 = mysql_query("SELECT * FROM audit");

?>

<?php
$connect=@mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 
mysql_set_charset("utf8");
if(isset($_POST[''])) {


}

function showIt()
{
	
    $names =  (isset($_REQUEST['searchText']) ?  $_REQUEST['searchText'] : '');
	@mysql_connect('localhost','root','rFn76#bL3');
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 
mysql_set_charset("utf8");
	$sql1 = "select * from audit t where t.id like '%".$names."%'";
		
    // die($sql1);
	$res1 = mysql_query($sql1) or die (mysql_error());
	
	if($res1) {
	  while($row = mysql_fetch_array($res1))
	  
	  {
    echo "<table> <style>
 table {
  width: 1000;
  height: 100;
  
}
  </style><tr> 
<tr> 
<th>Audit Measures 2012 (Including External Audit, Internal Audit, Group Audit, Local Regulatory)
<br><br> Optimabank<br><br> <br>  </th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<th>Audit Measures 2012 (Including External Audit, Internal Audit, Group Audit, Local Regulatory)
 <br> <br>Optimabank<br>   <br>   <br></th> 
</tr> </table><big><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Мониторинг мер (ИД) " .$row[	0	]."</big><br><b><u>_________________________________________________________________________________________________________________________________________________</b></u><table border=1> <tr><td><b>
 <br> <br> Идентификатор ID :</b>&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	0	]."</td></tr>
<td><br> <b>	Audit type	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	1	]."</td></tr>
<td><br> <b>	#	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	2	]."</td></tr>
<td><br> <b>	Номер отчета	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	3	]."</td></tr>
<td><br> <b>	Аудит на	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	4	]."</td></tr>
<td><br> <b>	Наименование отчета	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	5	]."</td></tr>
<td><br> <b>	Решение Правления	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	6	]."</td></tr>
<td><br> <b>	Дата отчета	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	7	]."</td></tr>
<td><br> <b>	Нарушение	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	8	]."</td></tr>
<td><br> <b>	Мероприятие	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	9	]."</td></tr>
<td><br> <b>	Ответственное подразделение	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	10	]."</td></tr>
<td><br> <b>	Аудиторы	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	11	]."</td></tr>
<td><br> <b>	Линия компетенции	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	12	]."</td></tr>
<td><br> <b>	Рейтинг	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	13	]."</td></tr>
<td><br> <b>	Первоначальная Дата исполнения	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	14	]."</td></tr>
<td><br> <b>	Статус	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	15	]."</td></tr>
<td><br> <b>	Новая дата исполнения	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	16	]."</td></tr>
<td><br> <b>	monitoring period	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	17	]."</td></tr>
<td><br> <b>	рассылка	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	18	]."</td></tr>
<td><br> <b>	эл.адрес рассылки	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	19	]."</td></tr>
<td><br> <b>	Комментарии	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	20	]."</td></tr>
<td><br> <b>	Необходимые корректирующие меры	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	21	]."</td></tr>
<td><br> <b>	Описание№1	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	22	]."</td></tr>
<td><br> <b>	Описание№2	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	23	]."</td></tr>
<td><br> <b>	Описание№3	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	24	]."</td></tr>
<td><br> <b>	Описание№4	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	25	]."</td></tr>
<td><br> <b>	Описание№5	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	26	]."</td></tr>
<td><br> <b>	Описание№6	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	27	]."</td></tr>
<td><br> <b>	Описание№7	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	28	]."</td></tr>
<td><br> <b>	Описание№8	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	29	]."<br/><big><a href='redit101.php?edit=$row[id]'>edit</a></big></td></tr><b><u>_________________________________________________________________________________________________________________________________________________</b></u><br>";	 

	    }
   }	
}
while( $row = mysql_fetch_array($res1))
	

?>

<form method="post" action="redit1.php">

<p>
Поиск по значению <input type="text" name="searchText" size="30" value=""/> <br>
<input type="submit" name="searchBtn" value="Поиск"/> <br>
</p>
<b><u>_________________________________________________________________________________________________________________________________________________</b></u>
<br><a href="adminpanel.php" class="url-min" title="Наш сайт">Back</a><br><br>
<?php
showIt();
?>


<div class="avtor"><br><br>


  </div>

</body>
</html>