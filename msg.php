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
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>������ ����������</title>
</head>

<body>
<big>�� ������� ������� ����� !!!</big>

<a href="adminpanel.php"><big><br/><br/>�������� �����?</big></a><br/><br/>

</body>
</html>