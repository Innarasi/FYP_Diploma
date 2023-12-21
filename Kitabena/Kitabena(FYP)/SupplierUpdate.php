<?php require_once('Connections/Kitabenaconnnection.php'); ?>
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

mysql_select_db($database_Kitabenaconnnection, $Kitabenaconnnection);
$query_Supplier = "SELECT * FROM supplier";
$Supplier = mysql_query($query_Supplier, $Kitabenaconnnection) or die(mysql_error());
$row_Supplier = mysql_fetch_assoc($Supplier);
$totalRows_Supplier = mysql_num_rows($Supplier);

$query_Supplier = "SELECT * FROM  supplier";
$Supplier = mysql_query($query_Supplier, $Kitabenaconnnection) or die(mysql_error());
$row_Supplier = mysql_fetch_assoc($Supplier);
$totalRows_Supplier = mysql_num_rows($Supplier);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
@import url("Home.php.css");

#form1 {
	text-align: left;
}
#form1 p {
	text-align: center;
}
#form1 p label {
	text-align: left;
}
#form1 p label {
	text-align: left;
}
#form1 p label {
	text-align: left;
}
#form1 p {
	text-align: left;
}
body {
	background-color: #FFF;
	background-image: url(../images%20(4)
.jpg);
	background-image: url(Inna/Background/background-pattern-design-56%20(1)
.jpg);
	background-image: url(Inna/Background/images%20(9)
.jpg);
	background-image: url(003-subtle-light-pattern-background-texture-vol51.jpg);
}
#form1 p label {
	text-align: left;
}
#form1 div p label {
	text-align: justify;
}
#form1 div p label {
	text-align: left;
}
#form1 div p label {
	text-align: left;
}
#form1 div p label {
	text-align: left;
}
#form1 div p label {
	text-align: justify;
}
#form1 div p label {
	text-align: left;
}
#form1 div button strong {
	color: #009;
}
#MenuBar {
	color: #FF80C0;
}
ul {
	color: #80FF00;
}
</style>
<link href="Home.php.css" rel="stylesheet" type="text/css" />
<link href="includes/ice/Level1_Arial.css" rel="stylesheet" type="text/css" media="all" />
<link href="../CSS/Level1_Arial.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
a:link {
	color: #400000;
}
#MenuBar {
	color: #FF8080;
}
#MenuBar li {
	color: #FF8040;
}
#MenuBar li {
	color: #FF0;
}
-->
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p><label></label>


<form id="form1" name="form1" method="get" action="Supplier.php">
  <div align="center"></div>
</form>
<tr>
  <td width="378"><table width="1237" border="0" cellspacing="1" cellpadding="1">
      <tr>
        <td width="10" height="738"><p>&nbsp;</p>
          <p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
          <p>&nbsp;</p>
          <legend></legend>
          <legend></legend>
          <legend></legend>
  <p>&nbsp;</p>
  <p>
    <legend></legend>
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <form method="post" name="form4" id="form4">
          </form>
          <p>&nbsp;</p>
<p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>        <legend></legend></td>
        <td width="1220"><ul id="MenuBar1" class="MenuBarHorizontal">
          <li><a href="Home.php">HOME</a></li>
          <li><a href="#" class="MenuBarItemSubmenu">STOCK</a>
            <ul>
              <li><a href="insert.php">INSERT</a></li>
              <li><a href="update.php">UPDATE</a></li>
              <li><a href="view.php">DELETE</a></li>
            </ul>
          </li>
          <li><a href="Supplier.php">SUPPLIER</a></li>
          <li><a href="Welcome.php">LOGOUT</a></li>
        </ul>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <table width="1135" border="1" cellspacing="1" cellpadding="1">
            <tr>
              <td width="1127" bgcolor="#D47FFF"><p>&nbsp;</p>
                <form method="post" enctype="multipart/form-data" name="form2" id="form2">
                </form>
                <div align="center">
                  <table border="1">
                    <tr>
                      <td>name</td>
                      <td>Contact Number</td>
                      <td>email</td>
                      <td>address</td>
                      <td>&nbsp;</td>
                    </tr>
                    <?php do { ?>
                      <tr>
                        <td><?php echo $row_Supplier['name']; ?></td>
                        <td><?php echo $row_Supplier['Contact Number']; ?></td>
                        <td><?php echo $row_Supplier['email']; ?></td>
                        <td><?php echo $row_Supplier['address']; ?></td>
                        <td><a href="SupplierView.php?Email=<?php echo $row_Supplier['email']; ?>">viewdetail</a></td>
                      </tr>
                      <?php } while ($row_Supplier = mysql_fetch_assoc($Supplier)); ?>
                  </table>
                </div>
              <p>&nbsp;</p></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
          <p>&nbsp;</p>
<p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        <p>&nbsp; </p></td>
      </tr>
    </table>
      <div align="center"></div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
<form method="post" name="form3" id="form3">
</form>
<p>&nbsp;</p>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
</html>
<?php
mysql_free_result($Supplier);
?>
