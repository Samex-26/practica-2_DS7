<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practica 2</title>
</head>
<body>
  <H2>Tu Edad</H2>
    <form name="formulario" action="" method="POST">
       Introduce tu nombre: <input type="text" name="nombre"><br><br>
       Introduce la edad: <input type="text" name="edad"><br><br>
       <input type="submit" value="Enviar">
    </form>
  <br>
  <?php 
    if($_POST){
        foreach($_POST as $clave => $valor ){
            echo "El valor de $clave es: $valor <br>";
        }
    }
  ?>  
</body>
</html>