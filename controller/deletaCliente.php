<?php
include_once("..\model\config.php");

$codigo = $POST['codigo'];

$delete = "DELETE FROM tb_cliente WHERE codigo = '$codigo';";
$result = $conexao->query($delete);