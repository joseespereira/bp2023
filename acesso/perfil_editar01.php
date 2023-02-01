<?php
session_start();
//include('../acesso/protege.php');
include('../conn/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
	<?php include('../config/meta.php'); ?>
</head>
  </head>


<?php

$usuario_nome=$_POST["usuario_nome"];
$usuario_id=$_POST["usuario_id"];
$usuario_apelido=$_POST["usuario_apelido"];
$usuario_email=$_POST["usuario_email"];
$usuario_idade=$_POST["usuario_idade"];

$stmt = $conexao->prepare("UPDATE usuarios SET nome = :nome,  apelido = :apelido, idade = :idade, email = :email WHERE id = :id"); 
 
 $stmt->bindParam(":nome", $usuario_nome);
 $stmt->bindParam(":apelido", $usuario_apelido);
 $stmt->bindParam(":idade", $_POST["usuario_idade"]);
 $stmt->bindParam(":email", $usuario_email);
 $stmt->bindParam(":id", $usuario_id); 
 
 $stmt->execute();

						
					// registo o movimento na tabela registos
		
				    ?>
						<!-- Modal -->
						
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="myModalLabel">Perfil atualizado com sucesso!</h5>
										</div>
										<div class="modal-footer">
											<a href="../home"><button type="button" class="btn btn-success">Fechar</button></a>
										</div>
									</div>
								</div>
							</div>		

							<script>
								$(document).ready(function () {
									$('#myModal').modal('show');
								});
							</script>					  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>
