<?php
session_start();
include_once '../connxx/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-pt">
  <head>
	<?php
	@require_once('../config/meta.php');
	?>
	<script src="https://kit.fontawesome.com/ec652d53e8.js" crossorigin="anonymous"></script>
</head>

<script>
$(document).ready(function () {
    $('#conselheiros').DataTable({
        processing: true,
        //serverSide: true,
	"language": {
                    "url": "//cdn.datatables.net/plug-ins/1.12.1/i18n/pt-PT.json"
                },	
        
    });
});
</script>



<body>
<!-- ------------------------- -->
<!-- Inicio do menu -->
	<?php
	//include_once 'barramenu.php';
	?>
	
<!-- Fim do menu -->
<!-- -------------------------  -->

<?php
$result_conselheiro = "select * from inscricoes WHERE id_agrupamento = 8";
$resultado_conselheiro = mysqli_query($conn, $result_conselheiro);

?>

<div class="container">
	<br>
   <div class="row">
   
		   <div <div class="col-4 col-md-4" style="text-align: left;">
				<span class="d-none d-md-block">
					<h2 class="display-5 titulo">Inscritos</h2>
				</span>
			</div>


		   <div class="col-8 col-md-8" style="text-align: right;">
					<span class="d-none d-md-block">
						<a href="../" class="btn btn-success btn-sm">Menu Anterior</a>
					</span>
			</div>
	</div>

	
<div class="table-responsive">
<table id="conselheiros" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th class="text-center d-none d-sm-table-cell">Secção</th>
								<th class="text-center d-none d-sm-table-cell">B/P/E/T</th>
								<th class="text-center d-none d-sm-table-cell">Elementos</th>
								<th class="text-center d-none d-sm-table-cell">Animadores</th>
								<th class="text-center">Ações</th>
							</tr>
						</thead>
					<tbody>
						<?php
						while($row_conselheiro = mysqli_fetch_assoc($resultado_conselheiro)){
							?>
											<tr>
												<td width="50%" class="text-left d-sm-table-cell"><?php echo $row_conselheiro['seccao'] ?></td>
												<td width="10%" class="text-center d-sm-table-cell"><?php echo intval($row_conselheiro['subseccao']) ?></td>
												<td width="10%" class="text-center  d-sm-table-cell"><?php echo intval($row_conselheiro['elementos']) ?></td>
												<td width="10%" class="text-center d-sm-table-cell"><?php echo intval($row_conselheiro['animadores']) ?></td>
												<td height="15%" align="center"><i class="fa-thin fa-pen-to-square"></i></tr>
							<?php
						}?>
					</tbody>
				</table>
<br>				
</div>
</div>
</div>
	<link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css"/>
	<script type="text/javascript" src="../DataTables/datatables.min.js"></script>
<script type="text/javascript" src="hhttps://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.3.2/js/dataTables.fixedColumns.min.js"></script>


<?php
	//include_once '../assets/baixo.php';
?> 
 
  </body>
</html>
