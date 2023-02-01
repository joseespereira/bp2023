<?php
session_start();
include("../conn/conexao.php");


$nome = trim($_POST['nome']);
$apelido = trim($_POST['apelido']);
$idade = trim($_POST['idade']);
$email = trim($_POST['email']);
$senha = SHA1(trim($_POST['senha']));


  

$verif = $conexao->prepare("SELECT id FROM usuarios WHERE email=:e");
$verif->bindValue(":e", $email);
$verif->execute();
if($verif->rowCount() > 0) 
   {
    echo"<script type='text/javascript'> location.href='registo1.php'; alert('Já se encontra um registo com esse email')</script>"; 
    return false;
   } 

// fim de verificação
try {
        $stmt = $conexao->prepare("INSERT INTO usuarios (nome, apelido, idade, email, senha, nivel_acesso,situacao) VALUES (?, ?, ?, ?, ?, 1, 0)");
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $apelido);
        $stmt->bindParam(3, $idade);
        $stmt->bindParam(4, $email);
        $stmt->bindParam(5, $senha);  
		  
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                echo "Dados cadastrados com sucesso!";
				$_SESSION['registo_id']=$conexao->lastInsertId();
				$_SESSION['registo_nome']=$nome;
				$_SESSION['registo_apelido']=$apelido;
				$_SESSION['registo_email']= $email;
                $id = null;
                $nome = null;
                $email = null;
                $apelido = null;
				header('Location: registo3.php');
            } else {
                echo "Erro ao tentar efetivar cadastro";
				header('Location: registo1.php');
            }
        } else {
               throw new PDOException("Erro: Não foi possível executar a declaração sql");
			   header('Location: registo1.php');
			}
    } catch (PDOException $erro) {
        echo "Erro: " . $erro->getMessage();
    }