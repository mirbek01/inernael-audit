﻿<?php
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

<?php
@mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 
mysql_set_charset("utf8");
?>
<?php 
if(isset($_GET['edit'])) 
{
$name = $_GET['edit'];
$res = mysql_query("SELECT * FROM net3 WHERE name='$name'");
$row = mysql_fetch_array($res);
}
if(isset($_POST['newName']))
{
$newName = $_POST['newName'];
$name = $_POST['name'];
$sql = "UPDATE net3 SET name='$newName' WHERE name='$name'";
$res = mysql_query($sql) or die("Could not update" .mysql_error()); 
echo "<meta http-equiv='refresh'content='0;url=pass.php'>";
}

?>

<form action="pass3.php" method="POST">
Password:<input type="text" name="newName"  value="<?php echo $row[1];?>"><br/>
<input type="hidden" name="name" value="<?php echo $row[1]; ?> "<br/>
<input type="submit" value="Update">
Если  вам необходимо отправить сообщение  , то необходимо  отправить письмо с указанием логина и пароли вашего аккаунта на:  mirbek.tukeev@gmail.com 


</form>

