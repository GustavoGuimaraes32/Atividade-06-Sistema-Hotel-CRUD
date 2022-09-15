<?php
include_once("..\model\config.php");

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$endereco =  $_POST['endereco'];
$telefone = $_POST['telefone'];

$update = "UPDATE tb_cliente SET nome='$nome', sobrenome='$sobrenome', cpf='$cpf', endereco='$endereco', telefone='$telefone' WHERE codigo = '$codigo';";
$result = $conexao->query($update);

if($result)
{
    header('Location: ../view/clientes.php');
}
else 
{
    echo "erro"($conexao);
}
