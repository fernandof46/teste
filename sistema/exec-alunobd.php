<?php
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $idaluno = filter_input(INPUT_POST, "idaluno", FILTER_SANITIZE_NUMBER_INT);
    try{
        require_once ("../conexao/conexao.php");

        $comandoSQL = $conexao -> prepare("
           DELETE FROM ETEC.aluno WHERE `idaluno` = :idaluno");

        $comandoSQL -> bindParam(":idaluno", $idaluno, PDO ::PARAM_STR);

        $comandoSQL -> execute();

        if($comandoSQL -> rowCount() > 0){
            header("location:./view-aluno.php");
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

