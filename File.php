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
<?php 

if ($handle = opendir('./Filedata/')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            echo "<a href='download.php?file=".$entry."'>".$entry."</a></br>\n";
        }
    }
    closedir($handle);
}

?>



 <html>
	<a href="adminpanel.php" class="url-min" title="Наш сайт">Back</a><br><br>
<head>

</head>
<body bgcolor= "#01DFD7" background= "./img/rD000.gif"> 	
	<big></br>______________________________________________________________________________________________________________________________________________________________________________
	</br></br></br>

echo "Enter to File => <a href='./Filedata/'> dowload File ftp</a> 

</body>

</html>

