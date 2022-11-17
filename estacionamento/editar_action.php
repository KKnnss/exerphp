<?php
    require 'config.php';

   

    $id = filter_input(INPUT_POST, 'id');
    $data = filter_input(INPUT_POST, 'data');
    $hora = filter_input(INPUT_POST, 'hora');
    $cliente = filter_input(INPUT_POST, 'nome');
    $contato = filter_input(INPUT_POST, 'contato');
    $tipo = filter_input(INPUT_POST, 'tipo');
    $placa = filter_input(INPUT_POST, 'placa');
    $modelo = filter_input(INPUT_POST, 'modelo');

    
    if($id && $data && $hora && $cliente && $contato && $tipo && $placa && $modelo) {


        

        
        $sql = pdo->prepare("UPDATE tbl_estacionamento SET data=:data, contato =:contato")
        
        
        
        $sql->bindValue(':data',$data); 
        $sql->bindValue(':hora',$hora); 
        
        $sql = pdo->prepare("UPDATE tbl_cliente SET nome=:nome, contato = :contato")
        $sql->bindValue(':nome',$cliente); 
        $sql->bindValue(':contato',$contato); 
        
        $sql = pdo->prepare("UPDATE tbl_veiculo SET tipo=:tipo,  contato= :contato, placa=:placa, modelo=:modelo")
        
        $sql->bindValue(':tipo',$tipo); 
        $sql->bindValue(':placa',$placa); 
        $sql->bindValue(':modelo',$modelo); 
        
        $sql->bindValue(':id',$id); 
        $sql->execute();

        header("Location:detalhes.php");
        exit;

    } else {
        
        header('Location:detalhes.php'); 
        exit;
    }