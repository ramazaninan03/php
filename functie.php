<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

function berekenBtw($bedragExBtw){
    $btwBedrag = $bedragExBtw * 0.21;
    return $btwBedrag;
}

$btwEindBedrag = berekenBtw(200);
echo $btwEindBedrag;

?>

</body>
</html>