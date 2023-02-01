 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.2.27/jquery.autocomplete.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <title>Inscrições Dia BP</title>
  <style>
  fieldset.scheduler-border {
	backgroucolor: #000000;  
    border: 2px groove #ddd !important;
    padding: 0.5em 1.4em 1.4em 1.4em !important;
    margin: 1.5em 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

    legend.scheduler-border {
        font-size: 1.2em !important;
        font-weight: bold !important;
        text-align: left !important;
        width:auto;
        padding:0 10px;
        border-bottom:none;
    }
  </style>
  

  
</head>
<body>
  <div class="container-fluid" style="padding:10px 10px;">
    <h1></h1>


<div class="row">
<div class="col-xs-1"></div>
	<div class="col-xs-10">
	<form method="POST" action="bpconfirmar.php" name="form1">	
	<fieldset class="scheduler-border">
		<legend class="scheduler-border">Inscrições Dia de BP</legend>
		
	
		
			<br>		
		
		
			<div class="row">
				<div class="col-xs-4 form-group">
					<label>Bandos</label>
						<select type="number" id="bandos" name="bandos" value="0" class="form-control form-control-sm">	
						<option value="" selected="">─────────────────</option>
						
							<?php 
								$i=1;
								for ($x = 0; $x <= 5; $x+=1)
								{
								echo '<option value="'.$i.'">'.$i++.'</option>';
								}
								?>
						</select>					
					
					<br>
					<label>Patrulhas</label>
						<select type="number" id="patrulhas" name="patrulhas" value="0" class="form-control form-control-sm">	
						<option value="" selected="">─────────────────</option>
							<?php 
								$i=1;
								for ($x = 0; $x <= 5; $x+=1)
								{
								echo '<option value="'.$i.'">'.$i++.'</option>';
								}
								?>
						</select>					
					<br>
									
					<label>Equipas</label>
						<select type="number" id="equipas" name="equipas" value="0" class="form-control form-control-sm">	
						<option value="" selected="">─────────────────</option>
							<?php 
								$i=1;
								for ($x = 0; $x <= 5; $x+=1)
								{
								echo '<option value="'.$i.'">'.$i++.'</option>';
								}
								?>
						</select>					
					<br>

					<label>Tribos</label>
						<select type="number" id="tribos" name="tribos" value="0" class="form-control form-control-sm">	
						<option value="" selected="">─────────────────</option>
							<?php 
								$i=1;
								for ($x = 0; $x <= 5; $x+=1)
								{
								echo '<option value="'.$i.'">'.$i++.'</option>';
								}
								?>
						</select>					
					<br>
							
				</div>
				
				
				<div class="col-xs-4 form-group">
					<label>Lobitos</label>
						<select type="number" id="lobitos" name="lobitos" value="0" class="form-control form-control-sm" onblur="alcateia()">	
						<option value="" selected="">─────────────────</option>
						
							<?php 
								$i=0;
								for ($x = 0; $x < 25; $x+=1)
								{
								echo '<option value="'.$i.'">'.$i++.'</option>';
								}
								?>
						</select>	
					<br>
					
					<label>Exploradores</label>
						<select type="number" id="exploradores" name="exploradores" value="0" class="form-control form-control-sm" onblur="expedicao()">	
						<option value="" selected="">─────────────────</option>
							<?php 
								$i=1;
								for ($x = 0; $x < 25; $x+=1)
								{
								echo '<option value="'.$i.'">'.$i++.'</option>';
								}
								?>
						</select>					
					<br>
									
					<label>Pioneiros</label>
						<select type="number" id="pioneiros" name="pioneiros" value="0" class="form-control form-control-sm" onblur="comunidade()">	
						<option value="" selected="">─────────────────</option>
							<?php 
								$i=1;
								for ($x = 0; $x < 25; $x+=1)
								{
								echo '<option value="'.$i.'">'.$i++.'</option>';
								}
								?>
						</select>					
					<br>

					<label>Caminheiros</label>
						<select type="number" id="caminheiros" name="caminheiros" value="0" class="form-control form-control-sm" onblur="cla()">	
						<option value="" selected="">─────────────────</option>
							<?php 
								$i=1;
								for ($x = 0; $x < 25; $x+=1)
								{
								echo '<option value="'.$i.'">'.$i++.'</option>';
								}
								?>
						</select>					
					<br>
							
				</div>				
				
				
				
				

				
				<div class="col-xs-4 form-group">
					<label>Animadores I</label>
						<select type="number" id="animadores1" name="animadores1"value="0"  class="form-control form-control-sm" onblur="alcateia()">	
						<option value="" selected="">─────────────────</option>
						
							<?php 
								$i=1;
								for ($x = 0; $x < 10; $x+=1)
								{
								echo '<option value="'.$i.'">'.$i++.'</option>';
								}
								?>
						</select>					
					<br>
					
					<label>Animadores II</label>
						<select type="number" id="animadores2" name="animadores2" value="0" class="form-control form-control-sm" onblur="expedicao()">	
						<option value="" selected="">─────────────────</option>
							<?php 
								$i=1;
								for ($x = 0; $x < 10; $x+=1)
								{
								echo '<option value="'.$i.'">'.$i++.'</option>';
								}
								?>
						</select>					
					<br>
									
					<label>Animadores III</label>
						<select type="number" id="animadores3" name="animadores3" value="0" class="form-control form-control-sm" onblur="comunidade()">	
						<option value="" selected="">─────────────────</option>
							<?php 
								$i=1;
								for ($x = 0; $x < 10; $x+=1)
								{
								echo '<option value="'.$i.'">'.$i++.'</option>';
								}
								?>
						</select>					
					<br>

					<label>Animadores IV</label>
						<select type="number" id="animadores4" name="animadores4" value="0" class="form-control form-control-sm" onblur="cla()">	
						<option value="" selected="">─────────────────</option>
							<?php 
								$i=1;
								for ($x = 0; $x < 10; $x+=1)
								{
								echo '<option value="'.$i.'">'.$i++.'</option>';
								}
								?>
						</select>					
					<br>
							
				</div>
			</div>

	</fieldset>
<br>
<button type="submit" class="btn btn-success" role="button" onclick="return validar()">Inscrever</button>
<button type="button" class="btn btn-primary"><a href="index.php" role="button" style="color: #F5F5DC">Cancelar</a></button>
</form>
 </div>
 </div>
</body>
</html>
