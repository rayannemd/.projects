<?php 
    include 'conexoes/conexaobd.php';
    include 'conexoes/menu.php';
    //include 'conexoes/salvar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulário SEGA</title>
</head>
<body id="body">
    
   
    <div class="row" id="titulo">
        <h3 id="titulocor">Cadastro do participante</h3>
        </div>
        <br>
    <div class="container">
    <form action="conexoes/salvar.php" method="post">
        <div class="row" id="linha">
             <div class="col-sm-5">
                 <label>Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome completo">
             </div>
        </div>
        <div class="row" id="linha">
             <div class="col-sm-3">
                <label>Telefone</label>
                    <input type="text" name="telefone" class="form-control" placeholder="00 0 0000-0000">
             </div>
             <div class="col-sm-1">
                <label>Turma</label>
                <input type="text" name="turma" class="form-control" placeholder="Ex: 2ºB">
             </div>
        </div>
        <div class="row" id="linha">
             <div class="col-sm-3">
                <label>Jogo</label>
                    <input type="text" name="jogo" class="form-control" placeholder="Ex: League Of Legends">
             </div>
        </div>
        <div class="row">
            <div class="col">
                <label></label>
            </div>
        </div>
        <br>
        <div class="row" id="linha">
            <div class="col-12">
                <button type="submit" class="btn btn-primary" id="btn">Cadastrar</button>
             </div>
        </div>
        </form>

    </div>


   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>