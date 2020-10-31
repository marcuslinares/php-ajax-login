<?php
require "conexao.php";

$nome = 'Marcus';
$email = 'marcus.linares@gmail.com';
$senha = password_hash('221080', PASSWORD_DEFAULT);


$conexao = conexao::getInstance();
$sql = "INSERT INTO tab_usuario(nome, email, senha, status)VALUES('{$nome}', '{$email}', '{$senha}', 'Ativo')";
$stm = $conexao->prepare($sql);
$stm->execute();