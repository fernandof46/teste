<?php
$id = filter_input(INPUT_GET,"id", FILTER_SANITIZE_NUMBER_INT);

require_once("../conexao/conexao.php");

try{
    $COMANDOSQL = "SELECT * FROM etec.usuario WHERE id=:id";
    $COMANDOSQL = $conexao->prepare($COMANDOSQL);
    $COMANDOSQL->bindParam(':id',$id);
    $COMANDOSQL->execute();
    $resultado = $COMANDOSQL->fetch(PDO::FETCH_ASSOC);

} catch (PDOException $erro){
    echo ("entre em contato com o administrador do sistema.");
}