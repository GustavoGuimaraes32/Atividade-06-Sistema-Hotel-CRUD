<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="css/clientes.css">
    <script src="js/mensagem.js"></script>
    <script src="https://kit.fontawesome.com/93d18202e7.js" crossorigin="anonymous"></script>
</head>
<body>

    <nav>
        <a href="index.html"><button class="btn btn-voltar">Voltar</button></a>
        <h1 class="title">HOTEL MAIS DIVERSÃO</h1>
        <a href="index.html"><button class="btn btn-cadastrar">Cadastrar</button></a>
    </nav>

    <div>
    
        <div id="usuarios">

        <?php
            include_once("..\model\config.php");

            $select = "SELECT * FROM tb_cliente;";
            $result = $conexao->query($select);

            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<section>";
                        echo "<div class='userContainer'>";
                            echo "<div class='userContent'>";

                                echo "<div class='nomeSobrenomeContainer'>";
                                    echo "<h2>". $row['nome']. " " . $row["sobrenome"] .  "</h2>";
                                echo "</div>";

                                echo "<h2>" . $row['cpf']."</h2>";
                                echo "<h2>" . $row['telefone']."</h2>";

                                echo "<div class='btnsContainer'>";
                                    echo "<abbr title='Editar'><a href='/view/atualizaCliente.php?codigo=$row[codigo]' class='editIcon'><i class='fa-solid fa-pen-to-square'></i></a></abbr>";
                                    echo "<abbr title='Excluir'><a href='/controller/deletaCliente.php?codigo=$row[codigo]' class='trashIcon'><i class='fa-solid fa-trash'></i></a></abbr>";
                                echo "</div>";

                            echo "</div>";
                        echo "</div>";
                    echo "</section>";
                }
              } 
              else
              {
                echo "<section class='nenhumUsuarioSection'>";
                echo "<h1>Nenhum Usuário foi Cadastrado!</h1>";
                echo "<img src='img/warning-animate.svg'>";
                echo "</div>";
              }
        ?>
        
        
        
        </div>
        
    </div>
</body>
</html>