<?php
 session_start ();
if (!isset($_SESSION['auth']))
{
	exit ("go to <a href='http://localhost/optimabank-dba.kg/admin111.php'>login page</a>");
}
echo "<a href='http://localhost/optimabank-dba.kg/adminpanel.php?exit=1'> EXIT </a><br>";
if (isset($_GET['exit']) ==1)

{

unset ($_SESSION['auth']);
session_destroy();
 exit();
}

?>
<html>
<head>
<meta https-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Вносим изменеиния</title>
</head>

<body>
<big>Вы успешно создали отчет !!!</big>

<a href="adminpanel.php"><big><br/><br/>Вернутся назад?</big></a><br/><br/>

</body>
</html>



