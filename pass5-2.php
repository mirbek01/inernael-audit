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
@mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 
mysql_set_charset("utf8");
?>
<?php 
if(isset($_GET['edit'])) 
{
$name = $_GET['edit'];
$res5 = mysql_query("SELECT * FROM net5 WHERE name='$name'");
$row = mysql_fetch_array($res5);
}
if(isset($_POST['newName']))
{
$newName = $_POST['newName'];
$name = $_POST['name'];
$sql5 = "UPDATE net5 SET name='$newName' WHERE name='$name'";
$res5 = mysql_query($sql5) or die("Could not update" .mysql_error()); 
echo "<meta http-equiv='refresh'content='0;url=pass.php'>";
}

?>
 <script>
        function OnLoad() {
            var subm_btn = document.getElementById("subm_btn");

            subm_btn.onclick = function() {
                localStorage["submiting"]++;
            }

            if( localStorage.getItem("submiting") === null ) {
                localStorage.setItem("submiting", 0);
            } else if (localStorage["submiting"] >= 2) {
                subm_btn.disabled = true;
            }
        };

        window.onload = OnLoad;
    </script>
<form action="pass5.php" method="POST">
Password:<input type="text" name="newName"  value="<?php echo $row[1];?>"><br/>
<input type="hidden" name="name" value="<?php echo $row[1]; ?> "<br/>
<input id="subm_btn"  type="submit" value="Update"/>
Если  вам необходимо отправить сообщение  , то необходимо  отправить письмо с указанием логина и пароли вашего аккаунта на:  mirbek.tukeev@gmail.com 


</form>




   
    
