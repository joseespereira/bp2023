<?php
session_start();
//require_once '../../acesso/protege.php';
@require_once '../conn/conexao.php';
//require_once '../../config/meta.php';
//require_once '../../inc/config.php';
//require_once '../../func/control.php';
$id = $_GET['id'];
//@$utilizador = $_SESSION['usuario_id'];
//$registo = $id;



			$sql = "DELETE from inscricoes WHERE id='$id'"; 
			$res = $conexao->query($sql);
			$res->execute();

		echo "<div class='alert alert-danger text-center' role='alert'><h1>Removido com sucesso...</h1></div>";
		echo "<meta http-equiv='refresh' content='2;URL=bplista.php'>";

?>