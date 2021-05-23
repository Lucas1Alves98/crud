<?php

( stream_resolve_include_path ( "homeController.php" ));
( stream_resolve_include_path ( "indexModelBean.php" ));
require_once "conexao.php";


class sql
{
    private $cadastro;
    private $conexao;

    function __construct()
    {
        $this->cadastro = new Cadastro();
        $this->conexao = new Conexao();
    }

    public function insert($conexao,$cadastro)
    {
        $query = $conexao->conectar()->prepare("insert into crud (email,senha) values (:email,:senha)");

        $query-> bindValue(":email",$cadastro->getEmail());
        $query-> bindValue(":senha",$cadastro->getSenha());
        
        $query->execute();
    }
}