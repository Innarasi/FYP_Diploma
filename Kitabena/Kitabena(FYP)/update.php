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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form4")) {
  $insertSQL = sprintf("INSERT INTO stock (Name, Price, Quantity, `Serial Number`) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['Name'], "text"),
                       GetSQLValueString($_POST['Price'], "double"),
                       GetSQLValueString($_POST['Quantity'], "int"),
                       GetSQLValueString($_POST['Serial_Number'], "text"));

  mysql_select_db($database_Kitabenaconnnection, $Kitabenaconnnection);
  $Result1 = mysql_query($insertSQL, $Kitabenaconnnection) or die(mysql_error());

  $insertGoTo = "view.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form4")) {
  $updateSQL = sprintf("UPDATE stock SET Price=%s, Quantity=%s, `Serial Number`=%s WHERE Name=%s",
                       GetSQLValueString($_POST['Price'], "double"),
                       GetSQLValueString($_POST['Quantity'], "int"),
                       GetSQLValueString($_POST['Serial_Number'], "text"),
                       GetSQLValueString($_POST['Name'], "text"));

  mysql_select_db($database_Kitabenaconnnection, $Kitabenaconnnection);
  $Result1 = mysql_query($updateSQL, $Kitabenaconnnection) or die(mysql_error());

  $updateGoTo = "view.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

mysql_select_db($database_Kitabenaconnnection, $Kitabenaconnnection);
$query_Stock = "SELECT * FROM stock";
$Stock = mysql_query($query_Stock, $Kitabenaconnnection) or die(mysql_error());
$row_Stock = mysql_fetch_assoc($Stock);
$totalRows_Stock = mysql_num_rows($Stock);
?>

<style type="text/css">
<!--
body {
	background-image: url(003-subtle-light-pattern-background-texture-vol51.jpg);
	background-color: #9F9;
}
-->
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<form id="form3" name="form1" method="get" action="Stock2.php">
  <ul id="MenuBar1" class="MenuBarHorizontal">
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
</form>
<form method="post" name="form3" id="form3">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<form method="post" name="form2" id="form2">
  <div align="center">
    <table width="555" height="320" border="1" cellpadding="1" cellspacing="1">
      <tr bgcolor="#D4BF55">
        <td width="372" bgcolor="#D47FFF"><div align="center">
          <input type="hidden" name="MM_insert" value="form4" />
        </div>
        <?php
mysql_free_result($Stock);
?>
        <table align="center">
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Name:</td>
            <td><?php echo $row_Stock['Name']; ?></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Price:</td>
            <td><input type="text" name="Price" value="<?php echo htmlentities($row_Stock['Price'], ENT_COMPAT, ''); ?>" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Quantity:</td>
            <td><input type="text" name="Quantity" value="<?php echo htmlentities($row_Stock['Quantity'], ENT_COMPAT, ''); ?>" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Serial Number:</td>
            <td><input type="text" name="Serial_Number" value="<?php echo htmlentities($row_Stock['Serial Number'], ENT_COMPAT, ''); ?>" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">&nbsp;</td>
            <td><input type="submit" value="Update record" /></td>
          </tr>
        </table>
        <input type="hidden" name="Name" value="<?php echo $row_Stock['Name']; ?>" />
        <input type="hidden" name="MM_update" value="form4" /></td>
      </tr>
    </table>
  </div>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
  </script>
