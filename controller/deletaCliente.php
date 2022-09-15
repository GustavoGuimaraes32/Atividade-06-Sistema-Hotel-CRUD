<?php
include_once("..\model\config.php");

$codigo = $_GET['codigo'];

$delete = "DELETE FROM tb_cliente WHERE codigo = '$codigo';";
$result = $conexao->query($delete);

if($result)
{
    header('Location: ../view/clientes.php');
}
else 
{
    echo "erro"($conexao);
}   
