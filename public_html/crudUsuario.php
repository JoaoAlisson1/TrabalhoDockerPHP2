<?php
include 'conexaoBD.php';

function cadastrarUsuario($nome, $senha, $cpf){
    connect();
    query("INSERT INTO login (nome, senha, cpf)
           VALUES ('$nome', '$senha', '$cpf')");
    close();
}

function buscarUsuario($nome){
    connect();
    $resultados=query("SELECT * FROM login WHERE nome='$nome'");
    close();
    return $resultados;
}
