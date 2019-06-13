<?php 
	$database_host="localhost";
	$database_user="root";
	$database_pass="";
	$database="db_thpestcontrol";
	
	if(mysql_connect($database_host,$database_user,$database_pass) && mysql_select_db($database)){
		//echo Connected";
	}
	else {
		echo "Not Connected !! ";
		die();		
	}

?>