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
	<a href="adminpanel.php" class="url-min" title="Наш сайт">Back</a><br><br>
  <title>Dowload File</title>
</head>
<body bgcolor= "#01DFD7" background= "./img/rD000.gif" >
      <h2><p><b> Dowload File </b></p></h2>
      <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="filename"><br> 
      <input type="submit" value="Now Dowload File"><br>
      </form>
</body>
</html>



