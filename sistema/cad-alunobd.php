<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_FILES['foto']['name'])) {

        $dir_fotos = "./fotos/";

        $nome_original = str_replace(" ", " ", basename($_FILES["foto"]["name"]));

        $token = md5(uniqid(rand(), true));

        $nome_final = $dir_fotos . $token . $nome_original;

        $flag = true;

        if (!(getimagesize($_FILES["foto"]["tmp_name"]) > 2000000)) {
            $flag = false;
        }

        $extensao = strtolower(pathinfo($nome_original, PATHINFO_EXTENSION));

        if (($extensao != "jpg") && ($extensao != "gif") &&
            ($extensao != "bmp") && ($extensao != "jpeg") &&
            ($extensao != "png") && ($extensao != "webp")) {
            $flag = false;
        }

        if ($flag) {
            $foto = $token . $nome_original;
        } else {
            $foto = "etec.png";
        }

        $nomeAluno = filter_input(INPUT_POST, "nomealuno", FILTER_SANITIZE_SPECIAL_CHARS);
        $turmaAluno = filter_input(INPUT_POST, "turma", FILTER_SANITIZE_SPECIAL_CHARS);

        try {
            require_once ("../conexao/conexao.php");

            $comandoSQL = $_conexao->prepare("
            INSERT INTO etec.aluno(
                `nomealuno`,
                `turma`,
                `foto`
            ) VALUES (
                :nomealuno,
                :turma,
                :foto
            )
            ");
            $comandoSQL->bindParam(":nomealuno", $nomeAluno, PDO::PARAM_STR);
            $comandoSQL->bindParam(":turma", $turmaAluno, PDO::PARAM_STR);
            $comandoSQL->bindParam(":foto", $foto, PDO::PARAM_STR);
            $comandoSQL->execute();

            if ($comandoSQL->rowCount() > 0) {

                if (isset($flag)) {
                    move_uploaded_file($_FILES["foto"]["tmp_name"], $nome_final);
                }

                header("Location: ./view-aluno.php");
                exit();
            } else {
                echo "Erro na gravação";
            }
        } catch (PDOException $erro) {
            echo "Erro no cadastro. Contate o suporte.<br>" . $erro->getMessage();
        }
    } else {
        echo "Erro ao enviar as informações";
    }
}