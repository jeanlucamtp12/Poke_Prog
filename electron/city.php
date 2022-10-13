<?php
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/city.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <img id="tela-cheia" src="./img/cidade/cidade.png" usemap="#cidade">

    <map name="cidade">
        <area shape="circle" alt="Variaveis" coords="174, 227, 30" href="unowns.php" alt="Cidade das Variaveis">
        <area shape="circle" alt="Variaveis" coords="282, 280, 30" href="decisao.php" alt="Cidade Decisão">
        <area shape="circle" alt="Variaveis" coords="266, 412, 30" href="introducaoBonus.php?id=<?php echo($id);?>" alt="Fase Bônus">

    </map>



    
    
</body>
</html>