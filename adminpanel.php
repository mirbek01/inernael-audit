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
<title>АдминПанель</title></head><body  bgcolor= "#01DFD7" background= "./img/rD000.gif"><img src="./img/lombard24.png"> 
<br><br><br><br>       
<link rel="stylesheet" type="text/css" href="./Красивые эффекты для кнопок на сайте_files/single.css">

<style>

.button-wrapper {
  display: table;
  margin: 50px auto;
  text-align: center;
}
.transform-button {
  position: relative;
  display: inline-block;
  text-decoration: none;
  padding: 3px 40px;
  margin-right: 30px;
  border: 1px solid #3104B4;
  background: transparent;
  color: #fff;
  font-weight: 800;
  letter-spacing: 1px;
  text-transform: uppercase;
  perspective: 800px;
  background: white;
  transition: .3s;
}
.transform-button:last-of-type {margin-right: 0;}
.transform-button span {    
  position: relative;
  z-index: 2;
}
.transform-button:before {
  content: "";
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background:#3104B4;
  transform-origin: left;
  transition: .5s;
}
.transform-button:hover {

  border-color:#3104B4;
 }

@media(max-width:680px){.transform-button{display:block;margin-right:0;margin-bottom:20px;}}
</style>                                                                                        
<br><p style= "color://#a8d7ff">
<big><big><big>Административный панель:</big></big></big>

<form method="post" action="adminpanel.php" id="form"> 
<p style= "">
<big><big><big> <i><b><u>Согласование:</i></b></u><br><br></big></big></big>

<a href="/optimabank-dba.kg/result.php" style=  "width:100x;height:75px;" bgcolor= "#01DFD7"  class="transform-button"><span>Согласование</span></a></br>

<p style= "color://#a8d7ff">
<big><big><big><i><b><u>Ввод данных:</i></b></u><br><br></big></big></big>
	
<a href="/optimabank-dba.kg/1.php" style=  "width:100x;height:75px;" bgcolor= "#01DFD7"  class="transform-button"><span>Ввод данных в базу</span></a></br>


_______________________________________________________________________________________________________________________________________________________	 <br><br>
<big><big><big> <p style= "color://#a8d7ff"><i><b><u>Поиск и редактирование аккаунтов:</i></b></u><br><br></big></big></big>

<a href="/optimabank-dba.kg/pass.php" style=  "width:100x;height:75px;" bgcolor= "#01DFD7"  class="transform-button"><span>Поиск и редактирование аккаунтов</span></a></br>

_______________________________________________________________________________________________________________________________________________________	 <br><br>
<big><big><big><p style= "color://#a8d7ff"><i><b><u>Поиск и редактирование баз:</i></b></u> <br><br></big></big></big>



<a href="/optimabank-dba.kg/redit1.php" style=  "width:100x;height:75px;" bgcolor= "#01DFD7"  class="transform-button"><span>Поиск и редактирование базы</span></a></br></br></br>
<a href="/optimabank-dba.kg/redit1fil.php" style=  "width:100x;height:75px;" bgcolor= "#01DFD7"  class="transform-button"><span>Поиск и редактирование базы и фильтр и отправка сообщении</span></a></br>

_______________________________________________________________________________________________________________________________________________________	 <br><br>

<big><big><big><p style= "color://#a8d7ff"><i><b><u>Фильтр по пунктам и разделом:</i></b></u> <br><br></big></big></big>




<a href="/optimabank-dba.kg/filter-all1.php" style=  "width:100x;height:75px;" bgcolor= "#01DFD7"  class="transform-button"><span>Фильтр-базы</span></a></br></br>
<a href="/optimabank-dba.kg/filter-all2.php" style=  "width:100x;height:75px;" bgcolor= "#01DFD7"  class="transform-button"><span>Фильтр-базы c выборкой chekbox</span></a></br></br>
<a href="/optimabank-dba.kg/filter-all3.php" style=  "width:100x;height:75px;" bgcolor= "#01DFD7"  class="transform-button"><span>Фильтр-базы c выборкой по столбцам</span></a></br>
__________________________________________________________________________________________________________________________________________________	 <br><br>
<big><big><big><p style= "color://#a8d7ff"><i><b><u>Для печати :</i></b></u> <br><br></big></big></big>



<a href="/optimabank-dba.kg/redit1p.php" style=  "width:100x;height:75px;" bgcolor= "#01DFD7"  class="transform-button"><span> печать мониторинга мер</span></a></br>
_______________________________________________________________________________________________________________________________________________________	 <br><br>
_______________________________________________________________________________________________________________________________________________________	 <br><br>

	<big><big><big><p style= "color://#a8d7ff"><i><b><u>Файлы:</i></b></u><br><br></big></big></big>

<input type="button" style="width:100x;height:75px"  name="sub" value="Поиск и редактирование файлов" onclick = "window.location = 'File.php'"/> <br><br>
<input type="button" style="width:100x;height:75px" name="sub" value="загрузка новых файлов" onclick = "window.location = 'upload1.php'"/> <br><br>

	<big><big><big> <p style= "color://#a8d7ff"><i><b><u>Старая база:</i></b></u><br><br></big></big></big>



<a href="/optimabank-dba.kg/redit1old.php" style=  "width:100x;height:75px;" bgcolor= "#01DFD7"  class="transform-button"><span>Старая база пoиск и редактирование</span></a></br></br>
<a href="/optimabank-dba.kg/filter-allold3.php" style=  "width:100x;height:75px;" bgcolor= "#01DFD7"  class="transform-button"><span>(Старая база)Фильтр-базы c выборкой по столбцам и отправка сообщением</span></a></br>

<a href="admin111.php " class="url-min" title="?? ????">back</a><br>
  </div> 
</body>
</html>


