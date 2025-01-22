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
  <title>Result dowload file</title>
 Successfully uploaded ! <a href='./1.php'>Back</a>
</head>
<body>
<?php
   if($_FILES["filename"]["size"] > 100024*100*100024)
   {
     echo ("File size exceeds the three megabyte");
     exit;
   }
   // Проверяем загружен ли файл
   if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
   {
     // Если файл загружен успешно, перемещаем его
     // из временной директории в конечную
     move_uploaded_file($_FILES["filename"]["tmp_name"], "/wamp/www/optimabank-dba.kg/Filedata/".$_FILES["filename"]["name"]);
   } else {
      echo("Error loading file");
   }
?>
	

	
</body>
</html>