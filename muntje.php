<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
#button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

#button {
  background-color: white; 
  color: black; 
  border: 2px solid red;
}

#button:hover {
  background-color: red;
  color: white;
  }
    </style>

</head>
<body>
    
<?php

function muntjeGooien(){
     $munt = mt_rand(0, 1);
     $returnVal;
     if($munt==0){
        $returnVal = "<img src='./img/munt.jpg'/> Munt";
     }else{
        $returnVal = "<img src='./img/kop.png'/> Kop";
     }
     return $returnVal;
     }
     echo muntjeGooien();
 
?>

</body>
</html>