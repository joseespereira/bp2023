<?php
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <?php
    require_once('../config/meta.php');
    include("../connxx/conexao.php");
    ?>

    <style>
        .login_oueter {
            width: 600px;
            max-width: 100%;
        }

        .logo_outer {
            text-align: center;
        }

        .logo_outer img {
            width: 120px;
            margin-bottom: 40px;
        }

       
        div.msg-info {
         width: 400px;
         margin: 10px auto;
         padding: 10px;
         background-color: rgba(50,205,50,.3);
         border: 1px solid rgb(34,139,34);   

        }


        div.msg-erro {
         width: 400px;
         margin: 10px auto;
         padding: 10px;
         background-color: rgba(50,205,50,.3);
         border: 1px solid rgb(34,139,34);   

        }     
    </style>
</head>

<body>
    <div class="container-fluid">

        <!-- --------------------------------------------------------  -->
        <div class="row d-flex justify-content-center align-items-center m-0" style="height:90vh;">
            <div class="login_oueter">
                <!--<div class="col-md-12 logo_outer">
                    <div class="col-md-12 logo_outer img">
                        <img src="../imagens/jmj2023.png">
                    </div>
                </div>-->
                <form action="registoregiao2.php" method="POST" id="login" class="bg-light border p-2">
                    <div class="form-row justify-content-center">
                        <h4 class="title my-2 ">Registar</h4>
                        <div class="col-12">
                            <?php                          
                            if (isset($_SESSION['msg'])) :
                                echo '<div class="msg-info">';
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                                echo '</div>';
                            endif; 
                            ?>
                            <hr>
                            <!--
							<div class="form-row mb-3">
                                <div class="col-sm-6">
                                    <label for="exampleFormControlInput1" class="form-label">Nome </label>
                                    <input type="text" class="form-control form-control-sm" id="nome" name="nome" placeholder="nome" required>
                                </div>

                                <div class="col-sm-6">
                                    <label for="exampleFormControlInput1" class="form-label">Apelido</label>
                                    <input type="text" class="form-control form-control-sm" id="apelido" name="apelido" placeholder="apelido" required>
                                </div>
                            </div>
							-->


                            <!--<div class="form-row mb-3">
                                <!--
								<div class="col-sm-4">
                                    <label for="exampleFormControlInput1" class="form-label">Idade</label>
                                                                     <select class="custom-select custom-select-sm" id="idade" name="idade">
                                        <option selected>Idade...
                                            <?php for ($i = 10; $i <= 90; $i++) {
                                                echo "<option value=" . $i . ">" . $i . "</option>";
                                            }
                                            ?>
                                    </select>
                                </div>
								-->
							
					<div class="form-row mb-3">	
						<div class="col-sm-5">
                            
                                 <label>Agrupamento</label>
                                <select id="id_agrupamento" name="id_agrupamento" class="form-control form-control-sm">	
								<option value="">Selecione o Agrupamento</option>
									<?php
										
										$resultado1 = "SELECT * from agrupamentos WHERE id_agrupamento > 1 ORDER BY id_agrupamento";
										$resultado2 = mysqli_query($conn, $resultado1);
										while($linha1 = mysqli_fetch_assoc($resultado2) ) {
										echo '<option value="'.$linha1['id_agrupamento'].'">'.$linha1['numero']. " - " .$linha1['agrupamento'].'</option>';
										}
									?>
								</select>									
                        </div>
					</div>

                            <div class="form-row mb-3">

                                <div class="col-sm-6">
                                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                                    <input name="senha" type="password" value="" class="input form-control form-control-sm" id="senha" placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
                                </div>

                                <div class="col-sm-6">
                                    <label for="exampleFormControlInput1" class="form-label">Confirmar Password</label>
                                    <input name="confsenha" type="password" value="" class="input form-control form-control-sm" id="confsenha" placeholder="confirme password" required="true" aria-label="password" aria-describedby="basic-addon1" />
                                </div>
                                <!--<span class="col-md-2" onclick="password_show_hide();">
                                    <i class="fas fa-eye" id="show_eye"></i>
                                    <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                </span>-->
                            </div>
                        </div>
                    </div>



                    <div class="form-row mb-3">
                        <div class="col-4">
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-sm btn-primary btn-block mb-2" type="submit">Criar conta</button>
                            </div>
                        </div>

                        <div class="col-4">
                            <a href="index.php" class="btn btn-sm btn-dark btn-block">Cancelar</a>
                        </div>
                    </div>


            </div>
        
        </form>
        <!--</div>-->
    </div>
    </div>
</div>




    <script type="text/javascript">
        function password_show_hide() {
            var x = document.getElementById("password");
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