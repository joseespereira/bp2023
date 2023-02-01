<?php
@session_start();
require_once("protege.php");
require_once("../conn/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-pt">
  <head>

    <meta charset="utf-8">    

  </head>

  
<body >
   
<?php
if (!isset($_POST['enviarpass'])) {
} else {
  $SenhaAtual = SHA1($_POST['password0']);
  $SenhaNova = $_POST['password1'];
  $SenhaNovaConf = $_POST['password2'];
  $usuario_id= $_SESSION['usuario_id'];
 
  $stmtx = $conexao->prepare("SELECT senha from usuarios WHERE id = :id");
  $stmtx->bindValue(":id", $usuario_id);
  $stmtx->execute();
  $res = $stmtx->fetch();
 

  if ($res['senha'] = $SenhaAtual) {
    if ($SenhaNova == $SenhaNovaConf) {
      // atualiza  a password na tbela usuairios 
      $stmt = $conexao->prepare("UPDATE usuarios SET senha = :SenhaNova WHERE id = :id");
      $stmt->bindValue(":SenhaNova", SHA1($SenhaNova));
      $stmt->bindValue(":id", $usuario_id);
      $stmt->execute();
      session_destroy();

      echo "<script type='text/javascript'> location.href='../home'; alert('Password atualizada, por motivo de segurança voltará ao à pagina principal')</script>";
    } else {
      echo "<script type='text/javascript'> location.href='alterarpass00.php'; alert('A nova password nova não coincide com a confirmação')</script>";
    }
  } else {

    echo "<script type='text/javascript'> location.href='alterarpass00.php'; alert('A password atual esta correta...!')</script>";
  }
}

?>
<!-- <script src="../bootstrap/js/personalizado.js"></script>-->
</body>
</html>
