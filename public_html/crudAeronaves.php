<?php
include 'conexaoBD.php';
function cadastrarAeronaves($nome, $valor, $ano) {
    connect();
    query("INSERT INTO aeronaves (nome, valor, ano)
    VALUES ('$nome',$valor, $ano)");
close();

}

function mostrarAeronaves(){
    connect();
    $resultados=query("SELECT * FROM aeronaves");
    close();
    return $resultados;
}

function mostrarAeronavesAlterar($codigo){
    connect();
    $resultados=query("SELECT * FROM aeronaves WHERE codigo=$codigo");
    close();
    return $resultados;
}

function alterarAeronaves($codigo, $nome, $valor, $ano){
    connect();
    query("UPDATE aeronaves SET nome='$nome',
    valor=$valor, ano=$ano WHERE codigo=$codigo");
    close();
}

function excluirAeronaves($codigo){
    connect();
    query("DELETE FROM aeronaves WHERE codigo=$codigo");
    close();
}