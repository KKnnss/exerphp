<?php 

require 'config.php';

session_start();
ob_start();

$id = $_SESSION['id'];
$sql = $pdo->query("SELECT * FROM tbl_usuario WHERE id = $id");
$banco = $sql->fetch(PDO::FETCH_ASSOC);   

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> Cadastrar veiculo </title>
</head>
<body>

    <div id="grid-container">
        
        <div id="menu-container">            

            <div class="item-menu" id="left-menu"> <a href="home.php"> Sistema de estacionamento </a> </div>
            
            <div>

                <div class="item-menu"> <img id="img-menu" src="arquivo/<?=$banco['avatar']; ?>" alt="foto-de-perfil"> </div>
                <div class="item-menu"> <span>  <?= $_SESSION['nome']?>  </span> </div>
                <div class="item-menu"> <a href="sair_action.php"> Sair </a> </div>
                
            </div>

        </div>
            
        <div id="main-container">

            <div id="h1-container"> <h1>Cadastro de Veículo</h1> </div>

            <div id="form-container">

                <form action="registra_action.php" method="post">

                    <input type="hidden"> <br>

                    <input class="input-form" type="text" name="nome" placeholder="nome do cliente"> <br>

                    <input class="input-form" type="text" name="contato" placeholder="contato do cliente"> <br>

                    <input class="input-form" type="number" name="tipo" placeholder="tipo do veiculo"> <br>

                    <input class="input-form" type="text" name="placa" placeholder=" nome da placa"> <br>

                    <input class="input-form" type="text" name="marca" placeholder=" nome do marca"> <br>

                    <input class="input-form" type="text" name="modelo" placeholder=" nome do modelo"> <br>

                    <input class="input-form" type="text" name="data" placeholder="data"> <br>

                    <input class="input-form" type="text" name="hora" placeholder="hora"> <br>

                    <input id="button-form" type="submit" name="cadastrar" value="cadastrar">
            
                </form>

                <div> <a href="home.php"> Voltar </a>  </div>
                
            </div>    
                               
        </div>

    </div>

</body>
</html>