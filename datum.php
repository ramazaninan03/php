<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<form method="post" action="">
    <input type="date" name="geboorteDatum" />
    <input type="submit" value="send" name="submit" />
</form>

<?php
if(isset($_POST["submit"])){
    $geboorteDatum = date($_POST["geboorteDatum"]);
    
    //Geboortedag bepalen
    $dayOfWeek = date("l", strtotime($geboorteDatum));
    
    //Datum van vandaag ophalen
    $vandaag = date("Y-m-d");
    //Leeftijd berekenen
    $leeftijd = $vandaag - $geboorteDatum;
    
    //Op basis van de maanden bepalen of de persoon al jarig geweest is dit jaar.
    //Wanneer dat niet zo is, dan de leeftijd met 1 verminderen
    $curMonth = date("m", strtotime($vandaag));
    $birthDayMonth = date("m", strtotime($geboorteDatum));
    if($curMonth<$birthDayMonth){
        $leeftijd--;
    }

    //en als laaste de bende op het scherm tonen
    echo "<br />Geboortedatum:". $geboorteDatum;
    echo "<br />Vandaag:". $vandaag;
    echo "<br />Leeftijd:". $leeftijd;
    echo "<br />Geboortedag:". $dayOfWeek;
    
 }
?>

</body>
</html>