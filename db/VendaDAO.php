<?php

require_once 'connection.php';

class VendaDAO
{
    public function salvaVenda($idProduto, $codigoCliente, $idCartao, $totalVenda, $paymentId, $merchantOrderID){
        global $pdo;
        $query = "INSERT INTO venda (id_produto, codigo_cliente, id_cartao, total_compra, payment_id, merchantorderid) 
                    VALUES ( ".$idProduto.",".$codigoCliente.",".$idCartao.",".$totalVenda.",'".$paymentId."','".$merchantOrderID."');";
        $statement = $pdo->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }
}