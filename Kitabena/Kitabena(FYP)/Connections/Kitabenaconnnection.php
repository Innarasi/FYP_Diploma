<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Kitabenaconnnection = "localhost";
$database_Kitabenaconnnection = "kitabena";
$username_Kitabenaconnnection = "root";
$password_Kitabenaconnnection = "";
$Kitabenaconnnection = mysql_pconnect($hostname_Kitabenaconnnection, $username_Kitabenaconnnection, $password_Kitabenaconnnection) or trigger_error(mysql_error(),E_USER_ERROR); 
?>