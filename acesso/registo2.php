<?php
session_start();
include("../conn/conexao.php");

$agrnumero = addslashes($_POST['agrnumero']);
$agrnome = addslashes($_POST['agrnome']);
$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);
$confirmarSenha = addslashes($_POST['confsenha']);

// verificar se esta vazio

/*if (!empty($nome) && 
	!empty($apelido) && 
	!empty($idade) && 
	!empty($email) && 
	!empty($senha) && 
	!empty($confirmarSenha)) {
*/
	if ($senha == $confirmarSenha)  // confirmar senha e senhaConfirma 
	{
		$sql = $conexao->prepare("SELECT * FROM usuarios WHERE email =:e");
		$sql->bindValue(":e", $email);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			echo "<script language='javascript'>window.alert('Este email já se encontra registado..!'); </script>";
			echo "<script language='javascript'>window.location='registo1.php'; </script>";
			exit;
		} else {
			// caso não esteja registar
			
			$sql = $conexao->prepare("INSERT INTO usuarios (numero,agrupamento, email, senha, nivel_acesso, situacao) VALUES (:n,:a,:e,:s,:na,:sit)");
			$sql->bindValue(":n", $agrnumero);
			$sql->bindValue(":a", $agrnome);
			$sql->bindValue(":e", $email);
			$sql->bindValue(":s", SHA1($senha));
			$sql->bindValue(":na", 1);
			$sql->bindValue(":sit", 0);

			if ($sql->execute()) {
				if ($sql->rowCount() > 0) {
					echo "Dados registado com sucesso!";
					$_SESSION['registo_id']=$conexao->lastInsertId();
					$_SESSION['registo_email']= $email;
					header('Location: registo3.php');
					exit;				} else {
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
		echo "<script language='javascript'>window.location='registo1.php'; </script>";

	}
//} else {
	//echo "preencha todos os campos!";
//}
//@$conexao->close();

//header('Location: ./registo3.php');
exit;
?>