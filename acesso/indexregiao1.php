<?php 
@session_start();
require_once("../conn/conexao.php"); 

?>

 <?php

// if(empty($_POST['email']) || empty($_POST['senha'])){
// 	 	echo "<script language='javascript'>window.location='login.php'; </script>";
// 	exit();

 //}


$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);

$res0 = $conexao->prepare("SELECT * from agrupamentos where email = :email");
$res0->bindValue(":email", $email);
$res0->execute();
$dados0 = $res0->fetchAll(PDO::FETCH_ASSOC);
$linhas0 = count($dados0);

if ($linhas0 > 0) {
	echo $id =  $dados0[0]['id_agrupamento'];
	} 

$res = $conexao->prepare("SELECT * from usuarios where id_agrupamento = :id and senha = :senha");
$res->bindValue(":id", $id);
$res->bindValue(":senha", SHA1($senha));
$res->execute();
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
//var_dump($dados);
echo $linhas = count($dados);

if ($linhas > 0) {

	if ($dados[0]['situacao'] == 0) {
		// informa que esta registado mas não esta ativo retorno index inicial
		echo "<script language='javascript'>window.alert('Está registado, mas não está ativo, verifique o seu email..!'); </script>";
		echo "<script language='javascript'>window.location='../home'; </script>";
	} 
	else 
	{

		// guarde numa session os dados

		$_SESSION['usuario_id'] = $dados[0]['id'];
		$_SESSION['usuario_numero'] = $dados0[0]['numero'];
		$_SESSION['usuario_agrupamento'] = $dados0[0]['agrupamento'];
		$_SESSION['usuario_email'] = $dados0[0]['email'];
		$_SESSION['usuario_nivel'] = $dados[0]['nivel_acesso'];
		$_SESSION['usuario_situacao'] = $dados[0]['situacao'];

		echo "<script language='javascript'>window.location='../home'; </script>";
	}





	
} 
else 
{

	echo "<script language='javascript'>window.alert('Não se encontra registado !...'); </script>";
	echo "<script language='javascript'>window.location='registoregiao1.php'; </script>";
}




