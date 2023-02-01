<?php 
session_start();
include('../conn/conexao.php');
include ('../config/functions.php');

$email = $_POST['email'];
$_SESSION['email'] = $email;


if (!$email){ #Verificar se o email possue @ Senão anvia msg de email invalido!!
echo"<script type='text/javascript'> location.href='javascript:history.back()'; alert('O seu email está em branco')</script>";
} else if (strpos ($email, "@")) {
$email = $email;
} else {
echo"<script type='text/javascript'> location.href='javascript:history.back()'; alert('O seu email está inválido!!')</script>";	
}


//$cmd = $conexao->query("SELECT * FROM usuarios WHERE email = '$email' and situacao=1");

$cmd = $conexao->prepare("SELECT * FROM usuarios WHERE email = :e and situacao= :s");
$cmd->bindValue(":e",$email);
$cmd->bindValue(":s",'1');
$cmd->execute();
$dados = $cmd->fetch(PDO::FETCH_ASSOC);

//foreach ($dados as $key => $value) {
		$id=$dados['id'];
		$nome=$dados['nome'];
		$apelido = $dados['apelido'];
		$email = $dados['email'];
		//echo $key." ".$value;
//}

$password_randomica=generatePasswordsUsingCharactersAndNumbers(8); 
$password=$password_randomica;

// verificar erros
//try {

$upd = $conexao->prepare("UPDATE usuarios SET senha = :p WHERE id = :id");
$upd->bindValue(":p",SHA1($password_randomica));
$upd->bindValue(":id",$id);
$upd->execute();
$destinatario = $email;


			$enviar= '<P></P>
			<p>Olá !!!</p>
			<p><b>'.$nome. " ".$apelido.' </b></p>
			<p>Pediu para recuperar a sua password para poder aceder à plataforma do JMJ2023 Abrantes </p>
			<p>Nova Password <b>'.$password_randomica.'</b></p>
			<p>Esperamos que nos visite brevemente </p>
			<br>
			<p>Obrigado!!  </p>
			<br>
			<hr>';

			$assunto ="Recuperação de Password";
			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8\r\n";

			// More headers
			$headers .= "From: webmaster@suporte22.losephus.eu\r\n";

			if(!mail($destinatario,$assunto,$enviar,$headers))
			  {
			echo "<script type='text/javascript'> location.href='../home'; alert('Confirmação não efectuada, tente mais tarde...!')</script>";  
			  } else {
			echo "<script type='text/javascript'> location.href='../home'; alert('Sua password foi enviada para sua conta de email com sucesso! Obrigado !')
			</script>";  
			}	
			

?>
