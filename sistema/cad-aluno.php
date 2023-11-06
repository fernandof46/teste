<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso ao sistema</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <h1>Cadastro de alunos<img src="../img_icon/logocompleto.png" width = "350px" image-orientation = left alt="Logo etec completo"></h1>
    <div class="container">
        <form action = "./cad-aluno.php" method="POST" enctype="multipart/form-data">
            <div class = "row-fluid">
            <div class="col-1">
                <div style = "cursor:pointer;">
                    <label for="foto">
                        <img
                            id="imagem"
                            src="../img_icon/etec.png"
                            style="max-width: 100px;"
                            alt="">
                    </label>
                    <input type="file" name="foto" id="foto" style="display:none">
                </div>
            </div>
            
                <div class="col">
                    <label for="nomealuno"> Nome Completo</label>
                    <input type="text"
                          name="nomealuno"
                          id="nomealuno"
                          placeholder="Nome completo do aluno">
                </div>
            </div>
            <div class = "row-fluid">
                <div class="col">
                    <label for="turma"> Turma</label>
                    <input type="text"
                          name="turma"
                          id="turma"
                          placeholder="Turma ou série">
                </div>
            </div>
            <div class="space10v"></div>

            <div class="row-fluid justify-center">
                <form method="POST" action="cad-alunobd.php">

                <input type="reset" value="Voltar" onclick="javascript: history.go(-1);">
                <input type="submit" value=" SALVAR">
                </form>
            </div>
        </form>
    </div>

    <!-- <form method="POST" action="alim.php">
    <input type="hidden" name="gerar_relatorio" value="true">
    <input type="submit" value="Gerar Relatório">
</form> -->


    <script src="javascript.js"></script>


        </main>
        <?php include_once("./rodape.php"); ?>
    
</body>
</html>