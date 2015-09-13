<?php
echo "
<html>
<head>
<link rel='stylesheet' type='text/css' href='style.css' />
<title> Гостевая книга </title>
<meta charset='UTF-8'>
</head>

<body>
<form id='form' action='gb_script.php' method='post'>
<h1>Гостевая книга</h1>
<p>Имя <br /> <input type='text' name='name'> </p>
<p>E-mail <br /> <input type='text' name='email'> </p>
<p>Сообщение <br /> <textarea name='message' cols='40' rows='3'> </textarea> </p>
<p><input id='submit' type='submit' value='Отправить'> </p>
</form>
<br/> <br/>
<h2 style='margin-left:10px'> Записи: </h2>";

$db_host = 'localhost';
$db_user = 'ci89645_777';
$db_password = 'I1VDKDB6';
$database = 'ci89645_777';

mysql_connect($db_host, $db_user, $db_password);
mysql_select_db($database);
$r = mysql_query("SELECT *
                  FROM gb
                  ORDER BY 'id' DESC");
for ($i = 0; $i < mysql_num_rows($r); $i++) {
    $f = mysql_fetch_array($r);
    print "<table id='notes'> <tr id='notes1'> <td>$f[1] <hr> </td> </tr>
                              <tr id='notes2' title=$f[3]> <td>$f[2]: </td> </tr>
                              <tr> <td>$f[4] <br> </td> </tr> </table> ";
}

echo "
<hr>
<a title='Перейти' style='margin-left:10px' href='index.html'> Назад </a>
</body>
</html>";