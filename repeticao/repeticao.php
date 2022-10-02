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

    <link rel="stylesheet" href="../css/repeticao.css">


    <title>Document</title>
</head>

<body>

    <div class="jogobonus">








        <img class="favo" src="../img/repeticao/favo.png">

        <img class="comeia" src="../img/repeticao/comeia.png">


        <img class="lanturn" src="../img/repeticao/lanturn.png">
        <img class="estrela" src="../img/repeticao/estrela.png">
        <img class="estrela2" src="../img/repeticao/estrela.png">


        <img class="nuvens" src="../img/decisao/clouds.png" style.right="-220px" style.display="none">
        <img class="nuvens" src="../img/decisao/clouds.png" style.right="-20px" style.display="none">


        <img class="chuva" src="../img/repeticao/chuva.gif">


        <img class="grama" src="../img/decisao/grama.png">
        <img class="grama2" src="../img/decisao/grama.png">

        <img class="arvore" src="../img/repeticao/arvore.png" style.right="-220px">


        <img class="combee" src="../img/repeticao/combee.png">
        <img class="combee2" src="../img/repeticao/combee.png">
        <img class="combee3" src="../img/repeticao/combee.png">
        <img class="combee4" src="../img/repeticao/combee.png">
        <img class="combeeShiny" src="../img/repeticao/combee-shiny.png">

        <img class="vespiquen" src="../img/repeticao/vespiquen.png">

        <img class="mime" src="../img/repeticao/mr.mime.gif">




        <div class="tronco"></div>


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















        const moverDireita = () => {

            const el = document.querySelector('.mime');
            const value = getComputedStyle(el).getPropertyValue('left');


            var remove_string = value.replace('px', '');
            var valorNum = parseInt(remove_string);

            var numPx = valorNum + 10;
            var soma = parseInt(value) + 10;

            personagem.style.left = soma + "px";



        }

        const moverEsquerda = () => {

            const el = document.querySelector('.mime');
            const value = getComputedStyle(el).getPropertyValue('left');


            var remove_string = value.replace('px', '');
            var valorNum = parseInt(remove_string);

            var numPx = valorNum + 10;
            var soma = parseInt(value) - 10;

            personagem.style.left = soma + "px";

        }




        const personagem = document.querySelector('.mime');

        const mover = () => {

            var tecla = event.keyCode;


            if (tecla == 39) {
                moverDireita();
            } else if (tecla == 37) {
                moverEsquerda();
            } else {
                personagem.classList.add('movimento');


                setTimeout(function() {
                    personagem.classList.remove('movimento');
                }, 1000);
            }



        }
        document.addEventListener('keydown', mover);
    </script>


</body>

</html>