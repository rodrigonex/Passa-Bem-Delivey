<?php

    require_once('db.class.php');

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = md5($_POST['senha']);

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $usuario_existe = false;
    $email_existe = false;

    //verificar se o usuario já existe

    $sql = " select * from usuarios where nome = '$usuario' ";

    if( $resultado_id = mysqli_query($link, $sql)) {

        $dados_usuario = mysqli_fetch_array($resultado_id);

        if(isset($dados_usuario['nome'])){
            echo 'usuario já cadastrado';
            $usuario_existe = true;
        }
    }else{
        echo 'Erro ao tentar localizar o registro do usuario';
    }

    //verificar se o email já existe

    $sql = " select * from usuarios where email = '$email' ";

    if( $resultado_id = mysqli_query($link, $sql)) {

        $dados_usuario = mysqli_fetch_array($resultado_id);

        if(isset($dados_usuario['email'])){
            echo 'email já cadastrado';
            $email_existe = true;
        }
    }else{
        echo 'Erro ao tentar localizar o registro do usuario';
    }

    if($usuario_existe || $email_existe){

        $retorno_get = '';

        if($usuario_existe){
            $retorno_get.= "erro_usuario=1&";     
        }

        if($email_existe){
            $retorno_get.= "erro_email=1&";  
        }
        
        header('Location: inscreva.php?'.$retorno_get);
        die();
    }
    die();
    $sql = "INSERT INTO usuarios(nome, email, senha, tel_contato)values('$usuario', '$email', '$senha', '$senha' ) ";

    if(mysqli_query($link, $sql )){
        header('Location: login.php');
    }else{
        echo 'Erro ao registrar o usuário';
    }
?>