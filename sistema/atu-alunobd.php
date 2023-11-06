<?php
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        // Filtrando as informações recebidas
        $idaluno = filter_input(INPUT_POST, "idaluno", FILTER_SANITIZE_NUMBER_INT);
        $nomealuno = filter_input(INPUT_POST, "nomealuno", FILTER_SANITIZE_SPECIAL_CHARS);
        $turma = filter_input(INPUT_POST, "turma", FILTER_SANITIZE_SPECIAL_CHARS);
       

       

        try{
            require_once("../conexao/conexao.php");

           
            {
                $comandoSQL = $conexao->prepare("
                    UPDATE etec.aluno SET 
                    `idaluno`= :idaluno,
                    `nomealuno`= :nomealuno,
                    `turma`= :turma      
                      
                    WHERE `idaluno`= :idaluno");

                
                $comandoSQL->bindParam(":idaluno", $id, PDO::PARAM_STR);
                $comandoSQL->bindParam(":nomealuno", $nome, PDO::PARAM_STR);
                $comandoSQL->bindParam(":turma", $turma, PDO::PARAM_STR);
                
            }
           
            // executar o comando SQL no banco de dados
            $comandoSQL->execute();

            // se rowCount retornar um valor maior que zero é que foi inserido um valor no BD
            if($comandoSQL->rowCount() > 0){
                // echo("SUCESSO NA GRAVAÇÃO");
                header("location:./view-aluno.php");
                exit();
            }
            else {
                
                echo("ERRO na gravação");
            }

        }
        catch(PDOException $erro){
            echo("Erro na atualização de usuário.<br>"+$erro->getMessage());
        }
    }
    else{
        echo("Erro no envio das informações!");
    }