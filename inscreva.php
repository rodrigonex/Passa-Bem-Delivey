<?php

	$erro_usuario = isset($_GET['erro_usuario']) ? $_GET['erro_usuario'] : 0;
	$erro_email = isset($_GET['erro_email']) ? $_GET['erro_email'] : 0; 

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Passa Bem Delivery</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="./style/style-inscreva.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
	
		<script>
			// código javascript						
		</script>
	</head>

	<body>
    <div class="containerflex">
			<form method="post" action="registra_usuario.php" id="formLogin">
				<h1>Painel de Cadastro</h1>
				<div class="form-group">
					<input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Nome de Usuário" required="requiored"/>
                    <?php
							if($erro_usuario){
								echo '<font style="color:#ff0000">Usuário já existe</font>';
							}
						?>
				</div>
				<div class="form-group">
					<input type="email" class="form-control red" id="campo_email" name="email" placeholder="Email" required="requiored"/>
                    <?php
							if($erro_email){
								echo '<font style="color:#ff0000">Email já existe</font>';
							}
						?>
				</div>
                <div class="form-group">
					<input type="text" class="form-control red" id="campo_tel" name="telefone" placeholder="Telefone" required="requiored"/>
				</div>				
				<div class="form-group">
					<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" required="requiored"/>
				</div>
								
				<button type="buttom" class="btn btn-danger" id="btn_login" style="width: 100%;">Cadastrar</button>

		
				<div class="outros">
					<a href="inscrevase.php">Já possui conta?</a>
				</div>
			</form>
	      <!-- Main component for a primary marketing message or call to action -->
		</div>

		</div>
	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>