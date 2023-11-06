<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso ao sistema</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <h1>Sistema de controle de refeições ETEC<img src="../img_icon/logocompleto.png" width = "350px" image-orientation = left alt="Logo etec completo"></h1>
    <?php include_once("./menu.php"); ?>

    <main>
        <div class="container">

            <?php
             require_once("./exec-aluno-view.php"); 
            ?>
            <form action="exec-alunoBD.php" method="POST" enctype="multipart/form-data">
                
            <input type="hidden" name="idaluno" value="<?=$resultado["idaluno"];?>">
                
                <div class="row-fluid">
                    <div class = "row-fluid">
                        <div class ="col">
                            <label for = "nomealuno">Nome do aluno</label>
                            <input type="text" 
                            name="nomealuno" 
                            id="nomealuno"
                            placeholder="Nome do aluno"
                            value="<?=$resultado["nomealuno"];?>"
                            disabled>
                        
                        </div>
                    </div>

                </div>

                <div class="row-fluid">
                    <div class = "row-fluid">
                        <div class ="col">
                            <label for = "turma">Turma ou série</label>
                            <input type="text" 
                            name="turma" 
                            id="turma"
                            placeholder="Turma ou série"
                            value="<?=$resultado["turma"];?>"
                            disabled>
                        
                        </div>
                    </div>

                    <div class = "space10v"></div>
                    <div class = "row-fluid justify-center">
                        <input type="reset" value="voltar" onclick="javascript:history.go(-1);">
                        <input
                            type="submit"
                            value="EXCLUIR"
                            style="background-color:red; border:1.5px solid red;">
                    
                    </div>

                </div>
                
            </form>
    </main>
    

        
        <?php include_once("./rodape.php"); ?>
    
</body>
</html>