<?php
header("Content-Type: text/html; charset=utf-8");
	$servidor = "localhost";
	$usuario = "medicalc_gest";
	$senha = "wImJTbWIH~Zt";
	$dbname = "medicalc_gestao";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	mysqli_set_charset($conn,"utf8");	
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>
	

