<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualiza dados</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <h1>Sistema de controle de refeições<img src="../img_icon/logocompleto.png" width = "350px" image-orientation = left alt="Logo etec completo"></h1>
    <?php include_once("./menu.php"); ?>
    <main>
        <div class="container">
            <?php
            require_once("./atu-aluno-view.php"); 
            ?>
            <form action="./atu-alunobd.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="idaluno" id="idaluno" value="<?=$resultado["idaluno"]?>">

                <div class="row-fluid">
                    <div class="col">
                        <label for="nome">Nome do aluno</label>
                        <input type="text"
                        name="nomealuno" 
                        id="nomealuno"
                        placeholder="Nome do aluno"
                        value="<?=$resultado["nomealuno"];?>">
                    </div>

                    <div class="row-fluid">
                      <div class="col">
                        <label for="turma">Turma ou série</label>
                        <input type="text"
                        name="turma" 
                        id="turma"
                        placeholder="Turma ou série"
                        value="<?=$resultado["turma"];?>">
                    </div>
                </div>
            
            <div class="row-fluid justify-center">
                <input type= "reset" value= "Voltar" onclick = "javascript:history.go(-1);">
                <input type= "submit" value="Salvar">
            </div>
            </form>
        </div>
       
    </main>
    <script>
        let submit = document.querySelector("#submit");
    </script>

    <?php require_once ("./rodape.php"); ?>

</body>
</html>