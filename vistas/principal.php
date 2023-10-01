<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../estilos/estilo.css">

    <title>Pokedex</title>
  </head>
  <body>



  	<?php
  	require("menu.php");

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['vienedelform'] == 'si') {
      if ($_POST['nombre'] != '') {
       $pokemon= $_POST['nombre'];
      }else{
        echo 'Nombre incorrecto';
      }
    }
  }else{
    echo 'Ha ocurrido un error';
  }



  
  	$url='https://pokeapi.co/api/v2/pokemon/'.$pokemon;

	$data = json_decode( file_get_contents($url), true );




	?>
<center>
	<br><br><br><br><br>
	<form>
		<br>
	<img src="../assets/logo.png" width="250px" height="120px">
<br><br>
		<table class="table">
  <thead>
    <tr>
      <td scope="col" align="center"><h4><b>Id</b></h4></td>
      <td scope="col" align="center"><h4><b>Nombre</b></h4></td>
      <td scope="col" align="center"><h4><b>Altura</b></h4></td>
      <td scope="col" align="center"><h4><b>Peso</b></h4></td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row" align="center"><h4><?php echo $data['id']; ?></h4></td>
      <td align="center"><h4><?php echo $data['name']; ?></h4></td>
      <td align="center"><h4><?php echo $data['height']; ?></h4></td>
      <td align="center"><h4><?php echo $data['weight']; ?></h4></td>

     
    </tr>

  </tbody>
</table>
<br>
	<marquee><img src="../assets/pika.gif" width="120px" height="80px"></marquee>
	<br>	
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



