<?php
session_start();
include("../conn/conexao.php");
include ("../func/funcoes.php");
include ("../func/configurar.php");

$id=aes_encriptar($_SESSION['registo_id']);
$nome=$_SESSION['registo_nome'];
$apelido = $_SESSION['registo_apelido'];
$email= $_SESSION['registo_email'];

            $v_mail = verifica_email($email);

            if ($v_mail){

    /* Se passarmos por esta verificação ilesos é hora de finalmente cadastrar
	    	    os dados Vamos utilizar uma função para gerar uma senha randômica */

                            function makeRandomPassword()
                            {

                                $salt = "abchefghjkmnpqrstuvwxyz0123456789";
                                srand((float)microtime() * 1000000);

                                $i = 0;
                                $pass='';
                                while ($i <= 7) {

                                    $num = rand() % 33;
                                    $tmp = substr($salt, $num, 1);
                                    $pass = $pass . $tmp;
                                    $i++;
                                }

                                return $pass;
                            }

				$password_randomica = makeRandomPassword();

				$password = sha1($password_randomica);

					

					// Enviar um email ao usu&aacute;rio para confirmação e ativar o cadastro!

					$headers = "MIME-Version: 1.1\r\n";
					$headers .= "Content-type: text/html; charset=utf-8\r\n";
					$headers .= "FROM: webmaster@losephus.eu\r\n"; // TEU DOMÌNIO E TEU EMAIL 
                    $headers .= "BCC: webmaster@losephus.eu\r\n";
					$subject = "Confirmação de registo";
					$mensagem = "Prezado <strong>$nome $apelido</strong>,
			
								<br /> <br />
			
								Obrigado pelo seu registo em BP2023 
														
								<br /><br />

								Para ativar o seu registo, por favor clique aqui em <a href ='http://www.bp2023.losephus.eu/acesso/ativar.php?id=$id&code=$password'>ATIVAR</a>
								
								</a>

								<br /><br />
								Após a ativação de sua conta, você poderá ter acesso ao conteúdo exclusivo, 
								efetuando o login com os dados de registo:
						
								<br />

								Obrigado!<br /> <br /> 

								Webmaster<br /> <br /> <br /> 

								Esta é uma mensagem automática, por favor não responda!";

					mail($email, $subject, $mensagem, $headers);
					session_destroy();
					echo"<script type='text/javascript'> location.href='../home'; alert('Foi enviado para seu email - ( ".$email." ) com um pedido de confirmação do seu registo, por favor verifique e siga as instruções')</script>"; 
					//print_r(mail($email, $subject, $mensagem, $headers));
				} else {
					echo"<script type='text/javascript'> location.href='registoregiao1.php'; alert('Erro no envio do email')</script>"; 
                }

?>
