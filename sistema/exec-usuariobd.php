<?php
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
    try{
        require_once ("../conexao/conexao.php");

        $comandoSQL = $conexao -> prepare("
           DELETE FROM ETEC.usuario WHERE `id` = :id");

        $comandoSQL -> bindParam(":id", $id, PDO ::PARAM_STR);

        $comandoSQL -> execute();

        if($comandoSQL -> rowCount() > 0){
            header("location:./view-usuario.php");
            exit();
        }
        else{
            echo("Erro na gravação do arquivo");
        }
    }
    catch(PDOException $erro){
        echo("Erro na atualização dos dados");

    }
}
    else{
        echo("Erro na atualização dos dados");
    }

