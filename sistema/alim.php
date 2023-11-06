<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Alimentação Alunos</title>
</head>
<body>
    <h1>Alimentação Alunos  <img src="../img_icon/logocompleto.png" width="350px" alt="Logo Etec"></h1>
    <h2> Cardápiodo dia <img src="../img_icon/cardapio.jpeg" width="350px" alt="cardapio do dia"></h2>
   
    <form action="relatorio.php" method="POST">
    <div class = "row-fluid">
                <div class="col">
                    <label for="nome"> Nome do aluno</label>
                    <input type="text"
                          name="nome"
                          id="nome"
                          placeholder="Nome do aluno">
                </div>
                <div class="col">
                    <label for="turma"> Turma ou série</label>
                    <input type="text"
                          name="turma"
                          id="turma"
                          placeholder="Turma do aluno">
                </div>
       
    </div>
    <div class="container">

        <label for="refeicao">Aceita a refeição?</label>
        <input type="checkbox" name="refeicao" id="refeicao" value="Sim"><br>
    </div>
    <div class="row-fluid justify-center">
                <input type="reset" value="Voltar" onclick="javascript: history.go(-1);">
                <input type="submit" value=" SALVAR" disabled id="submit">
            </div>
       
    </form>
<!-- Botão para gerar o relatório -->
<form method="POST" action="alim.php">
    <input type="hidden" name="gerar_relatorio" value="true">
    <input type="submit" value="Gerar Relatório">
</form>
<!-- <form method="POST" action="alim.php">
    <input type="hidden" name="gerar_relatorio" value="true">
    <input type="submit" value="Gerar Relatório">
</form> -->

<?php
// Verifica se o botão de gerar relatório foi clicado
if (isset($_POST['gerar_relatorio'])) {
    gerarRelatorio();
}
?>