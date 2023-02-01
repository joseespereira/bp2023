<?php
@session_start();
require_once("../conn/conexao.php");
//require_once("../acesso/protege.php");
//$usuario_id = $_SESSION['usuario_id'];

if ($_SESSION['usuario_id']== '') {
	header('Location: ../acesso/index.php');
}
$id_agrupamento = $_SESSION['usuario_id'];
?>

<!doctype html>
<html lang="pt-pt">

<head>
	<title>Inscrições</title>
	<?php include('../config/meta.php'); ?>
	<link rel="stylesheet" type="text/css" href="datatables.min.css"/>
	<script type="text/javascript" src="datatables.min.js"></script>
	<style>
		body {
			margin: 0;
			font-family: 'Encode Sans', sans-serif;
			/*overflow: hidden;*/
		}

		.navbar-nav {
			margin-left: auto;
			text-align: center;
			/*padding: 10px 14px;*/
			text-decoration: none;
			font-size: 16px;
			font-weight: bold;

		}

	table.dataTable {
		width: 95%;
		margin: 0 auto;
		clear: both;
		border-collapse: separate;
		border-spacing: 0;


	}

	table.dataTable thead th,
	table.dataTable tfoot th {
		font-weight: bold;
		background-color: #B5B5B5;
	}

	.dataTables_wrapper {
		font-family: Verdana, Arial, Helvetica, sans-serif;
		font-size: 14px;
		position: relative;
		clear: both;

	}
</style>	
</head>

<body>
	
	<div class="container">
		<div class="col-md-12">
			
			<a class="btn btn-success mt-4 mb-4" href="../" data-toggle="tooltip" data-placement="top" title="Cancelar">Sair</a>
			<?php
			if (isset($_SESSION['message'])) {
			?>
				<div class="alert alert-info text-center" style="margin-top:30px;">
					<?php echo $_SESSION['message']; ?>
				</div>
			<?php

				unset($_SESSION['message']);
			}
			?>
		</div>
		<div class="table-responsive table bg-light">
				<table id="inscricoes" class="table table-striped table-light table-hover" style="margin-top:10px;">
			<thead>
				<tr>
					<th class="text-center d-none d-sm-table-cell">Secção</th>
					<th class="text-center d-none d-sm-table-cell">B/P/E/T</th>
					<th class="text-center d-none d-sm-table-cell">Elementos</th>
					<th class="text-center d-none d-sm-table-cell">Animadores</th>

					<th scope="col">Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php





			$sql = "SELECT * FROM inscricoes WHERE id_agrupamento = $id_agrupamento";
			  

				$res = $conexao->query($sql);
				$res->execute();
				$dados = $res->fetchAll(PDO::FETCH_ASSOC);
				for ($i = 0; $i < count($dados); $i++) {
					foreach ($dados[$i] as $key => $value) {
						
						$id=$dados[$i]['id'];
						$seccao = $dados[$i]['seccao'];
						$subseccao = $dados[$i]['subseccao'];
						$elementos = $dados[$i]['elementos'];
						$animadores = $dados[$i]['animadores'];
						
						
					}
				?>


					<tr>
						<td width="50%"><?= $dados[$i]['seccao']; ?></td>
						<td width="10%"><?= $dados[$i]['subseccao']; ?></td>
						<td width="10%"><?= $dados[$i]['elementos']; ?></td>
						<td width="10%"><?= $dados[$i]['animadores']; ?></td>
						
						<td align="center" width="15%">
							
							
							<a class="btn btn-danger btn-sm" href="excluir.php?id=<?= $id ?>" data-toggle="tooltip" data-placement="top" title="Eliminar Registo"><i class="bi bi-trash" style="font-size: 1rem;"></i></a>
							<a class="btn btn-primary btn-sm"  href="update.php?id<?= $id ?>" data-toggle="tooltip" data-placement="top" title="Editar Registo"><i class="bi bi-pencil-square" style="font-size: 1rem;"></i></a>	
						</td>
						
					</tr>

				<?php 	 }	  ?>

			</tbody>
		</table>
				</div>
	</div>


	<script type="text/javascript">
$(document).ready(function() {
    $('#inscricoes').DataTable( {
       //"order": [[ 0, "desc" ]]
		"order": [ [3,"ASC"], [4,"ASC"] ],
    } );
} );
</script>	
</body>
</html>

