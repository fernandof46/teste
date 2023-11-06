<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta alunos</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

<h1>Consulta de alunos<img src="../img_icon/logocompleto.png" width="350px" alt="Logo etec completo"></h1>

<?php include_once("./menu.php"); ?>
    <div class="container">
        <form action="view-aluno.php" method="POST" enctype="multipart/form-data">
            <main>
                <div class="container">
                    <table>
                        <thead>
                            <tr>
                                <th align="center" width="50">#</th>
                                <th width="300">Nome do Aluno</th>
                                <th width="300">Turma ou Série</th>
                                <th align="center" width="50">Editar</th>
                                <th align="center" width="50">Excluir</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                            require_once("./view-alunobd.php");

                            if ($totalRegistros > 0) {
                                foreach ($dados as $linha) {
                            ?>
                            <tr>
                                <td align="center"><?= $linha["idaluno"] ?></td>
                                <td><?= $linha["nomealuno"] ?></td>
                                <td><?= $linha["turma"] ?></td>

                                <td align="center">
                                    <a href="./atu-aluno.php?id=<?= $linha['idaluno'] ?>">
                                        <img src="../img_icon/atualizar.png" alt="Atualizar" title="Atualizar registro">
                                    </a>
                                </td>

                                <td align="center">
                                    <a href="./exec-aluno.php?id=<?= $linha['idaluno'] ?>">
                                        <img src="../img_icon/excluir.png" alt="Excluir" title="Excluir registro">
                                    </a>
                                </td>
                            </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>                    
            </main>      

        <?php include_once("./rodape.php"); ?>
    
</body>
</html>