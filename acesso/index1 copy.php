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
		$res->bindValue(":senha", SHA1($senha));
		
		$res->execute();
		$dados = $res->fetchAll(PDO::FETCH_ASSOC);
		$linhas = count($dados);

		if($linhas > 0){
			
			$_SESSION['nomecompleto'] = $dados[0]['nome']." ". $dados[0]['apelido'];
			$_SESSION['id'] = $dados[0]['id'];
			$_SESSION['email'] = $dados[0]['email'];
			$_SESSION['situacao'] = $dados[0]['situacao'];
			$_SESSION['nivel'] = $dados[0]['nivel_acesso'];
			

		echo "<script language='javascript'>window.location='../home'; </script>";

			}else{

				echo "<script language='javascript'>window.alert('Dados Incorretos!'); </script>";

				echo "<script language='javascript'>window.location='index.php'; </script>";
			}




