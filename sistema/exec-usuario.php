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
             require_once("./exec-usuario-view.php"); 
            ?>
            <form action="exec-usuarioBD.php" method="POST" enctype="multipart/form-data">
                
            <input type="hidden" name="id" value="<?=$resultado["id"];?>">
                
                <div class="row-fluid">
                    <div class = "row-fluid">
                        <div class ="col">
                            <label for = "nome">Nome do usuário</label>
                            <input type="text" 
                            name="nome" 
                            id="nome"
                            placeholder="Nome do usuário"
                            value="<?=$resultado["nome"];?>"
                            disabled>
                        
                        </div>
                    </div>

                </div>

                <div class="row-fluid">
                    <div class = "row-fluid">
                        <div class ="col">
                            <label for = "setor">Setor do usuário</label>
                            <input type="text" 
                            name="setor" 
                            id="setor"
                            placeholder="Setor do usuário"
                            value="<?=$resultado["setor"];?>"
                            disabled>
                        
                        </div>
                        <div class="row-fluid">
                    <div class="col">
                        <label for="senha">Senha</label>
                        <input type="password" 
                            name="senha" 
                            id="senha"
                            placeholder="Informe uma senha com oito caracteres!"
                            value="********"
                            disabled>
                    </div>
                    <div class="col">
                        <label for="senha1">Confirmação de senha</label>
                        <input type="password" 
                            name="senha1" 
                            id="senha1"
                            placeholder="Informe uma senha com oito caracteres novamente!"
                            value="********"
                            disabled>
                    </div>
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