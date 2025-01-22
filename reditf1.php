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


</head>
<body>
    
       
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

if(isset($_POST[''])) {


}

function showIt()
{
	
    $names =  (isset($_REQUEST['searchText']) ?  $_REQUEST['searchText'] : '');
	@mysql_connect('localhost','root','rFn76#bL3');
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 

	$sql1 = "select * from audit t where t.id like '%".$names."%'";
		
    // die($sql1);
	$res1 = mysql_query($sql1) or die (mysql_error());
	
	if($res1) {
	  while($row = mysql_fetch_array($res1))
	  
	  {
    echo " <table> <style>
 table {
  width: 1000;
  height: 200;
  
}
  </style>
      <thead>
        <tr>
         
      <tbody><tr><br> <br> <td>Идентификатор ID :</td><td>Audit type </td><td># </td><td>Номер отчета</td> <td>Аудит на </td></b><br> <td> " .$row[	0	]."</td><td> " .$row[	1	]."</td><td> " .$row[	2	]."</td><td> " .$row[	3	]."</td></tr>

<td><br> <b>	Аудит на	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	4	]."</td>
<td><br> <b>	Наименование отчета	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	5	]."</td>
<td><br> <b>	Решение Правления	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	6	]."</td>
<td><br> <b>	Дата отчета	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	7	]."</td>
<td><br> <b>	Нарушение	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	8	]."</td>
<td><br> <b>	Мероприятие	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	9	]."</td>
<td><br> <b>	Ответственное подразделение	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	10	]."</td>
<td><br> <b>	Аудиторы	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	11	]."</td>
<td><br> <b>	Линия компетенции	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	12	]."</td>
<td><br> <b>	Рейтинг	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	13	]."</td>
<td><br> <b>	Первоначальная Дата исполнения	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	14	]."</td>
<td><br> <b>	Статус	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	15	]."</td>
<td><br> <b>	Новая дата исполнения	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	16	]."</td>
<td><br> <b>	monitoring period	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	17	]."</td>
<td><br> <b>	рассылка	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	18	]."</td>
<td><br> <b>	эл.адрес рассылки	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	19	]."</td>
<td><br> <b>	Комментарии	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	20	]."</td>
<td><br> <b>	Необходимые корректирующие меры	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	21	]."</td>
<td><br> <b>	Описание№1	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	22	]."</td>
<td><br> <b>	Описание№2	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	23	]."</td>
<td><br> <b>	Описание№3	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	24	]."</td>
<td><br> <b>	Описание№4	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	25	]."</td>
<td><br> <b>	Описание№5	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	26	]."</td>
<td><br> <b>	Описание№6	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	27	]."</td>
<td><br> <b>	Описание№7	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	28	]."</td>
<td><br> <b>	Описание№8	<b>: &nbsp;&nbsp;&nbsp;&nbsp;</td> <td> " .$row[	29	]."<br/><big></big></td></tr><b><u>_________________________________________________________________________________________________________________________________________________</b></u><br>";	 

	    }
   }	
}
while( $row = mysql_fetch_array($res1))
	

?>
     

      </tbody>
    </table>
  </body>

<div class="avtor"><br><br>
<a href="adminpanel.php" class="url-min" title="Наш сайт">Back</a><br><br>

  </div>
  
 
<img src="./img/lombard24.png">
<title>Редактирование отчетов</title>


<form method="post" action="reditf1.php">

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