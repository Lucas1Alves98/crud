<?php

require_once "../Model/ModelBean/indexModelBean.php";
require_once "../Model/ModelDao/indexModelDao.php";
require_once "../Model/ModelDao/conexao.php";



$conexao = new Conexao();
$cadastro = new Cadastro();
$sql = new sql();

$senha = filter_input(INPUT_POST,'senha');
$email = filter_input(INPUT_POST,'email');

$cadastro->setSenha($senha);
$cadastro->setEmail($email);

$sql -> insert ($conexao,$cadastro);