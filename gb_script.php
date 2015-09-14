<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$db_host = 'localhost';
$db_user = 'ci89645_777';
$db_password = 'I1VDKDB6';
$database = 'ci89645_777';

mysql_connect($db_host, $db_user, $db_password);
mysql_select_db($database);

mysql_query("CREATE TABLE IF NOT EXISTS gb
              (`id` int(10) unsigned NOT NULL auto_increment,
              `date` datetime NOT NULL,
              `name` text,
              `email` text,
              `message` text,
              PRIMARY KEY  (`id`) )
              ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6849")
or die(mysql_error());

$query = "INSERT INTO `gb`
        (`id`, `date`, `name`, `email`, `message`)
        VALUES ('', NOW(), '$name', '$email', '$message')";
$result = mysql_query($query);
if (!$result) {
    $feedback = 'ОШИБКА - Ошибка базы данных';
    $feedback .= mysql_error();
    return $feedback;
}

header("Location: ../gb.php");