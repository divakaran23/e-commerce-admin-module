<?php
/*
@author: Divakaran Jeyachandran
Logout functionality
*/
?>
<?php
// This destroys the existing session and redirects to the index page which in turn redirects to admin_login page
session_start();
unset($_SESSION['manager']);
session_destroy();
header("Location: index.php");
exit;
?>