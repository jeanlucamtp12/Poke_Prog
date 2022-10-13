<?php
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/introBonus.css">

    <title>Document</title>
</head>

<body>

<div id="tittle">
    <img src="./img/cidade/cidades_simbolo.png">
    <h1>Cidade de Cerulean - Desafio na Floresta (Laços de Decisão)</h1>
</div>


    <div class="fundo_unowns">
        <img id="zubat" src="./img/bonus/zubat.gif">
        <img id="zubat" src="./img/bonus/zubat.gif">
        <img id="zubat" src="./img/bonus/zubat.gif">

        <h1>
            Nesse desafio, voce precisa atravessar a floresta coletando as frutas e respondendo as perguntas que Haunter te fizer.
        </h1>
        <h1>
            As perguntas sao referentes aos conceitos de laços de decisao.
        </h1>

        <a id="espaco" href="fasebonus.php?id=<?php echo($id)?>" >Iniciar</a>
        <img src="./img/bonus/haunter.gif">

       
        
    </div>


</body>
</html>
<body>


    
</body>
</html>