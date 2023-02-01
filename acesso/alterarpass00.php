<?php
@session_start();
require_once("protege.php");
require_once("../conn/conexao.php");

?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
	<?php require_once("../config/meta.php");?>
  <?php require_once("../config/nav.php");?>
	<!--<link href="css/style.css" rel="stylesheet" type="text/css">-->
</head>
<style tyle="text/css">

body {
margin: 0;
font-family: 'Encode Sans', sans-serif;
overflow: hidden;
}

.navbar-nav {
    margin-left: auto;
    text-align: center;
/*padding: 10px 14px;*/
text-decoration: none;
font-size: 16px;
font-weight: bold;

}

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
<body >

<!-- ------------------------- -->
<!-- Inicio do menu -->
<?php require_once("../config/nav.php");?>
<!-- Fim do menu -->
<!-- -------------------------  -->
<?php
$id = $_SESSION['usuario_id'];
    $res = $conexao->prepare("SELECT * from usuarios where id = :id");
    $res->bindValue(":id", $id);
    $res->execute();
    $dados = $res->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['usuario_password']=$dados[0]['senha'];
    unset($conexao);
?>

<div class="container-fluid">

  <div class="row d-flex justify-content-center align-items-center m-0" style="height: 80vh;">
    <div class="login_oueter">
      <div class="col-md-12 logo_outer">
        	<!--<img class="mb-4" src="../imagens/logo.png" style="height: 60px; padding-boot: 10px;" class="img-fluid"><br>-->
				<h3 class="h4 mb-4 font-weight-normal">Alterar Password</h3>
      </div>
      <form action="alterarpass01.php" method="post" id="login" autocomplete="off" class="bg-light border p-3">
        <div class="form-row">
          <div class="col-12">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
              </div>
              <input name="password0" type="password" value="" class="input form-control form-control-sm" id="password" placeholder="Password atual" required="true" aria-label="password" aria-describedby="basic-addon1" />
              <div class="input-group-append">
                <span class="input-group-text" onclick="password_show_hide_atual();">
                  <i class="fas fa-eye" id="show_eye_atual"></i>
                  <i class="fas fa-eye-slash d-none" id="hide_eye_atual"></i>
                </span>
              </div>
            </div>
			
			<div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
              </div>
              <input name="password1" type="password" value="" class="input form-control form-control-sm" id="password1" placeholder="Nova password" required="true" aria-label="password" aria-describedby="basic-addon1" />
              <div class="input-group-append">
                <span class="input-group-text" onclick="password_show_hide_nova();">
                  <i class="fas fa-eye" id="show_eye_nova"></i>
                  <i class="fas fa-eye-slash d-none" id="hide_eye_nova"></i>
                </span>
              </div>
            </div>
			
			<div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
              </div>
              <input name="password2" type="password" value="" class="input form-control form-control-sm" id="password2" placeholder="Confirmar a password" required="true" aria-label="password" aria-describedby="basic-addon1" />
              <div class="input-group-append">
                <span class="input-group-text" onclick="password_show_hide_confirmar();">
                  <i class="fas fa-eye" id="show_eye_confirmar"></i>
                  <i class="fas fa-eye-slash d-none" id="hide_eye_confirmar"></i>
                </span>
              </div>
            </div>
			
          </div>
         
		  
			<div class="col-12 mb-3">
				<div class="d-flex justify-content-center">
				<button class="btn btn-sm btn-primary btn-block" type="submit" name="enviarpass" id="enviarpass">Confirmar</button>
				</div>
			</div>
			<div class="col-12 mb-3">
				<div class="d-flex justify-content-center">
				<a href="perfil_editar00.php" class="btn btn-sm btn-dark btn-block" >Cancelar</a>
				</div>
			</div>
        </div>	
      </form>
			<p class="text-center text-danger">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
			</p>	  	
		
    </div>
  </div>
</div>


    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>



<script type="text/javascript">

function password_show_hide_atual() {
  var x = document.getElementById("password");
  var show_eye = document.getElementById("show_eye_atual");
  var hide_eye = document.getElementById("hide_eye_atual");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}
</script>


<script type="text/javascript">
function password_show_hide_nova() {
  var x = document.getElementById("password1");
  var show_eye = document.getElementById("show_eye_nova");
  var hide_eye = document.getElementById("hide_eye_nova");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}
</script>




<script type="text/javascript">
function password_show_hide_confirmar() {
  var x = document.getElementById("password2");
  var show_eye = document.getElementById("show_eye_confirmar");
  var hide_eye = document.getElementById("hide_eye_confirmar");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}


</script>




  </body>
</html>
