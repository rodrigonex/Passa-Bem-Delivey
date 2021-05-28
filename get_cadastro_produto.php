<?php

    session_start();

    if(!isset($_SESSION['email']) || $_SESSION['tipo_acesso'] == 'N'){

        header('Location: logar.php');

    }

    $nome_produto = $_POST['nome_produto'];
    $campo_preco = $_POST['campo_preco'];
    $nome_produto = $_POST['nome_produto'];
    $text_decrip = $_POST['text_decrip'];
    $foto = $_FILES['aquivo'];


    print_r($foto);

?>