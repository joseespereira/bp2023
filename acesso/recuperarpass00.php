<?php
@session_start();
?>
<!DOCTYPE html>
<html lang="pt-pt">
 
 <head>
	<?php include('../config/meta.php'); ?>
	<script src="https://kit.fontawesome.com/yourcode.js"></script>
	<link href="../bootstrap/css/stylepass1.css" rel="stylesheet">
	<link href="../bootstrap/css/stylepass.css" rel="stylesheet">
</head> 

<style tyle="text/css">

.login_oueter {
    width: 350px;
    max-width: 100%;
}
.logo_outer{
    text-align: center;
}
.logo_outer img{
    width:120px;
    margin-bottom: 40px;
}

</style>
<body>

<!-- -----------------------------------------------------------------------------------  -->	
<div class="container-fluid">
  <div class="row d-flex justify-content-center align-items-center m-0" style="height: 90vh;">
    <div class="login_oueter">
    <div class="col-md-12 logo_outer">
          <div class="col-md-12 logo_outer img">
            <img src="../imagens/jmj2023.png">
          </div>
        </div>
      <form action="recuperarpass01.php" method="post" id="login" autocomplete="off" class="bg-light border p-3">
      <div class="col-md-12 logo_outer">
        	<h2 class="h4 mb-4 font-weight-normal">Recuperação password</h2>
      </div>     
        <div class="form-row">
          <div class="col-12">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-mail-bulk"></i></span>
              </div>
              <input id="email" name="email" type="text" value="" class="input form-control form-control-sm" id="email" placeholder="Email de recuperação" aria-label="Username" aria-describedby="basic-addon1" required="true" />
            </div>
          </div>

		  
			<div class="col-12 mb-3">
				<div class="d-flex justify-content-center">
				<button class="btn btn-sm btn-primary btn-block" type="submit">Confirmar</button>&nbsp;&nbsp;
				</div>
			</div>

			<div class="col-12 mb-3">
				<div class="d-flex justify-content-center">
				<a href="javascript:history.back()" class="btn btn-sm btn-dark btn-block" >Cancelar</a>
				</div>
			</div>

        </div>
			
      </form>
	
    </div>
  </div>
</div>
	  			<p class="text-center text-danger">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
			</p>
			<p class="text-center text-success">
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
			</p>

 <!-- ----------------------------------------------------------------------------------- -->
<!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->


 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script type="text/javascript">
        $(document).ready(function () {
            $('#submeterRecuperacao').click(function () {
                var userName = $('#userName').val();
                $('#resetName').val(userName);

                var options = { "backdrop": "static", keyboard: true };
                $('#modalConfirmacaoResetPassword').modal(options);
                $('#modalConfirmacaoResetPassword').modal('show');
            });
        });
    </script>



  </body>
</html>
