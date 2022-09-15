<?php
include_once("..\model\config.php");

$codigo = $POST['codigo'];
$nome = $POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$endereco =  $_POST['endereco'];
$telefone = $_POST['telefone'];

$update = "UPDATE tb_cliente SET nome='$nome', sobrenome='$sobrenome', cpf='$cpf', endereco'$endereco', '$telefone') WHERE codigo = '$codigo';";
$result = $conexao->query($update);

if($result)
{
    header('Location: ../view/clintes.html');
}
else 
{
    echo "erro"($conexao);
}
