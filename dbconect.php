<?php 
	$sever="localhost";
	$user="root";
	$password="";
	$link=mysql_connect($sever,$user,$password) or die ('Kết nối không thành công '.mysql_error());
	mysql_query("SET NAMES 'utf8'",$link);
	mysql_select_db("dulich",$link) or die ('Could not select the database: '.mysql_error());
?>