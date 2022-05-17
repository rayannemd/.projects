<?php include "conexoes/menu.php"?>
<?php include "conexoes/listarbd.php"?>

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
    <h3 id="titulocor">Lista de inscritos no evento</h3>
    </div>
    <br>
    <div class="container">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Turma</th>
      <th scope="col">Jogo</th>
    </tr>
  </thead>
    <?php while($usuario = mysqli_fetch_assoc($listardados)){ ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $usuario['id_etc'];?></th>
      <td> <?php echo $usuario['nome'];?></td>
      <td> <?php echo $usuario['telefone'];?></td>
      <td> <?php echo $usuario['turma'];?></td>
      <td> <?php echo $usuario['jogo'];?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2"></td>
      <td></td>
      <td></td>
    </tr>
    <?php }?>
  </tbody>
</table>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>