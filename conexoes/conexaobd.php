<?php

$servidor = "localhost"; //pode ser 127.0.0.1 também
$usuario = "root";
$senha = "";
$nomedobancodedados = "helloword";//precisa criar

$conexaoBD = mysqli_connect($servidor, $usuario, $senha, $nomedobancodedados);

if (!$conexaoBD) {
    echo "Não conectado ao banco.";
} else {
    echo "Conectado ao banco.";
}


?>