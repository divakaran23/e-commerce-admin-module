<?php   
require "DB_Connect.php"; 
// SQL command to create a new table in techstore database
// This table holds the admin details
$sqlCommand = "create table admin(id int(11) NOT NULL auto_increment, username varchar(20) NOT NULL, password varchar(20) NOT NULL, last_log_date date NOT NULL, PRIMARY KEY(id), UNIQUE KEY username(username))";
if(mysql_query($sqlCommand)){
	echo "Your admin table has been created successfully";
}else{
	echo "ERROR: admin table not created";
}
?>