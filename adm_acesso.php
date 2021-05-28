<?php
    session_start();

    if(!isset($_SESSION['email']) || $_SESSION['tipo_acesso'] == 'N'){
    
        header('Location: logar.php');
    
    }
?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>

		<meta charset="UTF-8">

		<title>Passa Bem Delivey</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<script type="text/javascript">

		
		</script>
	
	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <span>Passa Bem Delivey</span>
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
                <li><a href="cadastro_produtos.php">Produtos</a></li>
                <li><a href="#">Pedidos</a></li>
	            <li><a href="#">sair</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>

	    <div class="container">
	    	
	    	<div class="col-md-7">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="input-group">
                            <h4>Pedidos em Andamento</h4> 

						</div>
					</div>
				</div>
			</div>

			<div class="col-md-5">
				<div class=" panel panel-default">
					<div class="panel-body">					
					    <h4>Pedidos finalizados</h4>
					</div>				
				</div>
			</div>
		</div>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>