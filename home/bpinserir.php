<?php
session_start();
include('../connxx/conexao.php');
?>


<?php

// seccao

$_SESSION['usuario_id'];
// subseccao
$bandos = $_POST["bandos"];
$patrulhas =$_POST["patrulhas"];
$equipas =$_POST["equipas"];
$tribos =$_POST["tribos"];


// elementos
$lobitos =$_POST["lobitos"];
$exploradores =$_POST["exploradores"];
$pioneiros =$_POST["pioneiros"];
$caminheiros =$_POST["caminheiros"];


// animadores
$animadores1 =$_POST["animadores1"];
$animadores2 =$_POST["animadores2"];
$animadores3 =$_POST["animadores3"];
$animadores4 =$_POST["animadores4"];


if($lobitos >=1 || $animadores1>=1) {
$s1 = "INSERT INTO inscricoes 
					(id_agrupamento,
					seccao,
					subseccao,
					elementos,
					animadores)


					VALUES('".$_SESSION['usuario_id']."',
					'Alcateia',
					'".$_POST["bandos"]."',
					'".$_POST["lobitos"]."',
					'".$_POST["animadores1"]."')";


						
mysqli_query($conn, $s1);
}




if ($exploradores >=1 || $animadores2>=1) {
	
$s2 = "INSERT INTO inscricoes 
					(id_agrupamento,
					seccao,
					subseccao,
					elementos,
					animadores)


					VALUES('".$_SESSION['usuario_id']."',
					'Expedição',
					'".$_POST["patrulhas"]."',
					'".$_POST["exploradores"]."',
					'".$_POST["animadores2"]."')";


						
mysqli_query($conn, $s2);
}


if ($pioneiros >=1 || $animadores3>=1) {
$s3= "INSERT INTO inscricoes 
					(id_agrupamento,
					seccao,
					subseccao,
					elementos,
					animadores)


					VALUES('".$_SESSION['usuario_id']."',
					'Comunidade',
					'".$_POST["equipas"]."',
					'".$_POST["pioneiros"]."',
					'".$_POST["animadores3"]."')";


						
mysqli_query($conn, $s3);
}

if($caminheiros >=1 || $animadores4>=1) {
$s4 = "INSERT INTO inscricoes 
					(id_agrupamento,
					seccao,
					subseccao,
					elementos,
					animadores)


					VALUES('".$_SESSION['usuario_id']."',
					'Tribos',
					'".$_POST["tribos"]."',
					'".$_POST["caminheiros"]."',
					'".$_POST["animadores4"]."')";


						
mysqli_query($conn, $s4);
}

echo("<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>");
exit();
?>



