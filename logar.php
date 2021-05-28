<?php

	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0; 
	echo $erro;
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
		<link rel="stylesheet" href="./style/style-logar.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
	
		<script>
			// código javascript

		</script>
	</head>

	<body>
    <div class="containerflex">
			<form method="post" action="validar_acesso.php" id="formLogin">
				<h1>Painel de Login</h1>
				<div class="form-group">
					<input type="email" class="form-control red" id="campo_email" name="email" placeholder="Email" required="requiored"/>
				</div>
				<div class="form-group">
					<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" required="requiored"/>
				</div>
				<?php
						if($erro) echo '<p class="alerta-login">Usuário e ou senha inválido(s).</p>';
				?>
				<button type="buttom" class="btn btn-danger" id="btn_login" style="width: 100%;">Cadastrar</button>

				<div class="outros">
					<a href="inscrevase.php">Ainda não possui conta?</a>
				</div>
			</form>
	      <!-- Main component for a primary marketing message or call to action -->
		</div>

		</div>
	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>