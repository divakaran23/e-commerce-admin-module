<?php
/*
@author: Divakaran Jeyachandran
Different product categories page
*/
?>
<?php
// to check the session
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
<title>Product Category</title>
<link rel="stylesheet" href="../style/style.css" type="text/css"/>
</head>
<body>
<center>
<div id="mainWrapper">
    <?php include_once("../header.php"); ?>
    <div id="pageContent">
    <div align="right" style="margin-right:32px"><a href="logout.php">Logout</a><br /><a href="index.php">Back to main</a></div>
    <div align="left" style="padding-left:5px; padding-right:5px;">
    <h2>Item Categories</h2>
    <table width="100%" height="275" border="1">
      <tr>
        <td width="35%" height="269"><div>
          <p><a href="product_category_list.php?cat=Smartphones"><img src="../category_images/smartphone2.jpg" width="290" height="174" alt="smartphones" /></a></p>
          <center><p><a href="#">Smartphones</a></p></center>
        </div></td>
        <td width="33%"><div>
          <p><a href="product_category_list.php?cat=Laptops"><img src="../category_images/laptop.jpg" width="225" height="176" alt="laptops" /></a></p>
          <center><p><a href="#">Laptops</a></p></center>
        </div></td>
        <td width="32%"><div>
          <p><a href="product_category_list.php?cat=Books"><img src="../category_images/books.jpg" width="275" height="181" alt="books" /></a></p>
          <center><p><a href="#">Books</a></p></center>
        </div></td>
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