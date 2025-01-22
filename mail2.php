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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Вы успешно отправили</title>
</head>

<form method="post" action="mail2.php">
<strong>Ваше имя:</strong><br />
<input type="text" name="name" size="30"/>
<br />
<strong>Получатель e-mail:</strong><br />
<input name="email" type="text" size="330" />
<br />
<strong>Ваше сообщение:</strong><br />
<textarea name="mess" rows="3" cols="30"></textarea>
<p>
<input type="submit" value="Отправить сообщение"/>
</p>
</form>

Статус письма:<?php
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['mess'])) {$mess = $_POST['mess'];}
if (empty($name))
{
echo "<b>Не указано имя!<p>";
echo "<a href=contacts.html>Вернуться к заполнению формы</a>";
exit;
} 
if (empty($email))
{
echo "<b>Не указан e-mail!<p>";
echo "<a href=contacts.html>Вернуться к заполнению формы</a>";
exit;
}
if (empty($mess))
{
echo "<b>Сообщение не написано!<p>";
echo "<a href=contacts.html>Вернуться к заполнению формы</a>";
exit;
}
$to = $email;
$headers = "Content-type: text/plain; charset = windows-1251";
$subject = "Сообщение о мониторинге";
$subject = "=?utf-8?b?".base64_encode($subject)."?=";
        $headers = "From: $from\r\nReply-to:$from\r\nContent-type:text/html;charset=utf-8\r\n";
$message = "Имя пославшего: $name  \nСообщение: $mess";

$send = mail ($to, $subject, $message, $headers);
if ($send == 'true')
{
echo "<b>Спасибо за отправку вашего сообщения!<p>";
echo "<a href=index.html>Нажмите,</a> чтобы вернуться на главную страницу";
}
else 
{
echo "<p><b>Ошибка. Сообщение не отправлено!";
}
?>
<body>
<big>Вы успешно отправили сообщение !!!</big>
</body>

</html>
