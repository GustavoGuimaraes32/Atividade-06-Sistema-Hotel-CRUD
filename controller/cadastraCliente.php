<?php
include_once("..\model\config.php");

$nome = $POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$endereco =  $_POST['endereco'];
$telefone = $_POST['telefone'];

$insert = "INSERT INTO tb_cliente VALUES ('$nome', '$sobrenome', '$cpf', '$endereco', '$telefone');";
$result = $conexao->query($insert);

if($result)
{
    header('Location: ../view/clientes.html');
}
else 
{
    echo "erro"($result);
}

