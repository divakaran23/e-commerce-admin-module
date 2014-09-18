<?php
/*
@author: Divakaran Jeyachandran
Index file of admin
*/
?>
<?php
// This block to to check the session. If previous session is still valid, redirects to index page else to the admin_login page
session_start();
if(!isset($_SESSION["manager"])){
	header("location: admin_login.php");
	exit();
}
$managerID = preg_replace('#[^0-9]#i', '', $_SESSION["id"]);
$manager = preg_replace('#[^A-Za-z0-9]#i', '', $_SESSION["manager"]);
$password = preg_replace('#[^A-Za-z0-9]#i', '', $_SESSION["password"]);
include "../DB_Connect.php"; 
$sql = mysql_query("SELECT * FROM admin WHERE id='$managerID' AND username='$manager' AND password='$password' LIMIT 1");
$existCount = mysql_num_rows($sql); // count the row nums
if ($existCount == 0) { // evaluate the count
	 echo "Your login session data is not on record in the database.";
     exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Page</title>
<link rel="stylesheet" href="../style/style.css" type="text/css"/>
</head>
<body>
<center>
<div id="mainWrapper">
    <?php include_once("../header.php"); ?>
     <div align="right" style="margin-right:32px;"><a href="logout.php">Logout</a><br /></div>
    <div id="pageContent" style="height:470px;">
    <div align="left" style="padding-left:20px">
    <h2>Welcome Admin, What would you like to do today?</h2>
    <table width="59%" height="61" border="0">
      <tr>
        <td width="51%"><p><a href="inventory_list.php"><img src="../category_images/manage.jpg" width="204" height="164" alt="manage inventory" /></a></p>
          <p style="font-size:16px;"><a href="inventory_list.php">Manage Inventory</a></p></td>
        <td width="49%"><p><a href="item_category.php"><img src="../category_images/manageCategory.jpg" width="229" height="160" alt="manage by category" /></a></p>
          <p style="font-size:16px;"><a href="item_category.php">Manage Inventory by Category</a></p></td>
      </tr>
    </table>
    <p style="font-size:16px;">&nbsp;</p>
    </div>
    </div>
    <?php include_once("../footer.php"); ?>
</div>
</center>
</body>
</html>