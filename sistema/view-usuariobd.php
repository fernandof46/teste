<?php
    require_once("../conexao/conexao.php");

    try {
        
        $SQL = "SELECT * FROM etec.usuario";

        // Executa o comando SQL no BD
        $dadosSelecionados = $conexao->query($SQL);

        // prepara os dados para serem utilizados/visualizados
        $dados = $dadosSelecionados->fetchAll();

        // retorna o total de registros lidos
        $totalRegistros = $dadosSelecionados->rowCount();

    } catch (PDOException $erro) {
        echo("Entre em contato com o Administrador!");
    }