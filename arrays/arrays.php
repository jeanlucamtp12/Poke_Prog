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

    <link rel="stylesheet" href="../css/arrays.css">


    <title>Document</title>
</head>

<body>

    <div class="jogobonus">




        <img id="piso" src="../img/arrays/piso.png">

        <img id="falink" src="../img/arrays/falink.gif">
        <img id="raio2" src="../img/arrays/raio.gif">
        <img id="raio3" src="../img/arrays/raio.gif">
        <img id="raio4" src="../img/arrays/raio.gif">
        <img id="raio5" src="../img/arrays/raio.gif">



        <img class='poke' id="poke" src="../img/arrays/falink.gif">

        <img id="nuvens" src="../img/bonus/clouds.png">

        <img id="pikachu" src="../img/arrays/pikachu.gif">



        <div>





            <script>
                const loop = setInterval(() => {

                const falink = document.querySelector('#falink');
                const poaicoesFalinks = ["220", "520", "720", "1020"];
                const posicaoVetor = Math.floor(Math.random() * poaicoesFalinks.length);


                 console.log(posicaoVetor);
                 falink.style.left = poaicoesFalinks[posicaoVetor]+"px";


                    
                }, 5000);



                const personagem = document.querySelector('.poke');

                const moverDireita = () => {

                    const el = document.querySelector('.poke');
                    const value = getComputedStyle(el).getPropertyValue('left');


                    var remove_string = value.replace('px', '');
                    var valorNum = parseInt(remove_string);

                    var numPx = valorNum + 10;
                    var soma = parseInt(value) + 10;

                    personagem.style.left = soma + "px";



                }

                const moverEsquerda = () => {

                    const el = document.querySelector('.poke');
                    const value = getComputedStyle(el).getPropertyValue('left');


                    var remove_string = value.replace('px', '');
                    var valorNum = parseInt(remove_string);

                    var numPx = valorNum + 10;
                    var soma = parseInt(value) - 10;

                    personagem.style.left = soma + "px";

                }

                const mover = () => {

                    var tecla = event.keyCode;

                    console.log(tecla);

                    if (tecla == 39) {
                        moverDireita();
                    }

                    if (tecla == 37) {
                        moverEsquerda();
                    }

                }

                document.addEventListener('keydown', mover);
            </script>



</body>

</html>