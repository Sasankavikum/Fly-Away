<?php

	define("server","127.0.0.1");
	define("dbname","snackings");
	define("user","root");
	define("pass","");
	
class db_con
{
	
 function __construct()
 {
  $conn = mysqli_connect(server,dbname,user,pass) or die('localhost connection problem'.mysqli_error());
  mysqli_select_db(dbname, $conn);
 }
}


?>