<?php 
include 'conexoes/conexaobd.php';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$turma = $_POST['turma'];
$jogo = $_POST['jogo'];

$salvar = mysqli_query($conexaoBD, "INSERT INTO etc(nome, telefone, turma, jogo) VALUES ('$nome', '$telefone', '$turma','$jogo')");

if ($salvar) {
    header ('location: index.php');
}


?>