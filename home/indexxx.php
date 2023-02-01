<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/ionicons.min.css">
		<link rel="stylesheet" href="css/personalizado.css">
		<title>Dia BP</title>
	</head>
	<body>	
	
		<header>
			
			<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #008000;">
				<div class="container">
					<a class="navbar-brand" href="index.php"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarCollapse">
						<ul class="navbar-nav mr-auto">
							
							<!-- <li class="nav-item menu">
								<a class="nav-link" href="index.html">Home</a>
							</li> -->
							
							<li class="nav-item menu">
								<a class="nav-link" href="bpinscricoes.php">Inscrições</a>
							</li>
							
							<li class="nav-item menu">
								<a class="nav-link" href="bplista.php">Lista participantes</a>
							</li>
							<!--
							<li class="nav-item menu">
								<a class="nav-link" href="atas.html">Atas</a>
							</li>							
							<li class="nav-item menu">
								<a class="nav-link" href="documentos.html">Documentos</a>
							</li>

							
							<li class="nav-item menu">
								<a class="nav-link" href="contato.html">Contato</a>
							</li>
							-->
						</ul>
					</div>
				</div>
			</nav>
		</header>
		
		<main role="main">
			<!--<div class="jumbotron servicos">-->
				
				<div class="container" style="margin-bottom: 40px;">
					<h2 class="display-2 text-center" style="margin-bottom: 80px;">Dia de BP</h2>
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
								<img src="./imagens/bp.jpg" class="rounded" alt="..." width="300" height="190">
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
		</main>
		
		<footer class="footer" style="background-color: #008000;">
			<div class="container text-center">
				© copyright bp.agr172 
			</div>
		</footer>

		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scrollreveal.min.js"></script>
		
		<script>
			window.sr = ScrollReveal({ reset: true });
			sr.reveal('.card-um', {
				duration: 1000,
				origin: 'left',
				distance: '20px'
			});
			sr.reveal('.card-dois', {
				duration: 1000,
				origin: 'bottom',
				distance: '20px'
			});
			sr.reveal('.card-tres', {
				duration: 1000,
				origin: 'right',
				distance: '20px'
			});
			sr.reveal('.video-titulo', {
				duration: 1000,
				origin: 'left',
				distance: '20px'
			});
			sr.reveal('.video-parag', {
				duration: 1000,
				origin: 'right',
				distance: '20px'
			}); 
			sr.reveal('.video-cont', {
				duration: 1000,
				origin: 'bottom',
				distance: '20px'
			});
			sr.reveal('.art-um', {
				duration: 1000,
				origin: 'bottom',
				distance: '20px'
			});
			sr.reveal('.art-dois', {
				duration: 1000,
				origin: 'bottom',
				distance: '20px'
			});
			sr.reveal('.art-tres', {
				duration: 1000,
				origin: 'bottom',
				distance: '20px'
			});
		</script>
  </body>
</html>