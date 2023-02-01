<?php  
session_start();
include('../connxx/conexao.php');
?>
<!doctype html>
<html lang="pt-pt">
	<head>
	
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://kit.fontawesome.com/b737dee742.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-->
<link rel="stylesheet" href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>

<!--<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<script type="text/javascript" src="data.js"></script>-->
		
		<title></title>
		
		
		
	</head>
<body>
<style tyle="text/css">
div.barra {
    background: #00008B;
    /*margin-bottom: 10px;*/
    padding: 5px;
    display: block;
}

</style>

<div class="barra"></div>


<?php

// Fazemos o include do arquivo com as config do banco de dados
//include_once ('includes/db.php'); 
$id_agrupamento = $_SESSION['usuario_id'];
mysqli_query($conn, "SET NAMES 'utf8'");
$sql = "select * from inscricoes WHERE id_agrupamento = 8 ";

$res = mysqli_query($conn,$sql);

$conta1=0;
$contaelementos=0;
$contaanimadores=0;
?>


<div class="container-fluid">
<div class="row">
    <div class="col text-center">
<!-- <a href="index.php" class="btn btn-info">Sair</a> <hr/>-->
</div>
  </div>
<br>
   <div class="row">
   
		   <div <div class="col-4 col-md-4" style="text-align: left;">
				<span class="d-none d-md-block">
					<h2 class="display-5 titulo">Lista de Inscritos</h2>
				</span>
			</div>


		   <div class="col-8 col-md-8" style="text-align: right;">
					<span class="d-none d-md-block">
						<!--<a href="cliente_inserir00.php?" class="btn btn-outline-primary btn-sm">Novo Cliente</a>
						<a href="#" class="btn btn-outline-primary btn-sm">Mapa Clientes</a>-->
						<a href="index.php" class="btn btn-success btn-sm">Sair</a>
					</span>
			</div>
	</div>


<div class="table-responsive">
<table class="table table-bordered table-hover table-sm" id="example" class="display">

        <thead>
            <tr>
               	<th align="center">Secção</th>
                <th align="center">Ban/Pat/Equ/Tri</th>
                <th align="center">Elementos</th>
                <th align="center" >Animadores</th>
				<th></th>
				
            </tr>
        </thead>
        <tbody>   
<?php   
   while($row_usuario = mysqli_fetch_assoc($res))
				 
   {	
	?>
            <tr>
               	<td ><?php echo $row_usuario['seccao']; ?></td>
                <td align="center"><?php echo intval($row_usuario['subseccao']); ?></td>
                <td align="center"><?php echo intval($row_usuario['elementos']);?></td>
				<td align="center"><?php echo intval($row_usuario['animadores']);?></td>
				<td></td>
				</td>
            </tr>
			
			
			

	<?php
	$conta1=$row_usuario['subseccao']+$conta1;
	}
	?>
	     </tbody>
	</table>
</div>	
</div>

	
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   	<script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "language": {
            "lengthMenu": "Mostra _MENU_ registo por paágina",
            "zeroRecords": "Nothing found - sorry",
            "info": "Mostra pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtrado para _MAX_ totais de registos)"



		
			
        }
			
    } );
} );
	</script>

	
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">	</script>

<link rel="stylesheet" href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css">

<!--
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
-->


 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


	
<br>
<br>
	  
</body>
</html>


