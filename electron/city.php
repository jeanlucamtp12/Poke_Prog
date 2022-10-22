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

    <div class="mapa">
        <h2>Poke City</h2>

        <div class="variaveis">
            <h4>Cidade das variaveis</h4>
            <a href="unowns.php"><img  src="./img/regiao/variaveis.png"></a>
        </div>

        <div class="linha1" ></div>   <div class="linha1-1" ></div> <div class="linha2" ></div> <div class="linha3" ></div> <div class="linha3-3" ></div>  <div class="linha4" ></div> <div class="linha5" ></div> <div class="linha5-5" ></div> <div class="linha6" ></div> <div class="linha7" ></div> <div class="linha7-1" ></div>


        <div class="decisao" >
            <h4>Escola das decisões</h4>
            <a href="decisao/decisao.php"><img class="" src="./img/regiao/decisao.png"></a>
        </div>

        <div class="repeticao" >
            <h4>Lago repetição</h4>
            <a href="repeticao/repeticao.php"><img class="" src="./img/regiao/repeticao.png"></a>
        </div>

        <div class="arrays" >
            <h4>Cidade dos arrays</h4>
            <a href="arrays/arrays.html"> <img class="" src="./img/regiao/arrays.png"></a>
        </div>

        <div class="funcoes" >
            <h4>Fabrica de funções</h4>
            <a href="funcoes/funcoes.php"><img class="" src="./img/regiao/funcoes.png"></a>
        </div>

        <div class="excecoes">
            <h4>Misterio das exceções</h4>
            <a href="excecoes/excecoes.php"><img class=""   src="./img/regiao/excecoes.png"></a>
        </div>

        <div class="recursividade">
            <h4>Templo recursivo</h4>
            <a href="recursividade/recursividade.html"><img class=""   src="./img/regiao/recursividade.png"></a>
        </div>

        <div class="trofeu">
            <img class=""   src="./img/regiao/trofeu.png">
        </div>
   

    </div>







</body>

</html>