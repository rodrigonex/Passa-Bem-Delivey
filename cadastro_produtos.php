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

		<title>Passa Bem Delivey - gestão</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <link rel="stylesheet" href="./style/style-produto.css">

		<script type="text/javascript">
            $('document').ready(function(){

                $('form_cadastro_produto').submit(function(e){
                    e.preventDefault();
                    var formData = new FormData(this);

                    $.ajax({
                        url: 'get_cadastro_produto.php',
                        type: 'POST',
                        data: formData,
                        success: function(data){
                            alert(data);
                        },
                        cache: false,
                        contentType: false,
                        processData: false    
                    })
                });
              
            });
		
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
	          <span>Passa Bem Delivey - Cardapio</span>
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
                <li><a href="adm_acesso.php">Home</a></li>
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
                                <h4>Cadastrar Produto</h4> 
                                
                                <form id="form_cadastro_produto" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                     <label for="form7">Informe o nome do produto:</label>
                                        <input type="text" class="form-control" id="campo_nome_produto" name="nome_produto" placeholder="Nome do Produto" required="requiored"/>
                                    </div>
                                    <div class="form-group" id="preco">
                                        <label for="form7">Informe o preço do produto:</label>
                                        <input type="text" class="form-control" id="campo_preco" name="campo_preco" placeholder="Digite o Preço, apenas números" required="requiored"/>
                                    </div>
                                    <div class="form-group">
                                        <div class="texto-produto">
                                            <h5>Selecione o tipo do Produto:</h5>
                                        </div>
                                       
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tipo_produto" id="inlineRadio1" value="Pizza">
                                            <label class="form-check-label" for="inlineRadio1">Pizza</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tipo_produto" id="inlineRadio2" value="Lanche">
                                            <label class="form-check-label" for="inlineRadio2">Lanche</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tipo_produto" id="inlineRadio3" value="Sobremesa">
                                            <label class="form-check-label" for="inlineRadio2">Sobremesa</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tipo_produto" id="inlineRadio4" value="Bebidas">
                                            <label class="form-check-label" for="inlineRadio2">Bebidas</label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                    <label id="upload-label" for="upload" class="font-weight-light text-muted">Carregar foto do produto</label>
                                        <input type="file" name="aquivo"> 
                                    </div>
                                    <div class="form-group ">
                                        <div class="md-form">
                                            <label for="form7">Faça uma descrição do Produto:</label>
                                            <textarea id="text-descrip" name="text_decrip" class="md-textarea form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                                   
                                    <button type="buttom" class="btn btn-danger" id="btn_login" style="width: 100%;">Cadastrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class=" panel panel-default">
                        <div class="panel-body">					
                            <h4>Produto Cadastrados</h4>
                        </div>				
                    </div>
                </div>
             </div>

	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>