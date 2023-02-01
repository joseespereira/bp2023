<?php
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <?php
    require_once('../config/meta.php');
    include("../conn/conexao.php");
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

                <form action="registo2.php" method="POST" id="login" class="bg-light border p-2">
                    <div class="form-row justify-content-center">
                        <h4 class="title my-2 ">Registar</h4>
                        <div class="col-12">
                            <hr>
                            <div class="form-row mb-3">

                                <div class="col-sm-3">
                                    <label for="exampleFormControlInput1" class="form-label">Agr Nº</label>
                                    <input name="agrnumero" type="text" value="" class="input form-control form-control-sm" id="agrnumero" placeholder="numero"  aria-label="password" aria-describedby="basic-addon1" />
                                </div>

                                <div class="col-sm-9">
                                    <label for="exampleFormControlInput1" class="form-label">Agr Nome</label>
                                    <input name="agrnome" type="text" value="" class="input form-control form-control-sm" id="agrnome" placeholder="nome" aria-label="password" aria-describedby="basic-addon1" />
                                </div>
                            </div>




                            <div class="form-row mb-3">
                                <div class="col-sm-8">
                                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="email" required>
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
                            <a href="../index.php" class="btn btn-sm btn-dark btn-block">Cancelar</a>
                        </div>
                    </div>


            </div>
        </form>
        <!--</div>-->
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