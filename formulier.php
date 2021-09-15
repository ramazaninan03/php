<?php
$land='';
 if(isset($_POST["submit"])){
    $land = $_POST["land"];
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            background-color: darkslategrey;
        }

        .Main{
            width: 300px;
            height: 300px;
            margin-left: 600px;
            margin-top: 150px;
            text-align: center;
        }
        
    </style>
    <script>
    function CheckForm(){
        var keuze = document.getElementById("land").value;
        if (keuze =="MK"){
            alert ('Maak een keuze');
        }
    }
    </script>
</head>
<body>
    
<div class="Main">
    <form method="post" onsubmit="CheckForm()" action="">
        Naam: <input type="text" name="naam" placeholder="Uw naam" required /><br />
        Land:
        <select id="land" name="land">
        <option value="MK">Maak uw keuze</option>
        <option <?php if($land=='NL'){echo "selected"; } ?> value="NL">Nederland</option>
        <option <?php if($land=='DE'){echo "selected"; } ?> value="DE">Duitsland</option>
        <option <?php if($land=='EN'){echo "selected"; } ?> value="EN">Engeland</option>
        <option <?php if($land=='FR'){echo "selected"; } ?> value="FR">Frans</option>
        <option <?php if($land=='SP'){echo "selected"; } ?> value="SP">Spaans</option>
        <option <?php if($land=='IT'){echo "selected"; } ?> value="IT">Italiaans</option>
        </select>
        <br />
        <input type="submit" name="submit" value="gegevens versturen" />
    </form>

</div>

 <?php
 if(isset($_POST["submit"])){
    $naam = $_POST["naam"];
    $land = $_POST["land"];

     switch ($land) {
        case 'NL':
            echo 'Goedemorgen '.$naam;
            break;
        case 'DE':
            echo 'Guten Morgen '.$naam;
            break;
        case 'EN':
            echo 'Good Morning '.$naam;
            break;
        case 'FR':
            echo 'Bonjour '.$naam;
            break;
        case 'SP':
            echo 'Buenos días '.$naam;
            break;
        case 'IT':
            echo 'Buongiorno '.$naam;
            break;
        default:
            echo 'Kies een land';
        }
 }
 ?>
    
</body>
</html>