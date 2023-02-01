<?php 

include('../conn/conexao.php');
include ('../func/functions.php');
$email = 'joseespereira@gmail.com';



$pergunta = mysqli_query($conn,"SELECT * FROM usuarios WHERE email = '$email' and idsituacao=1");
echo $resposta = mysqli_num_rows($pergunta); # Conta quantos emails foram encontrados na busca -- query!

if (mysqli_num_rows($pergunta) !=1)
 { 
    echo "<script type='text/javascript'> location.href='index.php'; alert('´Nao existe perfil com este email ou não esta ativo')</script>";
    }
 else
	{
//echo "<script type='text/javascript'> location.href='index.php'; alert('´existe perfil com este email')</script>";


$res=mysqli_fetch_assoc($pergunta);
$password_randomica=generatePasswordsUsingCharactersAndNumbers(8); 
$password=$password_randomica;
echo $nome=$res['nome'];
echo $destinatario=$res['email'];

$sql="UPDATE usuarios SET password=MD5('$password') WHERE email='$email'";
echo $sql; 
if (!mysqli_query($conn,$sql));
	//mysqli_close($conn);

			$enviar= '<P></P>
			<p>Olá !!!</p>
			<p><b>'.$nome.' </b></p>
			<p>Pediu para recuperar a sua password para poder aceder à Área Apoio à Secretaria de Campo ACANAC22</p>
			<p>Nova Password :<b>'.$password_randomica.'</b></p>
			<p>Esperamos que nos visite brevemente em https://bit.ly/3zW8TQH</p>
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
			echo "<!-- <script type='text/javascript'> location.href='index.php'; alert('Confirmação não efectuada, tente mais tarde...!')</script>-->";  
			  } 
			  else 
			  {
			echo "<script type='text/javascript'> location.href='index.php'; alert('Sua password foi enviada para sua conta de email com sucesso! Obrigado !')
			</script>";  
			  }	
		
 }


?>