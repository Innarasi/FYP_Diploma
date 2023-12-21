<?php require_once('C:/xampp/htdocs/Kitabena_Project/kitabena project/Connections/Kitabenaconnnection.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['textfield'])) {
  $loginUsername=$_POST['textfield'];
  $password=$_POST['textfield2'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "Success.php";
  $MM_redirectLoginFailed = "Fail2.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_Kitabenaconnnection, $Kitabenaconnnection);
  
  $LoginRS__query=sprintf("SELECT username, password FROM login WHERE username=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $Kitabenaconnnection) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
	color: #2A0000;
}
body {
	background-color: #FFF;
	background-image: url(003-subtle-light-pattern-background-texture-vol51.jpg);
}
#form1 table {
	color: #CCF;
}
#form1 table {
	color: #FF8080;
}
-->
</style></head>

<body bgcolor="#D49F55">
<p>&nbsp;</p>
<form ACTION="<?php echo $loginFormAction; ?>" id="form1" name="form1" enctype="multipart/form-data" method="POST">
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="594" height="345" border="1" align="center">
    <tr>
      <td height="77" bgcolor="#CC99FF"><div align="center">KITABENA INVENTORY SYSTEM </div></td>
    </tr>
    <tr>
      <td bgcolor="#CC99FF"><p align="center">USERNAME
        <label for="textfield"></label>
        <input name="textfield" type="text" id="textfield" size="20" maxlength="20" />
      </p>
        <p align="center">PASSWORD
          <label for="textfield2"></label>
          <input name="textfield2" type="password" id="textfield2" size="20" maxlength="20" />
        </p></td>
    </tr>
    <tr>
      <td bgcolor="#CC99FF"><div align="center">
 
        <label for="Submit"></label>
        <input type="submit" name="Submit" id="Submit" value="SUBMIT" />
        <input type="reset" name="RESET" id="RESET" value="RESET" />
      </div></td>
    </tr>
  </table>
  .
  <p>.</p>
  <p>.</p>
  <p>.</p>
  <p>
    <label for="SUBMIT"></label>
    <label for="RESET"></label>
  </p>
</form>
</body>
</html>