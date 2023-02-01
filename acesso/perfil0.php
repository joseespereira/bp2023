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
    </style>
</head>

<body>

    <?php
    echo $id=$_SESSION['id'];
    echo $id=2;
    require_once('../conn/conexao.php');
    $res = $conexao->query("SELECT * from usuarios where id = '$id'"); 	
    $dados = $res->fetch(PDO::FETCH_ASSOC);         
    foreach ($dados as $key => $value) {
        echo $nome = $dados['nome'];
        echo '<br>';
        $apelido = $dados['apelido'];
        echo '<br>';
        $idade = $dados['idade'];
        echo '<br>';
        $email = $dados['email'];
                    
    }

    ?>

    <div class="container-fluid">

        <!-- --------------------------------------------------------  -->
        <div class="row d-flex justify-content-center align-items-center m-0" style="height:90vh;">
            <div class="login_oueter">
                <form action="perfil1.php" method="POST" id="login" class="bg-light border p-2">
                    <div class="form-row justify-content-center">
                        <h4 class="title my-2 ">Perfil</h4>
                        <div class="col-12">
                            <hr>
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
                            <?php
                            $i = 61;
                            ?>
                            <div class="form-row mb-3">
                                <div class="col-sm-4">
                                    <label for="exampleFormControlInput1" class="form-label">Idade</label>
                                    <select id="idade" name="idade" class="form-control form-control-sm" placeholder="idade">

                                        <?php
                                        for ($i = $i; $i <= 90; $i++)
                                            echo "<option value=$i>$i</option>";
                                        $i = 12;
                                        //echo '<option value="'.$idade.'">'.$i.'</option>';

                                        ?>

                                    </select>
                                </div>


                                <div class="col-sm-8">
                                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="email" required>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="form-row mb-3">
                        <div class="col-sm-4">
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-sm btn-primary btn-block mb-2" type="submit">Criar conta</button>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-sm btn-primary btn-block mb-2" type="submit">Cancelar</button>
                            </div>
                        </div>
                    </div>


            </div>
        </div>
        </form>
        <!--</div>-->
    </div>
    </div>

</body>

</html>