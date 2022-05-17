<?php
    include 'conexoes/conexaobd.php';

    $listardados = mysqli_query( $conexaoBD, 'SELECT * FROM etc');

?>