<?php 
@session_start();
require_once("../conn/conexao.php"); 

?>

 <?php

 if(empty($_POST['email']) || empty($_POST['senha'])){
 	 	echo "<script language='javascript'>window.location='login.php'; </script>";
 	exit();

 }

$email =  $_POST['email'];
$senha =  $_POST['senha'];


$res = $conexao->prepare("SELECT * from usuarios where email = :email and senha = :senha and situacao='1'");
		$res->bindValue(":email", $email);
		$res->bindValue(":senha", $senha);
		
		$res->execute();
		$dados = $res->fetchAll(PDO::FETCH_ASSOC);
		$linhas = count($dados);

		if($linhas > 0){

			$_SESSION['nome_usuario'] = $dados[0]['nome'];
			$_SESSION['nivel_usuario'] = $dados[0]['nivel'];
			

			echo "<script language='javascript'>window.location='index.php'; </script>";

			}else{

				echo "<script language='javascript'>window.alert('Dados Incorretos!'); </script>";

				echo "<script language='javascript'>window.location='login.php'; </script>";
			}


