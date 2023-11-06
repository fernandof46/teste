<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nomeUsuario = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $setorUsuario = filter_input(INPUT_POST, "setor", FILTER_SANITIZE_SPECIAL_CHARS);
    $emailUsuario = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $senhaUsuario = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);


    try{
        require_once ("../conexao/conexao.php"); 

        $comandoSQL = $_conexao->prepare("
        INSERT INTO etec.usuario(
            `nome`,
            `setor`,
            `email`,
            `senha`
        ) VALUES (
            :nome,
            :setor,
            :email,
            :senha
        )
        ");
        $comandoSQL->bindParam(":nome", $nomeUsuario, PDO::PARAM_STR);
        $comandoSQL->bindParam(":setor", $setorUsuario, PDO::PARAM_STR);
        $comandoSQL->bindParam(":email", $emailUsuario, PDO::PARAM_STR);
        $comandoSQL->bindParam(":senha", $senhaUsuario, PDO::PARAM_STR);
        $comandoSQL->execute();

        if($comandoSQL->rowCount() > 0){
            header("location: ./view-usuario.php"); // Corrigi a sintaxe do redirecionamento
            exit();
        }
        else{
            echo("Erro na gravação");
        }

    }
    catch (PDOException $erro) {
        echo("Erro no cadastro. Contate o suporte.<br>" . $erro->getMessage()); // Corrigi a sintaxe da exibição do erro
    }

}
else{
    echo("Erro ao enviar as informações");
}
?>