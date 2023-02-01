
<?php
session_start();
@require_once('../conn/conexao.php');


?>
<!doctype html>
<html lang="pt-pt">

<head>
    <?php
    @require_once('../config/meta.php');
    ?>
</head>
<body>
<div class="container" >

<?php
	

$_SESSION['usuario_id'];


if (empty($_POST['bandos'])){
    $bandos=0;
} else { $bandos = $_POST["bandos"]; }

if (empty($_POST['patrulhas'])){
    $patrulhas=0;
} else {$patrulhas =$_POST["patrulhas"];}

if(empty($_POST['equipas'])){
    $equipas=0;
} else {$equipas =$_POST["equipas"];}

if(empty($_POST['tribos'])){
    $tribos=0;
} else {$tribos =$_POST["tribos"];}


if (empty($_POST['lobitos'])){
    $lobitos=0;
} else {$lobitos =$_POST["lobitos"];}

if (empty($_POST['exploradores'])){
    $exploradores=0;
} else {$exploradores =$_POST["exploradores"];}

if(empty($_POST['pioneiros'])){
    $pioneiros=0;
} else {$pioneiros =$_POST["pioneiros"];}

if(empty($_POST['caminheiros'])){
    $caminheiros=0;
} else { $caminheiros =$_POST["caminheiros"]; }


if (empty($_POST['animadores1'])){
    $animadores1=0;
} else {$animadores1 =$_POST["animadores1"]; }

if(empty($_POST['animadores2'])){
    $animadores2=0;
} else {$animadores2 =$_POST["animadores2"];}

if(empty($_POST['animadores3'])){
    $animadores3=0;
} else {$animadores3 =$_POST["animadores3"];}

if(empty($_POST['animadores4'])){
    $animadores4=0;
} else{$animadores4 =$_POST["animadores4"];}


$valor=10;
$valototal=0;

$subtotal1= ($lobitos + $animadores1) *$valor;
$subtotal2= ($exploradores + $animadores2) *$valor;
$subtotal3= ($pioneiros + $animadores3) *$valor;
$subtotal4= ($caminheiros + $animadores4) *$valor;
$valototal=$subtotal1+$subtotal2+$subtotal3+$subtotal4;
?>
	
	
<div class="card text-center">
  <div class="card-header">
    <h5 class="card-title">Informação do valor das inscrições.</h5>
  </div>
  <div class="card-body">    
    	<form method="POST" action="bpinserir.php" name="form1">
			<div class="row justify-content-center">
				<div class="col-xs-2 form-group p-2">
					<label >Bandos</label>
					<input class="form-control" type="number" id="bandos" name="bandos"  size="4" value="<?php echo $bandos; ?>" readonly>
					
					<label>Patrulhas</label>
					<input class="form-control" type="number" id="patrulhas" name="patrulhas" value="<?php echo $patrulhas; ?>" readonly>
					
									
					<label>Equipas</label>
					<input class="form-control" type="number" id="equipas" name="equipas" value="<?php echo $equipas; ?>" readonly>
					

					<label>Tribos</label>
					<input class="form-control" type="number" id="tribos" name="tribos" value="<?php echo $tribos; ?>" readonly>
					
							
				</div>
				
				
				<div class="col-xs-2 form-group p-2">
					<label>Lobitos</label>
					<input class="form-control" type="number" id="lobitos" name="lobitos" value="<?php echo $lobitos; ?>" readonly>
					
					<label>Exploradores</label>
					<input class="form-control" type="number" id="exploradores" name="exploradores" value="<?php echo $exploradores; ?>" readonly>
					
									
					<label>Pioneiros</label>
					<input class="form-control" type="number" id="pioneiros" name="pioneiros" value="<?php echo $pioneiros; ?>" readonly>
					

					<label>Caminheiros</label>
					<input class="form-control" type="number" id="caminheiros" name="caminheiros" value="<?php echo $caminheiros; ?>" readonly>
					
							
				</div>
					
				<div class="col-xs-2 form-group p-2">
					<label>Animadores I</label>
					<input class="form-control" type="number" id="animadores1" name="animadores1" value="<?php echo $animadores1; ?>" readonly>
					
					<label>Animadores II</label>
					<input class="form-control" type="number" id="animadores2" name="animadores2" value="<?php echo $animadores2; ?>" readonly>
					
									
					<label>Animadores III</label>
					<input class="form-control" type="number" id="animadores3" name="animadores3" value="<?php echo $animadores3; ?>" readonly>
					

					<label>Animadores IV</label>
					<input class="form-control" type="number" id="animadores4" name="animadores4" value="<?php echo $animadores4; ?>" readonly>
					
							
				</div>

				<div class="col-xs-2 form-group p-2">
					<label>Valores da Alcateia</label>
					<input class="form-control" type="number" value="<?php echo $subtotal1; ?>" readonly>
					
					<label>Valores da Expedição</label>
					<input class="form-control" type="number" value="<?php echo $subtotal2; ?>" readonly> 
					
									
					<label>Valores da Comunidade</label>
					<input class="form-control" type="number" value="<?php echo $subtotal3; ?>"readonly>
					

					<label>Valores da Tribo</label>
					<input class="form-control" type="number" value="<?php echo $subtotal4 ?>" readonly>
					
							
				</div>
		</div>				
	
	
	
	 
 </div>
</div>
	<h3>Valor Final <?php echo $valototal;?> &nbsp;€</h3>
	<h4> NIB 0035 0003 0003 0039 5302 0 </h4>
<br>
<button type="submit" class="btn btn-primary">Finalizar Inscrição</button>
</form> 
</div>
</div>

 </div> 
</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){	
	
  });
</script>