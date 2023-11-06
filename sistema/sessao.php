<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION["nome"]) or //se não verdadeiro ou
      (isset($_SESSION["temposessao"])==false) or //se não verdadeiro ou
      ($_SESSION["temposessao"] < time())) //se não verdadeiro
    {
        // desativa todas as variáveis de sessão existentes
        session_unset();

        // fecha a sessão iniciada acima
        session_destroy();
        echo ("login");
        
    }
    else
    {
        $_SESSION["temposessao"] = time()+3000;
        header('location:../index.php');
        exit();
    }


