<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="estilo/condominio.css" rel="stylesheet" type="text/css" />
<title></title>
</head>
<body>
<?php

include ("../conn/conexao.php");
include ("../func/configurar.php");
$id = aes_desencriptar($_REQUEST['id']);
$situacao = 1;


$stmt = $conexao->prepare("UPDATE usuarios SET situacao = :situacao WHERE id = :id"); 
 
 $stmt->bindParam(":situacao", $situacao);
 $stmt->bindParam(":id", $id); 
 
 $stmt->execute();
 
if($stmt->rowCount() > 0){

	echo"<script>alert('O seu registo foi ativado com sucesso...!');
	window.location='index.php';
	</script>";
}else{
	echo"<script>alert('O seu registo não foi ativado, verifique o seu email...!');
	window.location='index.php';
	</script>";
}


?>

</body>
</html>