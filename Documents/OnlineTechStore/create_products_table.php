<?php   
require "DB_Connect.php"; 
// SQL command to create a new table in myStore database
// This table holds the techstore's products
$sqlCommand = "create table products(id int(11) NOT NULL auto_increment, product_name varchar(255) NOT NULL, price varchar(16) NOT NULL, details text NOT NULL, category varchar(16) NOT NULL, date_added date NOT NULL, PRIMARY KEY(id), UNIQUE KEY product_name(product_name))";
if(mysql_query($sqlCommand)){
	echo "Your product table has been created successfully";
}else{
	echo "ERROR: aproduct table not created";
}
?>