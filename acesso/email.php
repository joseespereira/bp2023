<?php
$nome='José Pereira';
$destinatario='joseespereira@gmail.com';
$password_randomica='teste';


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
			//$headers .= "BCC: geral@losephus.pt\r\n";
			
			
			if(!mail($destinatario,$assunto,$enviar,$headers))
			  {
			echo "<!-- <script type='text/javascript'> location.href='index.php'; alert('Confirmação não efectuada, tente mais tarde...!')</script>-->";  
			  } 
			  else 
			  {
			echo "<script type='text/javascript'> location.href='index.php'; alert('Sua password foi enviada para sua conta de email com sucesso! Obrigado !')
			</script>";  
			  }	

?>