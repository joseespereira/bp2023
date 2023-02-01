<?php
session_start();
include("../conn/conexao.php");

	
		
$id_agrupamento = addslashes($_POST['id_agrupamento']);
$senha = addslashes($_POST['senha']);
$confirmarSenha = addslashes($_POST['confsenha']);


$sqlCliente = "SELECT * FROM agrupamentos WHERE id_agrupamento='".$id_agrupamento."'";
$resCliente = $conexao->query($sqlCliente);

$ClienteEdita = $resCliente->fetch(PDO::FETCH_ASSOC);

foreach ($ClienteEdita as $key => $value) {
	$email= $ClienteEdita['email'];	
			
}	

	if ($senha == $confirmarSenha)  // confirmar senha e senhaConfirma 
	{
		$sql = $conexao->prepare("SELECT id FROM usuarios WHERE id_agrupamento =:e");
		$sql->bindValue(":e", $id_agrupamento);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			echo "<script language='javascript'>window.alert('O Agrupamento já se encontra registado..!'); </script>";
			echo "<script language='javascript'>window.location='registoregiao1.php'; </script>";
			exit;
		} else {
			// caso não esteja registar
			$sql = $conexao->prepare("INSERT INTO usuarios (id_agrupamento,senha, nivel_acesso, situacao) VALUES (:id,:s,:na,:sit)");
			$sql->bindValue(":id", $id_agrupamento);
			$sql->bindValue(":s", SHA1($senha));
			$sql->bindValue(":na", 1);
			$sql->bindValue(":sit", 0);
			//$sql->execute();
			if ($sql->execute()) {
				if ($sql->rowCount() > 0) {
					echo "Dados registado com sucesso!";
					$_SESSION['registo_id']=$conexao->lastInsertId();
					$_SESSION['registo_email']= $email;
					header('Location: registoregiao3.php');
					exit;
				} else {
				}
				} else {
				}	
			//$_SESSION['msg'] = "<p style='color:green;'>Registo com sucesso ! Faça login para entra</p>";
			//header("Location: registo3.php");
			//exit;
			//echo 'inserir na db';			

		}
	} else {
		
		echo "<script language='javascript'>window.alert('Password e o confirmar password não correspondem..!'); </script>";
		echo "<script language='javascript'>window.location='registoregiao1.php'; </script>";

	}
//} else {
	//echo "preencha todos os campos!";
//}
//@$conexao->close();

//header('Location: ./registo3.php');
exit;
?>