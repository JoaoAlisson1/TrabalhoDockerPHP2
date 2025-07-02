<?php
include 'crudAeronaves.php';

function mostrarTodasAeronaves(){
    return mostrarAeronaves();
}

function mostrarCadaAeronaveAlterar($codigo){
    return mostrarAeronavesAlterar($codigo);
}

if(isset($_POST["opcao"])){
$opcao=$_POST["opcao"];

switch($opcao){
    case 'cadastrar':
        cadastrarAeronaves($_POST["nome"],
                          $_POST["valor"], $_POST["ano"]);
        header("Location: cadastrarAeronaves.php");
    break;
    case 'alterar':
        alterarAeronaves($_POST["codigo"],
        $_POST["nome"],$_POST["valor"], $_POST["ano"]);
        header("Location: mostrarAeronaves.php");
    break;
    case 'excluir':
        excluirAeronaves($_POST["codigo"]);
        header("Location: mostrarAeronaves.php");
    break;
}
}