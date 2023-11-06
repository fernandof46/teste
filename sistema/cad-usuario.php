<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <h1>Cadastro de usuários<img src="../img_icon/logocompleto.png" width = "350px" image-orientation = left alt="Logo etec completo"></h1>
    <div class="container">
        <form action = "./cad-usuario.php" method="POST" enctype="multpart/form-data">
            <div class = "row-fluid">
                <div class="col">
                    <label for="nomeU"> Nome do Usuário</label>
                    <input type="text"
                          name="nome"
                          id="nome"
                          placeholder="Nome completo do Usuario">
                </div>
            </div>
            <div class = "row-fluid">
                <div class="col">
                    <label for="setor"> Setor de trabalho</label>
                    <input type="text"
                          name="setor"
                          id="setor"
                          placeholder="Setor de trabalho">
                </div> 
            </div>
            <div class = "row-fluid">
            <div class="col">
                    <label for="e-mail"> E-mail funcional</label>
                    <input type="email"
                          name="email"
                          id="email"
                          placeholder="e-mail funcional">

                </div>
                <div class="col">
                    <label for="senha"> Senha de 8 dígitos</label>
                    <input type="password"
                          name="senha"
                          id="senha"
                          placeholder="Senha com 8 dígitos">

                </div>
                <div class="col">
                    <label for="senha1"> Confirme a senha</label>
                    <input type="password"
                          name="senha1"
                          id="senha1"
                          placeholder="Repita sua senha">
                          <p class = "senha-erro"> Senhas não conferem</p>

                </div>
            </div>

            <div class="space10v"></div>

            <div class="row-fluid justify-center">
                <input type="reset" value="Voltar" onclick="javascript: history.go(-1);">
                <input type="submit" value=" SALVAR" disabled id="submit">
            </div>
        </form>
    </div>
    </main>

    <script src="./javascript.js"></script>

        <?php include_once("./rodape.php"); ?>
    
</body>
</html>