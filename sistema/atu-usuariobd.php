<?php
    

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        // Filtrando as informações recebidas
        $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $setor = filter_input(INPUT_POST, "setor", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

        // criptografando a senha
        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

        try{
            require_once("../conexao/conexao.php");

            if($senha != "")
            {
                $comandoSQL = $conexao->prepare("
                    UPDATE etec.usuario SET 
                    `nome`= :nome,
                    `setor`= :setor,
                    `email`= :email,         
                    `senha`= :senha      
                    WHERE `id`= :id");

                // vinculando os dados :nomeLogin com o dado que vem do formulário
                $comandoSQL->bindParam(":id", $id, PDO::PARAM_STR);
                $comandoSQL->bindParam(":nome", $nome, PDO::PARAM_STR);
                $comandoSQL->bindParam(":setor", $setor, PDO::PARAM_STR);
                $comandoSQL->bindParam(":email", $email, PDO::PARAM_STR);
                $comandoSQL->bindParam(":senha", $senhaCriptografada, PDO::PARAM_STR);
            }
            else
            {
                $comandoSQL = $conexao->prepare("
                    UPDATE etec.usuario SET 
                    `nome`= :nome,
                    `setor`= :setor,
                    `email`= :email,
                    `senha`= :senha      
                       
                    WHERE `id`= :id");

                
                $comandoSQL->bindParam(":id", $id, PDO::PARAM_STR);
                $comandoSQL->bindParam(":nome", $nome, PDO::PARAM_STR);
                $comandoSQL->bindParam(":setor", $setor, PDO::PARAM_STR);
                $comandoSQL->bindParam(":email", $email, PDO::PARAM_STR);
                                
            }
            // executar o comando SQL no banco de dados
            $comandoSQL->execute();

            // se rowCount retornar um valor maior que zero é que foi inserido um valor no BD
            if($comandoSQL->rowCount() > 0){
                // echo("SUCESSO NA GRAVAÇÃO");
                header("location:./view-usuario.php");
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