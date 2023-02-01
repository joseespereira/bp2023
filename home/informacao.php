
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
<div class="card text-center">
  <div class="card-header">
    <h5 class="card-title">Informação do valor das inscrições.</h5>
  </div>
  <div class="card-body">
    
    <p class="card-text">
	
			<div class="row justify-content-center">
				<div class="col-xs-3 form-group p-2">
					<label >Bandos</label>
					<input  class="form-control" type="number" id="bandos" name="bandos" value="<?php echo $bandos; ?>" readonly>
					
					<label>Patrulhas</label>
					<input  class="form-control" type="number" id="patrulhas" name="patrulhas" value="<?php echo $patrulhas; ?>" readonly>
					
									
					<label>Equipas</label>
					<input  class="form-control" type="number" id="equipas" name="equipas" value="<?php echo $equipas; ?>" readonly>
					

					<label>Tribos</label>
					<input  class="form-control" type="number" id="tribos" name="tribos" value="<?php echo $tribos; ?>" readonly>
					
							
				</div>
				
				
				<div class="col-xs-3 form-group p-2">
					<label>Lobitos</label>
					<input  class="form-control" type="number" id="lobitos" name="lobitos" value="<?php echo $lobitos; ?>" readonly>
					
					<label>Exploradores</label>
					<input  class="form-control" type="number" id="exploradores" name="exploradores" value="<?php echo $exploradores; ?>" readonly>
					
									
					<label>Pioneiros</label>
					<input  class="form-control" type="number" id="pioneiros" name="pioneiros" value="<?php echo $pioneiros; ?>" readonly>
					

					<label>Caminheiros</label>
					<input  class="form-control" type="number" id="caminheiros" name="caminheiros" value="<?php echo $caminheiros; ?>" readonly>
					
							
				</div>
					
				<div class="col-xs-3 form-group p-2">
					<label>Animadores I</label>
					<input  class="form-control" type="number" id="animadores1" name="animadores1" value="<?php echo $animadores1; ?>" readonly>
					
					<label>Animadores II</label>
					<input   class="form-control" type="number" id="animadores2" name="animadores2" value="<?php echo $animadores2; ?>" readonly>
					
									
					<label>Animadores III</label>
					<input  class="form-control" type="number" id="animadores3" name="animadores3" value="<?php echo $animadores3; ?>" readonly>
					

					<label>Animadores IV</label>
					<input  class="form-control" type="number" id="animadores4" name="animadores4" value="<?php echo $animadores4; ?>" readonly>
					
							
				</div>

				<div class="col-xs-3 form-group p-2">
					<label>Valores da Alcateia</label>
					<input  class="form-control" type="number" value="<?php echo $subtotal1; ?>" readonly>
					
					<label>Valores da Expedição</label>
					<input  class="form-control" type="number" value="<?php echo $subtotal2; ?>" readonly> 
					
									
					<label>Valores da Comunidade</label>
					<input  class="form-control" type="number" value="<?php echo $subtotal3; ?>"readonly>
					

					<label>Valores da Tribo</label>
					<input  class="form-control" type="number" value="<?php echo $subtotal4 ?>" readonly>
					
							
				</div>
		</div>				
	
	
	
	
	</p>
    
  </div>
  <div class="card-footer">
    <p class="font-weight-bold">NIB 0035 0003 0003 0039 5302 0</p>
  </div>
</div>
</br>
</br>
<div  class=" row d-flex justify-content-center align-content-center "  >  <a href="../" class="btn btn-primary col-3">Fechar</a>  </div>
</body>
</html>