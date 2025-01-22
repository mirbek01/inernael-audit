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
$connect=@mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 
mysql_set_charset("utf8");
?>

<?php if(isset  ($_GET['edit'])) {$id=$_GET['edit'];$res0=mysql_query("SELECT * FROM auditold  WHERE id='$id'");$row0 =mysql_fetch_array($res0 );}if(isset  ($_POST['newName0'])){$newName0=$_POST['newName0'];$id=$_POST['id'];$sql0="UPDATE auditold SET id='$newName0' WHERE   id='$id'";$res0=mysql_query($sql0) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$audittype=$_GET['edit'];$res1=mysql_query("SELECT * FROM auditold  WHERE audittype='$audittype'");$row1=mysql_fetch_array($res1);}if(isset  ($_POST['newName1'])){$newName1=$_POST['newName1'];$audittype=$_POST['audittype'];$sql1="UPDATE auditold SET audittype='$newName1' WHERE   id='$id'";$res1=mysql_query($sql1) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$opis11=$_GET['edit'];$res2=mysql_query("SELECT * FROM auditold  WHERE opis11='$opis11'");$row2=mysql_fetch_array($res2);}if(isset  ($_POST['newName2'])){$newName2=$_POST['newName2'];$opis11=$_POST['opis11'];$sql2="UPDATE auditold SET opis11='$newName2' WHERE   id='$id'";$res2=mysql_query($sql2) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$nomerotcheta=$_GET['edit'];$res3=mysql_query("SELECT * FROM auditold  WHERE nomerotcheta='$nomerotcheta'");$row3=mysql_fetch_array($res3);}if(isset  ($_POST['newName3'])){$newName3=$_POST['newName3'];$nomerotcheta=$_POST['nomerotcheta'];$sql3="UPDATE auditold SET nomerotcheta='$newName3' WHERE   id='$id'";$res3=mysql_query($sql3) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$auditna=$_GET['edit'];$res4=mysql_query("SELECT * FROM auditold  WHERE auditna='$auditna'");$row4=mysql_fetch_array($res4);}if(isset  ($_POST['newName4'])){$newName4=$_POST['newName4'];$auditna=$_POST['auditna'];$sql4="UPDATE auditold SET auditna='$newName4' WHERE   id='$id'";$res4=mysql_query($sql4) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$naimenovanieotcheta=$_GET['edit'];$res5=mysql_query("SELECT * FROM auditold  WHERE naimenovanieotcheta='$naimenovanieotcheta'");$row5=mysql_fetch_array($res5);}if(isset  ($_POST['newName5'])){$newName5=$_POST['newName5'];$naimenovanieotcheta=$_POST['naimenovanieotcheta'];$sql5="UPDATE auditold SET naimenovanieotcheta='$newName5' WHERE   id='$id'";$res5=mysql_query($sql5) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$resheniepravlenie=$_GET['edit'];$res6=mysql_query("SELECT * FROM auditold  WHERE resheniepravlenie='$resheniepravlenie'");$row6=mysql_fetch_array($res6);}if(isset  ($_POST['newName6'])){$newName6=$_POST['newName6'];$resheniepravlenie=$_POST['resheniepravlenie'];$sql6="UPDATE auditold SET resheniepravlenie='$newName6' WHERE   id='$id'";$res6=mysql_query($sql6) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$dataotcheta=$_GET['edit'];$res7=mysql_query("SELECT * FROM auditold  WHERE dataotcheta='$dataotcheta'");$row7=mysql_fetch_array($res7);}if(isset  ($_POST['newName7'])){$newName7=$_POST['newName7'];$dataotcheta=$_POST['dataotcheta'];$sql7="UPDATE auditold SET dataotcheta='$newName7' WHERE   id='$id'";$res7=mysql_query($sql7) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$narushenie=$_GET['edit'];$res8=mysql_query("SELECT * FROM auditold  WHERE narushenie='$narushenie'");$row8=mysql_fetch_array($res8);}if(isset  ($_POST['newName8'])){$newName8=$_POST['newName8'];$narushenie=$_POST['narushenie'];$sql8="UPDATE auditold SET narushenie='$newName8' WHERE   id='$id'";$res8=mysql_query($sql8) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$meropiatia=$_GET['edit'];$res9=mysql_query("SELECT * FROM auditold  WHERE meropiatia='$meropiatia'");$row9=mysql_fetch_array($res9);}if(isset  ($_POST['newName9'])){$newName9=$_POST['newName9'];$meropiatia=$_POST['meropiatia'];$sql9="UPDATE auditold SET meropiatia='$newName9' WHERE   id='$id'";$res9=mysql_query($sql9) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$otvetctvenoepodrazdel=$_GET['edit'];$res10=mysql_query("SELECT * FROM auditold  WHERE otvetctvenoepodrazdel='$otvetctvenoepodrazdel'");$row10=mysql_fetch_array($res10);}if(isset  ($_POST['newName10'])){$newName10=$_POST['newName10'];$otvetctvenoepodrazdel=$_POST['otvetctvenoepodrazdel'];$sql10="UPDATE auditold SET otvetctvenoepodrazdel='$newName10' WHERE   id='$id'";$res10=mysql_query($sql10) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$auditori=$_GET['edit'];$res11=mysql_query("SELECT * FROM auditold  WHERE auditori='$auditori'");$row11=mysql_fetch_array($res11);}if(isset  ($_POST['newName11'])){$newName11=$_POST['newName11'];$auditori=$_POST['auditori'];$sql11="UPDATE auditold SET auditori='$newName11' WHERE   id='$id'";$res11=mysql_query($sql11) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$liniacompitenci=$_GET['edit'];$res12=mysql_query("SELECT * FROM auditold  WHERE liniacompitenci='$liniacompitenci'");$row12=mysql_fetch_array($res12);}if(isset  ($_POST['newName12'])){$newName12=$_POST['newName12'];$liniacompitenci=$_POST['liniacompitenci'];$sql12="UPDATE auditold SET liniacompitenci='$newName12' WHERE   id='$id'";$res12=mysql_query($sql12) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$reiting=$_GET['edit'];$res13=mysql_query("SELECT * FROM auditold  WHERE reiting='$reiting'");$row13=mysql_fetch_array($res13);}if(isset  ($_POST['newName13'])){$newName13=$_POST['newName13'];$reiting=$_POST['reiting'];$sql13="UPDATE auditold SET reiting='$newName13' WHERE   id='$id'";$res13=mysql_query($sql13) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$pervonachalnidataispolenie=$_GET['edit'];$res14=mysql_query("SELECT * FROM auditold  WHERE pervonachalnidataispolenie='$pervonachalnidataispolenie'");$row14=mysql_fetch_array($res14);}if(isset  ($_POST['newName14'])){$newName14=$_POST['newName14'];$pervonachalnidataispolenie=$_POST['pervonachalnidataispolenie'];$sql14="UPDATE auditold SET pervonachalnidataispolenie='$newName14' WHERE   id='$id'";$res14=mysql_query($sql14) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$status=$_GET['edit'];$res15=mysql_query("SELECT * FROM auditold  WHERE status='$status'");$row15=mysql_fetch_array($res15);}if(isset  ($_POST['newName15'])){$newName15=$_POST['newName15'];$status=$_POST['status'];$sql15="UPDATE auditold SET status='$newName15' WHERE   id='$id'";$res15=mysql_query($sql15) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$novaiadataispolnenia=$_GET['edit'];$res17=mysql_query("SELECT * FROM auditold  WHERE novaiadataispolnenia='$novaiadataispolnenia'");$row17=mysql_fetch_array($res17);}if(isset  ($_POST['newName17'])){$newName17=$_POST['newName17'];$novaiadataispolnenia=$_POST['novaiadataispolnenia'];$sql17="UPDATE auditold SET novaiadataispolnenia='$newName17' WHERE   id='$id'";$res17=mysql_query($sql17) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$monitoringperiod=$_GET['edit'];$res18=mysql_query("SELECT * FROM auditold  WHERE monitoringperiod='$monitoringperiod'");$row18=mysql_fetch_array($res18);}if(isset  ($_POST['newName18'])){$newName18=$_POST['newName18'];$monitoringperiod=$_POST['monitoringperiod'];$sql18="UPDATE auditold SET monitoringperiod='$newName18' WHERE   id='$id'";$res18=mysql_query($sql18) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$rassilka=$_GET['edit'];$res19=mysql_query("SELECT * FROM auditold  WHERE rassilka='$rassilka'");$row19=mysql_fetch_array($res19);}if(isset  ($_POST['newName19'])){$newName19=$_POST['newName19'];$rassilka=$_POST['rassilka'];$sql19="UPDATE auditold SET rassilka='$newName19' WHERE   id='$id'";$res19=mysql_query($sql19) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$eladressrassilki=$_GET['edit'];$res20=mysql_query("SELECT * FROM auditold  WHERE eladressrassilki='$eladressrassilki'");$row20=mysql_fetch_array($res20);}if(isset  ($_POST['newName20'])){$newName20=$_POST['newName20'];$eladressrassilki=$_POST['eladressrassilki'];$sql20="UPDATE auditold SET eladressrassilki='$newName20' WHERE   id='$id'";$res20=mysql_query($sql20) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$komment=$_GET['edit'];$res21=mysql_query("SELECT * FROM auditold  WHERE komment='$komment'");$row21=mysql_fetch_array($res21);}if(isset  ($_POST['newName21'])){$newName21=$_POST['newName21'];$komment=$_POST['komment'];$sql21="UPDATE auditold SET komment='$newName21' WHERE   id='$id'";$res21=mysql_query($sql21) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$neophodimiecorrectmeri=$_GET['edit'];$res22=mysql_query("SELECT * FROM auditold  WHERE neophodimiecorrectmeri='$neophodimiecorrectmeri'");$row22=mysql_fetch_array($res22);}if(isset  ($_POST['newName22'])){$newName22=$_POST['newName22'];$neophodimiecorrectmeri=$_POST['neophodimiecorrectmeri'];$sql22="UPDATE auditold SET neophodimiecorrectmeri='$newName22' WHERE   id='$id'";$res22=mysql_query($sql22) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$opis1=$_GET['edit'];$res23=mysql_query("SELECT * FROM auditold  WHERE opis1='$opis1'");$row23=mysql_fetch_array($res23);}if(isset  ($_POST['newName23'])){$newName23=$_POST['newName23'];$opis1=$_POST['opis1'];$sql23="UPDATE auditold SET opis1='$newName23' WHERE   id='$id'";$res23=mysql_query($sql23) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$opis2=$_GET['edit'];$res24=mysql_query("SELECT * FROM auditold  WHERE opis2='$opis2'");$row24=mysql_fetch_array($res24);}if(isset  ($_POST['newName24'])){$newName24=$_POST['newName24'];$opis2=$_POST['opis2'];$sql24="UPDATE auditold SET opis2='$newName24' WHERE   id='$id'";$res24=mysql_query($sql24) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$opis3=$_GET['edit'];$res25=mysql_query("SELECT * FROM auditold  WHERE opis3='$opis3'");$row25=mysql_fetch_array($res25);}if(isset  ($_POST['newName25'])){$newName25=$_POST['newName25'];$opis3=$_POST['opis3'];$sql25="UPDATE auditold SET opis3='$newName25' WHERE   id='$id'";$res25=mysql_query($sql25) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$opis4=$_GET['edit'];$res26=mysql_query("SELECT * FROM auditold  WHERE opis4='$opis4'");$row26=mysql_fetch_array($res26);}if(isset  ($_POST['newName26'])){$newName26=$_POST['newName26'];$opis4=$_POST['opis4'];$sql26="UPDATE auditold SET opis4='$newName26' WHERE   id='$id'";$res26=mysql_query($sql26) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$opis5=$_GET['edit'];$res27=mysql_query("SELECT * FROM auditold  WHERE opis5='$opis5'");$row27=mysql_fetch_array($res27);}if(isset  ($_POST['newName27'])){$newName27=$_POST['newName27'];$opis5=$_POST['opis5'];$sql27="UPDATE auditold SET opis5='$newName27' WHERE   id='$id'";$res27=mysql_query($sql27) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$opis6=$_GET['edit'];$res28=mysql_query("SELECT * FROM auditold  WHERE opis6='$opis6'");$row28=mysql_fetch_array($res28);}if(isset  ($_POST['newName28'])){$newName28=$_POST['newName28'];$opis6=$_POST['opis6'];$sql28="UPDATE auditold SET opis6='$newName28' WHERE   id='$id'";$res28=mysql_query($sql28) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$opis7=$_GET['edit'];$res29=mysql_query("SELECT * FROM auditold  WHERE opis7='$opis7'");$row29=mysql_fetch_array($res29);}if(isset  ($_POST['newName29'])){$newName29=$_POST['newName29'];$opis7=$_POST['opis7'];$sql29="UPDATE auditold SET opis7='$newName29' WHERE   id='$id'";$res29=mysql_query($sql29) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>
<?php if(isset  ($_GET['edit'])) {$opis8=$_GET['edit'];$res30=mysql_query("SELECT * FROM auditold  WHERE opis8='$opis8'");$row30=mysql_fetch_array($res30);}if(isset  ($_POST['newName30'])){$newName30=$_POST['newName30'];$opis8=$_POST['opis8'];$sql30="UPDATE auditold SET opis8='$newName30' WHERE   id='$id'";$res30=mysql_query($sql30) or die("Could not update" .mysql_error()); echo "<meta http-equiv='refresh'content='0;url=redit1old.php'>";}?>

<?php /*
header("Content-type: text/html; charset+UTF-8");
	$to = 'mirbek.tukeev@gmail.com';
$subject = 'nop';
$message = "hi mirba";
$header = "From: AutoLinex <mirbek.tukeev@gmail.com>" . "\r\n";
$header .= "Conect-Type: text/html; charset=UTF-8" . "\r\n";*/

/*$mail=mail("mirbek.tukeev@gmail.com", "My Subject", "dsgggd1\nLine 2\nLine 3"); */
?>
<?php/*


$to      = 'mirbek.tukeev@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: mirbek.tukeev@gmail.com' . "\r\n" .
    'Reply-To: mirbek.tukeev@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);*/
?>

<?php/*
$mail_from = "mirbek.tukeev@optimabank.kg";
$to ="kanym.beisheeva@optimabank.kg";
$subject = "Hello";
$txt = "Hello Mirba 111";
$headers = "From:mirbek.tukeev@optimabank.kg"."\r\n";
mail($mail_from,$to,$subject,$txt,$headers);
*/
?> 

<form action="redit1011.php" method="POST">

<strong>ИдентификаторID</strong> <br> <input type = "text" name="newName0" size="470"value="<?php  echo $row0[0];?>"><br/>
<strong>auditoldtype</strong> <br> <input type = "text" name="newName1" size="470"value="<?php  echo $row0[1];?>"><br/>
<strong>#</strong> <br> <input type = "text" name="newName2" size="470"value="<?php  echo $row0[2];?>"><br/>
<strong>Номеротчета</strong> <br> <input type = "text" name="newName3" size="470"value="<?php  echo $row0[3];?>"><br/>
<strong>Аудитна</strong> <br> <input type = "text" name="newName4" size="470"value="<?php  echo $row0[4];?>"><br/>
<strong>Наименованиеотчета </strong><br> <input type = "text" name="newName5" size="470"value="<?php  echo $row0[5];?>"><br/>
<strong>РешениеПравления </strong><br> <input type = "text" name="newName6" size="470"value="<?php  echo $row0[6];?>"><br/>
<strong>Датаотчета </strong><br> <input type = "text" name="newName7" size="470"value="<?php  echo $row0[7];?>"><br/>
<strong>Нарушение</strong> <br> <input type = "text" name="newName8" size="470"value="<?php  echo $row0[8];?>"><br/>
<strong>Мероприятие</strong> <br> <input type = "text" name="newName9" size="470"value="<?php  echo $row0[9];?>"><br/>
<strong>Ответственноеподразделение </strong><br> <input type = "text" name="newName10" size="470"value="<?php  echo $row0[10];?>"><br/>
<strong>Аудиторы</strong> <br> <input type = "text" name="newName11" size="470"value="<?php  echo $row0[11];?>"><br/>
<strong>Линиякомпетенции </strong><br> <input type = "text" name="newName12" size="470"value="<?php  echo $row0[12];?>"><br/>
<strong>Рейтинг</strong> <br> <input type = "text" name="newName13" size="470"value="<?php  echo $row0[13];?>"><br/>
<strong>Первоначальная Датаисполнения </strong><br> <input type = "text" name="newName14" size="470"value="<?php  echo $row0[14];?>"><br/>
<strong>Статус</strong> <br> <input type = "text" name="newName15" size="470"value="<?php  echo $row0[15];?>"><br/>
<strong>Новаядатаисполнения </strong><br> <input type = "text" name="newName17" size="470"value="<?php  echo $row0[16];?>"><br/>
<strong>monitoringperiod</strong> <br> <input type = "text" name="newName18" size="470"value="<?php  echo $row0[17];?>"><br/>
<strong>рассылка </strong><br> <input type = "text" name="newName19" size="470"value="<?php  echo $row0[18];?>"><br/>
<strong>эл.адресрассылки</strong> <br> <input type = "text" name="newName20" size="470"value="<?php  echo $row0[19];?>"><br/>
<strong>Комментарии </strong><br> <input type = "text" name="newName21" size="470"value="<?php  echo $row0[20];?>"><br/>
<strong>Необходимыекорректирующиемеры</strong> <br> <input type = "text" name="newName22" size="470"value="<?php  echo $row0[21];?>"><br/>
<strong>Описание№1 </strong><br> <input type = "text" name="newName23" size="470"value="<?php  echo $row0[22];?>"><br/>
<strong>Описание№2 </strong><br> <input type = "text" name="newName24" size="470"value="<?php  echo $row0[23];?>"><br/>
<strong>Описание№3</strong> <br> <input type = "text" name="newName25" size="470"value="<?php  echo $row0[24];?>"><br/>
<strong>Описание№4</strong> <br> <input type = "text" name="newName26" size="470"value="<?php  echo $row0[25];?>"><br/>
<strong>Описание№5 </strong><br> <input type = "text" name="newName27" size="470"value="<?php  echo $row0[26];?>"><br/>
<strong>Описание№6 </strong><br> <input type = "text" name="newName28" size="470"value="<?php  echo $row0[27];?>"><br/>
<strong>Описание№7 </strong><br> <input type = "text" name="newName29" size="470"value="<?php  echo $row0[28];?>"><br/>
<strong>Описание№8 </strong><br> <input type = "text" name="newName30" size="470"value="<?php  echo $row0[29];?>"><br/>


<input type="hidden" name="id" value="<?php echo $row0[0]; ?> "<br/>
<input type="hidden" name="audittype" value="<?php echo $row0[1]; ?> "<br/>
<input type="hidden" name="opis11" value="<?php echo $row0[2]; ?> "<br/>
<input type="hidden" name="nomerotcheta" value="<?php echo $row0[3]; ?> "<br/>
<input type="hidden" name="auditna" value="<?php echo $row0[4]; ?> "<br/>
<input type="hidden" name="naimenovanieotcheta" value="<?php echo $row0[5]; ?> "<br/>
<input type="hidden" name="resheniepravlenie" value="<?php echo $row0[6]; ?> "<br/>
<input type="hidden" name="dataotcheta" value="<?php echo $row0[7]; ?> "<br/>
<input type="hidden" name="narushenie" value="<?php echo $row0[8]; ?> "<br/>
<input type="hidden" name="meropiatia" value="<?php echo $row0[9]; ?> "<br/>
<input type="hidden" name="otvetctvenoepodrazdel" value="<?php echo $row0[10]; ?> "<br/>
<input type="hidden" name="auditori" value="<?php echo $row0[11]; ?> "<br/>
<input type="hidden" name="liniacompitenci" value="<?php echo $row0[12]; ?> "<br/>
<input type="hidden" name="reiting" value="<?php echo $row0[13]; ?> "<br/>
<input type="hidden" name="pervonachalnidataispolenie" value="<?php echo $row0[14]; ?> "<br/>
<input type="hidden" name="status" value="<?php echo $row0[15]; ?> "<br/>
<input type="hidden" name="novaiadataispolnenia" value="<?php echo $row0[16]; ?> "<br/>
<input type="hidden" name="monitoringperiod" value="<?php echo $row0[17]; ?> "<br/>
<input type="hidden" name="rassilka" value="<?php echo $row0[18]; ?> "<br/>
<input type="hidden" name="eladressrassilki" value="<?php echo $row0[19]; ?> "<br/>
<input type="hidden" name="komment" value="<?php echo $row0[20]; ?> "<br/>
<input type="hidden" name="neophodimiecorrectmeri" value="<?php echo $row0[21]; ?> "<br/>
<input type="hidden" name="opis1" value="<?php echo $row0[22]; ?> "<br/>
<input type="hidden" name="opis2" value="<?php echo $row0[23]; ?> "<br/>
<input type="hidden" name="opis3" value="<?php echo $row0[24]; ?> "<br/>
<input type="hidden" name="opis4" value="<?php echo $row0[25]; ?> "<br/>
<input type="hidden" name="opis5" value="<?php echo $row0[26]; ?> "<br/>
<input type="hidden" name="opis6" value="<?php echo $row0[27]; ?> "<br/>
<input type="hidden" name="opis7" value="<?php echo $row0[28]; ?> "<br/>
<input type="hidden" name="opis8" value="<?php echo $row0[29]; ?> "<br/>



<input type="submit" value="Update">


</form>

