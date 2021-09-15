
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
    .main{
        width: 300px;
        float: left;
    }

    label{

    }

    .button {
        display: inline-block;
        padding: 7px 14px;
        font-size: 14px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: red;
        border: none;
        border-radius: 7px;
        box-shadow: 0 5px #999;
    }

    .button:hover {background-color: black}

    .button:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }
    
    </style>
    </head>
    <body>

    
    <form method="post" action="">
    
    <div class="main">
    
    <label for="bedrag"> Ingelegd Bedrag:</label><br>
    <input type="number" name="bedrag" value="" min="0" required ><br>
    <label for="rentepercentage">Rentepercentage:</label><br>
    <input type="number" name="rente" value="" min="0"  required ><br><br>

    <input type="radio" id="html" name="knop" checked value="10jaar">
    <label for="html">Eindbedrag na 10 jaar</label><br>
    <input type="radio" id="css" name="knop" value="verdubbeld">   
    <label for="css">Eindbedrag verdubbeld</label><br><br>

    <input class="button" type="submit" name="submit" value="Bereken">
    
    </div>

    </form>

    <?php 
if(isset($_POST["submit"])){
    $bedrag = $_POST['bedrag'];
    $rente = $_POST['rente'];
    $rente = $rente / 100;

    if($bedrag==0 && $rente==0){
        echo "Geen waare ingevuld";

    }else{
        $knop = $_POST["knop"];
        if($knop=='10jaar'){
            echo "<table border=1>";
            for($i=1;$i<=10;$i++){
                $bedrag += ($bedrag * $rente);
                echo "
                <tr>
                    <th>Jaar " .$i." </th>
                    <th>".round($bedrag, 2)."</th></tr>";
            }
                echo "</table>";
            }
    }

    if($knop=='verdubbeld'){
        $i=1;
        $controleBedrag = $bedrag;
        while($bedrag <= $controleBedrag * 2){
            $bedrag += $bedrag * $rente;
            echo "<table border=1>";
            echo "
                <tr>
                    <th>Jaar " .$i." </th>
                    <th>".round($bedrag, 2)."</th>
                </tr>";

            echo "</table>";
            $i++;
        }

        // for ($i = 1; $bedrag <= $controleBedrag * 2; $i++)
        // {
        //     $bedrag += $bedrag * $rente;
        //     echo "<table border=1>";
        //     echo "
        //         <tr>
        //             <th>Jaar " .$i." </th>
        //             <th>".$bedrag."</th>
        //         </tr>";

        //     echo "</table>";
        // }
    }
}
?>

</body>
</html>