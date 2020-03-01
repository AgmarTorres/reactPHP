<?php
include("classConexao.php");

class Carros extends ClassConexao{

    #Exibição dos carros em um json
    public function exibeCarros(){
        $BFetch  = $this->conectaDB()->prepare("select * from carros");
        $BFetch->execute();

        $J=[];
        $I = 0;

        while( $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)){
            
            $J[$I] = [
                "Id" => $Fetch['id'],
                "Marca" =>$Fetch['marca'],
                "Modelo" => $Fetch['modelo'],
                "Ano" => $Fetch['ano']
            ];
            
            $I++;
        }
        header("Access-Control-Allow-Origin:*");
        header("Content-type: application/json");
        echo json_encode($J);
    }

}