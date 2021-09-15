<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post">

  <label for="lengte">Lengte:</label>
  <input type="text" id="lengte" name="lengte" required ><br><br>

  <label for="breedte">Breedte:</label>
  <input type="text" id="breedte" name="breedte" required ><br><br>

  <input type="submit" name="submit" value="Bereken">

</form>

<?php

if(isset($_POST["submit"])){

$lengte = $_POST['lengte'];
$breedte = $_POST['breedte'];

    function oppervlakteBerekenen($lengte, $breedte){
    return $lengte * $breedte;
    }

    echo oppervlakteBerekenen($lengte, $breedte);
}

?>

</body>
</html>