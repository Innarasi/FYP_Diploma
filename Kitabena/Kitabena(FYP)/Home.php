<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "Welcome page.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#form1 p {
	text-align: center;
}
body {
	background-color: #F5EEEE;
	color: #000;
	background-image: url(../images%20(4)
.jpg);
	background-repeat: repeat;
	background-image: url(003-subtle-light-pattern-background-texture-vol51.jpg);
}
#form2 div a {
	color: #000;
}
#form1 div button h3 {
	font-weight: bold;
}
#form1 div button h3 {
	color: #600;
}
#form1 p button h3 {
	color: #600;
}
</style>
<link href="login2.php.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	width:453px;
	height:35px;
	z-index:1;
	left: 11px;
	top: 12px;
}
-->
</style>
<style type="text/css">
<!--
#apDiv2 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
}
#form1 table {
	font-size: 16px;
}
#form1 table {
	font-size: 10px;
}
#form1 table {
	font-size: 10cm;
}
#form1 div p {
	font-size: 18px;
}
#form1 div p {
	font-size: 36px;
}
#form1 div p {
	font-family: Verdana, Geneva, sans-serif;
}
#form1 div p {
	font-family: MS Serif, New York, serif;
}
#form1 p em {
	font-family: Georgia, Times New Roman, Times, serif;
}
#form1 div p {
	font-size: 42px;
}
#form1 div p {
	font-size: 36px;
}
#form1 div p {
	color: #FFF;
}
-->
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body>
<ul id="MenuBar1" class="MenuBarHorizontal">
  <li><a href="Home.php">HOME</a>  </li>
  <li><a href="#" class="MenuBarItemSubmenu">STOCK</a>
    <ul>
      <li><a href="insert.php">INSERT</a></li>
      <li><a href="update.php">UPDATE</a></li>
      <li><a href="view.php">DELETE</a></li>
    </ul>
  </li>
  <li><a href="Supplier.php">SUPPLIER</a>  </li>
  <li><a href="Welcome.php">LOGOUT</a></li>
</ul>
<form id="form1" name="form1" method="get" action="Stock2.php">
  <div align="center"></div>
</form>
<form id="form1" name="form1" method="get" action="Supplier.php">
  <div align="justify"> </div>
  <p align="justify">&nbsp;</p>
  <div align="left">
    <p>&nbsp;</p>
    <p><a name="_GoBack" id="_GoBack"></a></p>
    <table width="12" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="untitled.jpg" alt="&lt;img src=&quot;../untitled.jpg&quot; width=&quot;786&quot; height=&quot;444&quot; /&gt;" width="391" height="337" /></td>
      </tr>
    </table>
  </div>
  <p align="left"><em>Perniagaan Kitabena </em></p>
  <p>&nbsp;</p>
<p>The company start to sell out the item on 1990  by partners which is his brothers. Beginning in 2010,the business was first</p>
<p> established by Abdul Rafik Bin Yusof ,which is located at Lot 1378 Kg.Gau Baru  km13, </p>
<p>Jalan Maran, 28000 Temerloh, Pahang.The company has only 10 employees.  The company make and supplies </p>
<p>steel appliances and building materials.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>This System Copyright by Innarasi, Diploma In programming from Polytechnic Muadzam Shah.</p>
<p align="left">&nbsp;</p>
</form>
<p></form>
</p>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
</html>
