<?php
session_start();
include('protege.php');
include('../conn/conexao.php');
//$_SESSION['caminho']= 'http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];

?>
<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <?php require_once("../config/meta.php"); ?>
    <?php require_once("../config/nav.php"); ?>

    <style>

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

</style>    
</head>


<!-- ------------------------- -->
<!-- Inicio do menu -->

<body>



    <!-- Fim do menu -->
    <!-- -------------------------  -->


    <br>
    <?php

    $id = $_SESSION['usuario_id'];
    $res = $conexao->prepare("SELECT * from usuarios where id = :id");
    $res->bindValue(":id", $id);
    $res->execute();
    $dados = $res->fetchAll(PDO::FETCH_ASSOC);
    $linhas = count($dados);

    ?>

    <!-- -----------------------------------------------------------------------------------  -->
    <div class="container-fluid">
        <div class="bg-light p-5 rounded">

            <div class="d-flex">
                <div class="mr-auto p-2">
                    <h4 class="display-5 titulo">Edição do Perfil</h4>
                </div>
                <div class="p-2">
                    <!--<span class="d-none d-md-block">-->
                    <a class="btn btn-danger" href="alterarpass00.php" data-toggle="tooltip" data-target="#edit" title="Alterar Password">Alterar Password</a>

                    <a class="btn btn-dark" href="../home" data-toggle="tooltip" data-placement="top" title="Cancelar">Cancelar</a>
                    <!-- </span>-->
                </div>
            </div>
            <hr>

            <form method="POST" action="perfil_editar01.php" name="form1">
                <input name="usuario_id" type="hidden" id="usuario_id" value="<?= $dados[0]['id']; ?>" />


                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label><span class="text-danger">*</span> Nome</label>
                        <input name="usuario_nome" type="text" class="form-control form-control-dm" id="usuario_nome" value="<?= $dados[0]['nome']; ?>">
                    </div>

                    <div class="form-group col-md-5">
                        <label><span class="text-danger">*</span>Apelido</label>
                        <input name="usuario_apelido" type="text" class="form-control form-control-dm" id="usuario_apelido" value="<?= $dados[0]['apelido']; ?>">
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label><span class="text-danger">*</span> Idade</label>
                        <input name="usuario_idade" type="text" class="form-control form-control-dm" id="usuario_idade" value="<?= $dados[0]['idade']; ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label><span class="text-danger">*</span> E-mail</label>
                        <input name="usuario_email" type="email" class="form-control form-control-dm" id="usuario_email" value="<?= $dados[0]['email']; ?>">
                    </div>

                </div>


                <div class="form-row">
                    <p>
                        <span class="text-danger mr-3">* Campo obrigatório</span>
                    </p>
                    <button type="submit" class="btn btn-warning">Guardar Dados</button>
                </div>
            </form>
        </div>
    </div>

    <?php

  //Fecha conexao com o banco de dados
$conexao = null;
//ou
unset($conexao);
//ou
    ?>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</html>