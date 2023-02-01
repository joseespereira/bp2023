<?php
session_start();
@require_once('../conn/conexao.php');


?>
<!doctype html>
<html lang="pt-pt">

<head>
    <?php
    @require_once('../config/meta.php');
    ?>
	
	<style>
	.footer{
	position: absolute;
	bottom: 0;
	width: 100%;
	height: 60px;
	line-height: 60px;
	color: #FFF;
}

</style>
	
	
</head>


<body>


    <nav class="navbar navbar-expand-md navbar-light " style="background-color: #E6E6FA;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
                 <!--<ul class="navbar-nav justify-content-end">-->
				 <ul class="navbar-nav ml-auto">

                <?php
                if (@$_SESSION['usuario_nivel'] == '2') {
                ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Administração
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../admin/usuarios_listagem.php">Lista de Inscritos</a>
                            <a class="dropdown-item" href="../admin/usuarios_atividade.php">Inscritos/Atividades</a>
                            <a class="dropdown-item" href="../admin/atividades_quantitativos.php">Quantitativos/Atividade</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../admin/estatistica.php">Estatistica</a>
                        </div>
                    </li>

                <?php
                }
                if (@$_SESSION['usuario_id'] == TRUE) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="bpinscricoes.php">Inscrever</a>
                    </li>
					
					<li class="nav-item">
						<a class="nav-link" href="bplista.php">Minhas Inscrições</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="informacao.php">Valores Inscrição</a>
					</li>
                <?php
                
				
				
				} else {
                ?>

                    <li class="nav-item">
                        <a class="nav-link" href="../acesso">Login</a>

                    </li>
                <?php }

                if (@$_SESSION['usuario_id'] == TRUE) {
                ?>
					
                            <li class="nav-item dropdown mr-auto mb-2 mb-lg-0">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['usuario_numero'] . " - " . $_SESSION['usuario_agrupamento']; ?></a>
                                <div class="dropdown-menu" aria-labelledby="dropdown01">
                                    <!-- <a class="dropdown-item" href="../acesso/perfil_editar00.php">Perfil</a>-->
                                    <a class="dropdown-item" href="../acesso/logout.php">Fechar Sessão</a>
                                </div>
                            </li>
						</form>	
                <?php
                }
                ?>


            </ul>
        </div>
        </div>
		
		

		
    </nav>
	
    <!--  fim do Navigation   -->

			<!--<div class="jumbotron servicos">-->
				
				<div class="container-fluid">
					<!--<h2 class="display-3 text-center" style="margin-bottom: 120px;">Dia de BP</h2>-->
					<h2 class="display-3 text-center" style="margin-top: 100px;">Dia de BP</h2>
					<div class="card-deck">
						<div class="card text-center card-um">
							<!--<div class="icon-row tamanh-icone">
								<span class="step size-96 text-danger">
								<i class="icon ion-md-globe"></i>
								</span>
							</div>-->
							<div class="card-body">
								<h3 class="card-title">Onde ?</h3>
								<h4><p>Campo Atividades Antonio Moreno</p></h4>   
							</div>
						</div>
						<div class="card text-center card-dois">
							<!--<div class="icon-row tamanh-icone">
								<span class="step size-96 text-danger">
									<i class="icon ion-ios-stopwatch-outline"></i>	
								</span>
							</div>-->
							<div class="card-body" style="width: 18rem;">
								
								<p class="card-text lead">
								<div class="text-center">
								<img src="../imagens/bp.jpg" class="rounded" alt="..." width="300" height="190">
								</div>
								
								</p>
							</div>
						</div>
						
						<div class="card text-center card-tres">
							<!--<div class="icon-row tamanh-icone ">
								<span class="step size-96 text-danger">
									<i class="icon ion-ios-stopwatch-outline"></i>
								</span>
							</div>-->
							<div class="card-body">
								<h3 class="card-title">Quando ?</h3>
								<h4><p>4 e 5 de março 2023</p></h4>
							</div>
						</div>
					
					
					</div>
					
				<!--</div>-->
			</div>			




	
		<footer class="footer" style="background-color: #E6E6FA;">
			<div class="container text-center">
			<a class = "text-body">
				© copyright bp.agr172 </a> 
			</div>
		</footer>
	
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

<!--
///////////////////////////////// Modal para informar dos contatos ///////////////////////////////////
-->
<div class="modal fade" id="ContatoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pedido de Informação</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <p><strong>Pe.</strong> António Martins <strong>Castanheira</strong><br>
                    Telemóvel : 965061263<br>
                    Email : <a href="mailto:saovicente.saojoao@gmail.com">saovicente.saojoao@gmail.com</a></p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>


<!--
/////////////////////////////////   Modal das atividades  ///////////////////////////////////
-->
<div class="modal fade" id="modalatividades" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informação das Cerimónias a decorrer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Data</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Local</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $res = $conexao->query("SELECT * from atividades ORDER BY dia ASC, hora ASC");

                        $dados = $res->fetchAll(PDO::FETCH_ASSOC);
                        //$quantidade_rubricas = count($dados);
                        for ($i = 0; $i < count($dados); $i++) {
                            foreach ($dados[$i] as $key => $value) {
                                $id = $dados[$i]['id'];
                                $dia = $dados[$i]['dia'];
                                $hora = substr($dados[$i]['hora'], 0, 5);
                                $descricao = $dados[$i]['descricao'];
                                $local = $dados[$i]['local'];
                            }
                        ?>
                            <tr>
                                <td><?= $dia ?></td>
                                <td><?= $hora ?></td>
                                <td><?= $descricao ?></td>
                                <td><?= $local ?></td>


                            </tr>

                        <?php } ?>

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>



</html>