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

</head></body>
<div class="avtor"><br><br>
<a href="result.php" class="url-min" title="Наш сайт">Back</a><br><br>

  </div>
<img src="./img/lombard24.png">
<title>Просмотр согласовании</title>
<?php
@mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 

mysql_set_charset("utf8");
if(isset($_POST['name'])) 
{
$name = $_POST['name'];
if(mysql_query("INSERT INTO result1,result2,result3,result4 VALUES('','$name')"))
	echo "Successful Insertion!";
else
	echo "Please try again";
}
$res1 = mysql_query("SELECT * FROM result1");
$res2 = mysql_query("SELECT * FROM result2");
$res3 = mysql_query("SELECT * FROM result3");
$res4 = mysql_query("SELECT * FROM result4");


?>


<?php
@mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 
mysql_set_charset("utf8");
if(isset($_POST[''])) {

$query = mysql_query("INSERT INTO result1(name,resulturmopis) values('$name','$resulturmopis')") or die (mysql_error());

}

function showIt()
{
	
    $names =  (isset($_REQUEST['searchText']) ?  $_REQUEST['searchText'] : '');
 @mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 
mysql_set_charset("utf8");
	$sql1 = "select * from result1 t where t.name like '%".$names."%'";
		
    // die($sql);
	$res1 = mysql_query($sql1) or die (mysql_error());
	
	if($res1) {
	  while($row = mysql_fetch_array($res1))
	  
	  {
    echo "Согласование: ".$row[0]."<br> Описание : " .$row[1]."<br/><br/><br/>";	 

	    }
   }	
}
while( $row = mysql_fetch_array($res1))
	

?>
<?php
@mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 
mysql_set_charset("utf8");
if(isset($_POST[''])) {

$query = mysql_query("INSERT INTO result2(name,resultolopis) values('$name','resultolopis')") or die (mysql_error());

}

function showIt1()
{
	
    $names =  (isset($_REQUEST['searchText']) ?  $_REQUEST['searchText'] : '');
	@mysql_connect('localhost','root','rFn76#bL3');
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 
mysql_set_charset("utf8");
	$sql2 = "select * from result2 t where t.name like '%".$names."%'";
		
    // die($sql);
	$res2 = mysql_query($sql2) or die (mysql_error());
	
	if($res2) {
	  while($row = mysql_fetch_array($res2))
	  
	  {
   echo "Согласование: ".$row[0]."<br> Описание : " .$row[1]."<br/><br/><br/>";	
	    }
   }	
}
while( $row = mysql_fetch_array($res2))
	

?>
<?php
@mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 
mysql_set_charset("utf8");
if(isset($_POST[''])) {

$query = mysql_query("INSERT INTO result3(name,resultouresopis) values('$name','$resultouresopis')") or die (mysql_error());

}

function showIt2()
{
	
    $names =  (isset($_REQUEST['searchText']) ?  $_REQUEST['searchText'] : '');
	@mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 
mysql_set_charset("utf8");
	$sql3 = "select * from result3 t where t.name like '%".$names."%'";
		
    // die($sql);
	$res3 = mysql_query($sql3) or die (mysql_error());
	
	if($res3) {
	  while($row = mysql_fetch_array($res3))
	  
	  {
  echo "Согласование: ".$row[0]."<br> Описание : " .$row[1]."<br/><br/><br/>";	
	    }
   }	
}
while( $row = mysql_fetch_array($res3))
	

?>
<?php
@mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 
mysql_set_charset("utf8");
if(isset($_POST[''])) {

$query = mysql_query("INSERT INTO result4(name,resultemsopis) values('$name','$resultemsopis')") or die (mysql_error());

}

function showIt3()
{
	
    $names =  (isset($_REQUEST['searchText']) ?  $_REQUEST['searchText'] : '');
 @mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 
mysql_set_charset("utf8");
	$sql4 = "select * from result4 t where t.name like '%".$names."%'";
		
    // die($sql);
	$res4 = mysql_query($sql4) or die (mysql_error());
	
	if($res4) {
	  while($row = mysql_fetch_array($res4))
	  
	  {
     echo "Согласование: ".$row[0]."<br> Описание : " .$row[1]."<br/><br/><br/>";	
	    }
   }	
}
while( $row = mysql_fetch_array($res4))
	

?>

<form method="post" action="showresult.php">

<p>
search <input type="text" name="searchText"  value=""/> <br>
<input type="submit" name="searchBtn" value="Search"/> <br>
</p>
_______________________________________________________________________________________________________________________________________________________	 <br><br>
<p><b>УРМ: </b></p><br>
<?php
showIt();
?>
_______________________________________________________________________________________________________________________________________________________	 <br><br>
<p><b>ОЛ: </b></p><br>
<?php
showIt1();
?>
_______________________________________________________________________________________________________________________________________________________	 <br><br>
<p><b>ОУРЭС:</b></p><br>
<?php
showIt2();
?>
_______________________________________________________________________________________________________________________________________________________	 <br><br>
<p><b>УРЧС:</b></p><br>
<?php
showIt3();
?>
_______________________________________________________________________________________________________________________________________________________	 <br><br>

<div class="avtor"><br><br>
<a href="result.php" class="url-min" title="Наш сайт">Back</a><br><br>

  </div>
Если  вам необходимо отправить сообщение  , то необходимо  отправить письмо с указанием логина и пароли вашего аккаунта на:  mirbek.tukeev@gmail.com
</body>
</html>