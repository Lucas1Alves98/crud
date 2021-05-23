<?php

class Conexao{

   private $user;
   private $pass;
   private $db;
   private $server;
   private static $pdo; //static define que o atributo pertence a essa classe
   

    function __construct()
    {
        $this->user = "root";
        $this->pass = "";
        $this->db = "crud";
        $this->server = "localhost";
    }

    public function conexao(){

        try {
            if (is_null(self::$pdo)){
                self::$pdo = new PDO("mysql :host=" .$this->server." ;dbname=".$this->db,$this->user,$this->pass);
            }return self ::$pdo; //code...
        } catch(PDOException $erro){
            echo $erro->getMessage();
            
        }


    }
}

 
