<?php
	@session_start();
	@require_once("../conn/conexao.php");
	@require_once("../config/meta.php");
	//O campo usuário e senha preenchido entra no if para validar
	//if((isset($_POST['email'])) && (isset($_POST['password']))){
		$email = $_POST['email']; //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$password = $_POST['password'];
		$password = md5($password);
			
		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		
		$sql = "SELECT * FROM usuarios WHERE (email='$email' OR username='$email') && password = '$password' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $sql);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		if(isset($resultado)){
			$_SESSION['usuario_id'] = $resultado['id_usuario'];
			$_SESSION['usuario_nome'] = $resultado['nome'];
			$_SESSION['usuario_username'] = $resultado['username'];
			$_SESSION['usuario_email'] = $resultado['email'];
			$_SESSION['usuario_password'] = $resultado['password'];			
			$_SESSION['usuario_situacao'] = $resultado['idsituacao'];	
			$_SESSION['usuario_nivel'] = $resultado['idnivel'];
			$_SESSION['usuario_area'] = $resultado['area'];
			$_SESSION['usuario_genero'] = $resultado['genero'];
			
				if($_SESSION['usuario_situacao'] =='2'){
					echo "<div class='alert alert-info text-center' role='alert'><h6>Será necessário alterar a password</h6></div>";
					echo "<meta http-equiv='refresh' content='2;URL=alterarpass00.php'>";
					} 
				
				if($_SESSION['usuario_situacao'] =='1'){

					//echo "<div class='alert alert-info text-center' role='alert'><h6>Usuário confirmado</h6></div>";
					echo "<meta http-equiv='refresh' content='0;URL=../menu.php'>";
				}
				
		
		} else {
		
		echo "<div class='alert alert-danger text-center' role='alert'><h6>Usuário ou password inválido</h6></div>";
		echo "<meta http-equiv='refresh' content='2;URL=index.php'>";
		}
		
		

?>