 <?php
 session_start ();


$connect=@mysqli_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysqli_select_db($connect,'host_29723_mirbase'); 


$select = @mysqli_query ($connect,"SELECT login,password,ip,ip_del_time FROM reg2");
if (!$select) exit ('#110 not conn bd'); 

$row = @mysqli_fetch_row ($select);
if (!$row) exit ('#111');
if (ini_get('register_globals')) exit ('Off Reg_globals'); //unset($auth);

if (!isset($_SESSION['bruteforce']))
{
$_SESSION['bruteforce'] = 0;
$_SESSION['bruteforce_t'] = time ();
$_SESSION['bruteforce_ip'] = $_SERVER['REMOTE_ADDR'];
}
$_SESSION['bruteforce'] ++;


if ((time() - $_SESSION['bruteforce_t']) > 10 ) unset ($_SESSION['bruteforce']);
if(!empty ($row[2]))
{
if ((time() - $row[3]) < 20 ) 
{
exit("IP try aftee 10 minutes");
}

else {
  $select = @mysql_query ($connect, "UPDATE reg2 SET ip='', ip_del_time = '' WHERE login = 'admin'");

  if (!$_select) exit ("#112");
  unset ($_SESSION['bruteforce']);
  exit ();
}

}
if ((@$_SESSION['bruteforce'])> 4 )

{

$select = @mysql_query ($connect,"UPDATE reg2 SET ip='$_SESSION[bruteforce_ip]', ip_del_time ='$_SESSION[bruteforce_t]' WHERE login = 'admin'");


exit("try after 10 minutes");

}
//echo md5 ("qwertyuiopasdfghjklGaspkr-world2016"); 92165657160d1c87522b5864af481c64
//exit;
?>
<html>
<head>
</head>
<body bgcolor= "#a8d7ff" background= "./img/1.gif"><img src="./img/lombard24.png">

<form method="post" action="admin111.php" id="form"> 
<br>
 
   Логин     <input type="text" name="login" required placeholder='Логин'/> <br>
  Пароль    <input type="password" name="password" required placeholder='Пароль'/> <br>

<a href="index.php " class="url-min" title="Наш сайт">Back</a><br><br>
<input type="submit" name="submit" value="вход"/> <br>
<input type="reset" name="reset" value="Отмена"/> <br>

</form>

<?php
if (isset($_POST['submit']))
{
//if (!preg_match ("/localhost\/mir/", $_SERVER['HTTP_REFERER'])) exit ();

$login = $_POST['login'];
$password = $_POST['password'];
if (($login === $row[0]) and ($password === $row[1]))
{
$_SESSION['auth'] = $login;
echo "Enter to admin => <a href='adminpanel.php'><big><big> admin </big></big></a> ";

}
else
{
return exit('not correct login or password');
}

}
?>
</body>
</html>

