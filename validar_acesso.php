<?php

    session_start();

    require_once('db.class.php');   

    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql =" SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){

        $dados_usuario = mysqli_fetch_array($resultado_id);

        if(isset($dados_usuario['nome'])){

            $_SESSION['id_usuario'] = $dados_usuario['id'];
            $_SESSION['usuario'] = $dados_usuario['nome']; 
            $_SESSION['tipo_acesso'] = $dados_usuario['adm_acesso'];
            $_SESSION['email'] = $dados_usuario['email']; 

            if($dados_usuario['adm_acesso'] == 'S'){
                echo 'Painel Adm';
                header('Location: adm_acesso.php');    
            }else{
                echo 'Acesso para clientes';
                header('Location: home.php');
            }
    
        }else{

            header('Location: logar.php?erro=1');
        }

    }else{
        echo 'Erro na execução da consulta, favor entrar em contato com o admin do site.';
    }
?>