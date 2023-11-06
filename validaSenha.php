<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("./login/conexao/conexao.php");
    $usuario = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

    try {
        $comandoSQL = "SELECT * FROM etec WHERE email = :usuario";
        $comandoSQL = $conexao->prepare($comandoSQL);
        $comandoSQL->bindParam(":usuario", $usuario);
        $comandoSQL->execute();

        // Testa se o email é válido
        if ($comandoSQL->rowCount() > 0) {
            $linha = $comandoSQL->fetch();

            // Verifica se a senha informada é a mesma do banco de dados
            if (password_verify($senha, $linha["senha"])) {
                session_start();
                $_SESSION["nome"] = $linha["nome"];
                $_SESSION["temposessao"] = time() + 3600;

                header("Location: ./sistema/menu.php");
                exit();
            } else {
                header("Location: ./index.php");
                exit();
            }
        } else {
            header("Location: ./index.php");
            exit();
        }
    } catch (PDOException $erro) {
        echo "Erro: " . $erro->getMessage();
        exit();
    }
} else {
    header("Location: ./index.php");
    exit();
}
?>