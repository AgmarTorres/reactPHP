<?php

abstract class ClassConexao{
    protected function conectaDB(){
        try{
            $con = new PDO("mysql:host=localhost;dbname=reactphp", "root", "");
            return $con;
        }
        catch(PDOException $Erro){
           return  $Erro->getMessage();
        }
    }
}