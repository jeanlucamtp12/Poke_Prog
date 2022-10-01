<?php
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/decisao.css">


    <title>Document</title>
</head>

<body>

    <div class="jogobonus">


        <img class="poke" src="../img/decisao/bulbasaur_costa.gif"> 
        <img class="pokeAdversario" src="../img/decisao/arbok.png"> 


        <img class="grama" src="../img/decisao/grama.png"> 
        <img class="grama2" src="../img/decisao/grama.png"> 
        


        <img class="nuvens" src="../img/decisao/clouds.png" style.right="-220px"> 
        <img class="nuvens" src="../img/decisao/clouds.png" style.right="-20px"> 





        <img class="jogador" src="../img/decisao/menino.png"> </img>
        <img class="adversario" src="../img/decisao/adversario.png"> </img>

        <img class="base1" src="../img/decisao/base.png"> </img>
        <img class="base2" src="../img/decisao/base.png"> </img>


    
        <div class="barraVidaAdversario" >HP</div>

        <div class="barraVida" >HP</div>

    </div>











        <script>
          
            var cont = document.querySelector("#form");

            const pedra = document.querySelector('#pedra');
            const pokemon = document.querySelector('.poke');
            const maca = document.querySelector('#maca');



            const loop = setInterval(() => {

                const posicaoPedra = pedra.offsetLeft;
                const posicaoPoke = window.getComputedStyle(pokemon).bottom;
                const posicaoMaca = maca.offsetLeft;

                const removerPx = posicaoPoke.replace('px', '');
                valorConvertido = parseInt(removerPx);

                if (posicaoPedra <= 15 && valorConvertido < -20) {
                    console.log(posicaoPoke);
                    console.log(removerPx);

                    pedra.style.animation = 'none';
                    pedra.style.left = '125px';
                    maca.style.animation = 'none';
                    maca.style.left = '519px';
                    document.querySelector("#reiniciar").style.display = "block"; // ou "block"


                }



                if (posicaoMaca <= 15) {


                    maca.style.animation = 'none';
                    maca.style.left = '125px';

                    pedra.style.animation = 'none';
                    pedra.style.left = '889px';

                    document.querySelector("#form").style.display = "block"; // ou "block"



                }

            }, 10);

            const personagem = document.querySelector('.poke');

            const mover = () => {

                personagem.classList.add('movimento');


                setTimeout(function() {
                    personagem.classList.remove('movimento');
                }, 1000);

            }
            document.addEventListener('keydown', mover);






        </script>


</body>

</html>