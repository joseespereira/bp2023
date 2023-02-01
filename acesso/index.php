<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <?php
  require_once('../config/meta.php');
  ?>

  <style>
    .login_oueter {
      width: 340px;
      max-width: 100%;
    }

    .logo_outer {
      text-align: center;
    }

    .logo_outer img {
      width: 120px;
      margin-bottom: 40px;
    }
  </style>
</head>

<body>


  <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center m-0" style="height: 90vh;">
      <div class="login_oueter">
        <div class="col-md-12 logo_outer">
        </div>


        <form action="index1.php" method="post" autocomplete="off" class="bg-light border p-2">
          <div class="form-row justify-content-center">
            <h4 class="title my-2 ">Iniciar a sessão</h4>
            <?php
            if (isset($_SESSION['msg'])) :
              echo $_SESSION['msg'];
              unset($_SESSION['msg']);
            endif;
            ?>
            <div class="col-12">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                </div>
                <input name="email" type="text" value="" class="input form-control" id="email" placeholder="email" aria-label="email" aria-describedby="basic-addon1" />
              </div>
            </div>
            <!--
            <div class="col-12">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                </div>
                <input name="senha" type="password" value="" class="input form-control" id="senha" placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
                <div class="input-group-append">
                  <span class="input-group-text" onclick="password_show_hide();">
                    <i class="fas fa-eye" id="show_eye"></i>
                    <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                  </span>
                </div>
              </div>
            </div>
      -->
            <div class="col-12">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                </div>
                <input name="senha" type="password" value="" class="input form-control form-control-sm" id="senha" placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
                <div class="input-group-append">
                  <span class="input-group-text" onclick="password_show_hide();">
                    <i class="fas fa-eye" id="show_eye"></i>
                    <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                  </span>
                </div>
              </div>
            </div>



            <div class="col-12 mb-3">
              <div class="d-flex justify-content-center">
                <button class="btn btn-sm btn-primary btn-block" type="submit">Login</button>&nbsp;&nbsp;
              </div>
            </div>

            <div class="col-12 mb-3">
              <div class="d-flex justify-content-center">
                <a href="../index.php" class="btn btn-sm btn-dark btn-block">Cancelar</a>
              </div>
            </div>

            <div class="col-12 mb-3">
              <div class="d-flex justify-content-center">
                <a href="registo1.php" class="btn-sm btn btn-link btn-block">Registe-se aqui</a>
              </div>
            </div>
            
	
	            <div class="col-12 mb-3">
              <div class="d-flex justify-content-center">
                <a href="#" class="btn-sm btn btn-link btn-block">Recuperar password</a>
              </div>
            </div>		
			

           
              <!-- <a href="recuperarpass00.php">Recuperar password</a>-->
            

          </div>
        </form>
      </div>
    </div>
  </div>



  <!-- -----------------------------------------------------------   -->


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
  <script type="text/javascript">
    function password_show_hide() {
      var x = document.getElementById("senha");
      var show_eye = document.getElementById("show_eye");
      var hide_eye = document.getElementById("hide_eye");
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