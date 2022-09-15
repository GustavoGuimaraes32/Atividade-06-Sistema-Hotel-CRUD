<?php 

include_once("../model/config.php");

$codigo=$_GET['codigo'];

$select = "SELECT * FROM tb_cliente WHERE codigo=$codigo";
$result = $conexao->query($select);


if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $nome = $row['nome'];
        $sobrenome = $row['sobrenome'];
        $cpf = $row['cpf'];
        $endereco =  $row['endereco'];
        $telefone = $row['telefone'];
    }


}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cliente</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/93d18202e7.js" crossorigin="anonymous"></script>
</head>
<!--
<body>
    <form action="../controller/salvaAtualizaCliente.php" method=POST>
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value=<?php echo $nome?>>

        <label for="sobrenome">Sobrenome</label>
        <input type="text" id="sobrenome" name="sobrenome" value=<?php echo $sobrenome?>>

        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf" value=<?php echo $cpf?>>

        <label for="endereco">Endereço</label>
        <input type="text" id="endereco" name="endereco" value=<?php echo $endereco?>>

        <label for="telefone">Telefone</label>
        <input type="text" id="telefone" name="telefone" value=<?php echo $telefone?>>

        <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
        <input type="submit" name="update" id="update" value="Salvar alterações">
    </form>
    

    
</body>
-->
<body onload="atualizarCampos()">
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">

            <form action="/controller/salvaAtualizaCliente.php" method="POST">

				<h2 class="title">Editar Informações</h2>

				<input type="hidden" name="codigo" value="<?php echo $codigo?>">

           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nome</h5>
           		   		<input type="text" name="nome" class="input" value="<?php echo $nome?>">	
           		   </div>
           		</div>

           		<div class="input-div pass">
           		   <div class="i"> 
						<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Sobrenome</h5>
           		    	<input type="text" class="input" name="sobrenome" value="<?php echo $sobrenome?>">
            	   </div>
            	</div>

				<div class="input-div pass">
					<div class="i"> 
						 <i class="fas fa-lock"></i>
					</div>
					<div class="div">
						 <h5>CPF</h5>
						 <input type="text" oninput="mascara(this)" class="input" required maxlength="14" title="O campo deve ser preenchido da seguinte maneira: 000.000.000-00" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" name="cpf" value="<?php echo $cpf?>">
				 </div>
			  </div>

			  <div class="input-div pass">
				<div class="i"> 
						<i class="fa-solid fa-location-dot"></i>
				</div>
				<div class="div">
					 <h5>Endereço</h5>
					 <input type="text" class="input" name="endereco" value="<?php echo $endereco?>">
			 </div>
		  </div>

		  <div class="input-div pass">
			<div class="i"> 
					<i class="fa-solid fa-square-phone-flip"></i>
			</div>
			<div class="div">
				 <h5>Telefone</h5>
				 <input type="text" class="input" pattern="\([0-9]{2}\)[0-9]{4,5}-[0-9]{4}$"
				 title="O Telefone dece ser inserido da seguinte forma: (xx)xxxxx-xxxx"
				 required="required" name="telefone" value="<?php echo $telefone?>">
		 </div>
	  </div>

            	<input type="submit" class="btn" value="Editar Informações">
            </form>

        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
	<script>

		
        // Faz os campos penarem que ja foram clicados alguma vez
		function atualizarCampos()
		{
			let inputs = document.getElementsByClassName("input");	
			for (let i = 0; i < inputs.length; ++i)
				inputs[i].focus();
		}

		// MASCARA PARA O INPUT CPF
		function mascara(i)
  		{
    
			var v = i.value;
			
			if(isNaN(v[v.length-1]))
			{
			// impede entrar outro caractere que não seja número
			i.value = v.substring(0, v.length-1);
			return;
			}
			
			i.setAttribute("maxlength", "14");
			if (v.length == 3 || v.length == 7) i.value += ".";
			if (v.length == 11) i.value += "-";

		}
	</script>
</body>
</html>