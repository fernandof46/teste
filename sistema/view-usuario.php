<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso ao sistema</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <h1>Consulta de usuários<img src="../img_icon/logocompleto.png" width = "350px" image-orientation = left alt="Logo etec completo"></h1>
      <main>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th align="center" width="50">#</th>
                        <th width="300">Nome do usuario</th>
                        <th width="300">Setor de trabalho</th>
                        <th align="Center" width="50">Editar</th>
                        <th align="Center" width="50">Excluir</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                    require_once("./view-usuariobd.php");

                    if($totalRegistros > 0){
                        foreach($dados as $linha){
                        }
                    }
                    ?>
                    <tr>
                        <td align="center"><?=$linha["id"]?></td>
                        <td><?=$linha["nome"]?></td>
                        <td><?=$linha["setor"]?></td>
                        <td><?=$linha["email"]?></td>
                        <td><?=$linha["senha"]?></td>

                        <td align="center">
                            <a href="./atu-usuario.php><?=$linha['id'];?>">
                            <img src="..img_icon/atualizar.png" alt="Atualizar" title="Atualiza registro">
                            </a>
                        </td>

                        <td align="center">
                            <a href="./exec-usuario.php><?=$linha['id'];?>">
                            <img src="..img_icon/excluir.png" alt="Excluir" title="Excluir registro">
                            </a>
                        </td>
                    </tr>
                   
                </tbody>
            </table>
        </div>                    
    </main>      

        <?php include_once("./rodape.php"); ?>
    
</body>
</html>