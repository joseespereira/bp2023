
<?php
header("Content-Type: text/html; charset=utf-8");
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "bp";
	
	$conn = mysqli_connect("localhost","root","","bp");
	mysqli_set_charset($conn,"utf8");	
	
	/*mysqli_query("SET NAMES 'utf8'");
	mysqli_query("SET character_set_connection=utf8");
	mysqli_query("SET character_set_client=utf8");
	mysqli_query("SET character_set_results=utf8");*/

  
?>