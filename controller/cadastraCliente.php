<?php
include_once("..\model\config.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$endereco =  $_POST['endereco'];
$telefone = $_POST['telefone'];

$insert = "INSERT INTO tb_cliente (nome, sobrenome, cpf, endereco, telefone) 
    VALUES ('$nome', '$sobrenome', '$cpf', '$endereco', '$telefone');";
$result = $conexao->query($insert);

if($result)
{
    header('Location: ../view/clientes.php');
}
else 
{
    echo "erro"($result);
}

