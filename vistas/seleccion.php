<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos/estilo.css">

    <title>Pokedex</title>
  </head>
  <body>
    <?php
      require("menu.php");
    ?>
    <center>
      <br><br><br>
      <form action="http://localhost/pokedex/vistas/principal.php" method="post">
        <br><br>
        <img src="assets/logo.png" width="250px" height="120px">
  <div class="mb-3" >
     <input type="hidden" name="vienedelform" value="si" />
    <label for="exampleInputEmail1" class="form-label">Ingrese el pokemon a buscar:</label>
    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp">
    
  </div>
  <br>
  <button type="submit" class="btn btn-lg btn-primary">Enviar</button>
  <br>
  <marquee><img src="assets/pika.gif" width="120px" height="80px"></marquee>
  <br>  <br><br>
</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>