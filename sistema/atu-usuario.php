<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Etec</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <h1>Sistema de controle de refeições<img src="../img_icon/logocompleto.png" width = "350px" image-orientation = left alt="Logo etec completo"></h1>
    <?php include_once("./menu.php"); ?>
    <main>
        <div class="container">
            <?php
            require_once("./atu-usuario-view.php"); 
            ?>
            <form action="./atu-usuarioBD.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id" value="<?=$resultado["id"]?>">

                <div class="row-fluid">
                    <div class="col">
                        <label for="nome">Nome do usuário</label>
                        <input type="text"
                        name="nome" 
                        id="nome"
                        placeholder="Nome do usuário"
                        value="<?=$resultado["nome"];?>">
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="col">
                        <label for="setor">Setor do usuário</label>
                        <input type="text"
                        name="setor" 
                        id="setor"
                        placeholder="Setor do usuário"
                        value="<?=$resultado["setor"];?>">
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="col">
                        <label for="email">E-mail do usuário</label>
                        <input type="email"
                        name="email" 
                        id="email"
                        placeholder="E-mail do usuário"
                        value="<?=$resultado["email"];?>">
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="col">
                        <label for="senha">Senha do usuário</label>
                        <input type="password"
                        name="senha" 
                        id="senha"
                        placeholder="Senha do usuário"
                        value="<?=$resultado["senha"];?>">
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="col">
                        <label for="senha1">Confirma senha</label>
                        <input type="password"
                        name="senha1" 
                        id="senha1"
                        placeholder="Informa novamente a senha">
                        <p class="senha-erro"> Senhas não conferem</p>
                    </div>
                </div>

                <div class="space10v"></div>

                <div class="row-fluid justify-center">
                    <input type="reset" value = "voltar" onclick="javascript:history.go(-1);">
                    <input type="submit" value = "Salvar">
                </div>

            </form>
        </div>
    </main>
    <script>
        let senha = document.querySelector("#senha");
        let senha1 = document.querySelector("#senha1");
        let submit = document.querySelector("#submit");
        let senhaerro = document.querySelector("#.senha-erro");

        function verifica(){
            if(senha1.value == senha2.value){
                senhaerro.style.display = "none";  // retira a mensagem da tela
                submit.disabled = false; // habilita o botão de enviar/SALVAR
            }
            else{
                senhaerro.style.display = "block";
                submit.disabled = true; // mantém o botão de enviar/SALVAR desabilitado
            }
        }
        
        senha2.addEventListener("input", function(){
            verifica();
        });
    </script>


<?php require_once("./rodape.php");?>
</body>
</html>