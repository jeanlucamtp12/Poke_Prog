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

        <div class="vetor">
            <h5>Vetor de Falinks</h5><br>
            <div class="filhoVetor" img src="" id="9" background-color:white;>10</div>
            <div class="filhoVetor" img src="" id="8">8</div>
            <div class="filhoVetor" img src="" id="7">7</div>
            <div class="filhoVetor" img src="" id="6">6</div>
            <div class="filhoVetor" img src="" id="5">5</div>
            <div class="filhoVetor" img src="" id="4">4</div>
            <div class="filhoVetor" img src="" id="3">3</div>
            <div class="filhoVetor" img src="" id="2">2</div>
            <div class="filhoVetor" img src="" id="1">1</div>
            <div class="filhoVetor" img src="" id="0" width="20px">0</div>
        </div>



        <div>

            <script>
                let i = 0;

                const raio2 = document.querySelector('#raio2');
                const raio3 = document.querySelector('#raio3');
                const raio4 = document.querySelector('#raio4');
                const raio5 = document.querySelector('#raio5');
                const falinkQueda = document.querySelector('#falink');

                const falink = document.querySelector('#poke');

                const loop = setInterval(() => {


                    const falink = document.querySelector('#falink');
                    const posicoesFalinks = ["220", "520", "720", "1020"];
                    const posicaoVetor = Math.floor(Math.random() * posicoesFalinks.length);


                    falink.style.left = posicoesFalinks[posicaoVetor] + "px";




                }, 5000);

                const resetar = () => {
                    //raio2.style.bottom = 'none';

                    raio2.style.animation = "";
                    raio3.style.animation = "";
                    raio4.style.animation = "";
                    raio5.style.animation = "";
                    falinkQueda.style.animation = "";


                }

                const loop2 = setInterval(() => {


                    const posicaoRaio2 = window.getComputedStyle(raio2).top;
                    const posicaoRaio3 = window.getComputedStyle(raio3).top;
                    const posicaoRaio4 = window.getComputedStyle(raio4).top;
                    const posicaoRaio5 = window.getComputedStyle(raio5).top;
                    const posicaoFalinkQueda = window.getComputedStyle(falinkQueda).top;

                    const posicaoFalink = falink.offsetLeft;
                    const posicaoFalinkEsquerda = falink.offsetLeft;



                    console.log(posicaoFalink);

                    const removerPxRaio2 = posicaoRaio2.replace('px', '');
                    valorConvertidoRaio2 = parseInt(removerPxRaio2);
                    const removerPxRaio3 = posicaoRaio3.replace('px', '');
                    valorConvertidoRaio3 = parseInt(removerPxRaio3);
                    const removerPxRaio4 = posicaoRaio4.replace('px', '');
                    valorConvertidoRaio4 = parseInt(removerPxRaio4);
                    const removerPxRaio5 = posicaoRaio5.replace('px', '');
                    valorConvertidoRaio5 = parseInt(removerPxRaio5);







                    const removerPxFalinkQueda = posicaoFalinkQueda.replace('px', '');
                    valorConvertidoFalinkQueda = parseInt(removerPxFalinkQueda);
                    //console.log("Apos a conversao: "+ valorConvertidoFalinkQueda );



                    if (valorConvertidoRaio2 <= 40 && (posicaoFalink >= 600 && posicaoFalink <= 620)) {


                        raio2.style.animation = 'none';
                        raio3.style.animation = 'none';
                        raio4.style.animation = 'none';
                        raio5.style.animation = 'none';
                        falinkQueda.style.animation = 'none';
                        //window.alert("Bateu! Tente Novamente!");
                        resetar();
                        falink.style.left = '650px';
                        window.alert("Bateu! Tente Novamente!");

                    }

                    if (valorConvertidoRaio3 <= 50 && (posicaoFalink >= 370 && posicaoFalink <= 390)) {


                        raio2.style.animation = 'none';
                        raio3.style.animation = 'none';
                        raio4.style.animation = 'none';
                        raio5.style.animation = 'none';
                        falinkQueda.style.animation = 'none';
                        //window.alert("Bateu! Tente Novamente!");
                        resetar();
                        falink.style.left = '650px';
                        window.alert("Bateu! Tente Novamente!");



                    }

                    if (valorConvertidoRaio4 <= 50 && (posicaoFalink >= 890 && posicaoFalink <= 910)) {


                        raio2.style.animation = 'none';
                        raio3.style.animation = 'none';
                        raio4.style.animation = 'none';
                        raio5.style.animation = 'none';
                        falinkQueda.style.animation = 'none';
                        //window.alert("Bateu! Tente Novamente!");
                        resetar();
                        falink.style.left = '650px';
                        window.alert("Bateu! Tente Novamente!");


                    }

                    if (valorConvertidoRaio5 <= 50 && (posicaoFalink >= 1190 && posicaoFalink <= 1210)) {

                        raio2.style.animation = 'none';
                        raio3.style.animation = 'none';
                        raio4.style.animation = 'none';
                        raio5.style.animation = 'none';
                        falinkQueda.style.animation = 'none';
                        //window.alert("Bateu! Tente Novamente!");
                        resetar();
                        falink.style.left = '650px';
                        window.alert("Bateu! Tente Novamente!");



                    }

                    if (valorConvertidoRaio5 <= 50 && (posicaoFalink >= 1190 && posicaoFalink <= 1210)) {

                        raio2.style.animation = 'none';
                        raio3.style.animation = 'none';
                        raio4.style.animation = 'none';
                        raio5.style.animation = 'none';
                        falinkQueda.style.animation = 'none';
                        //window.alert("Bateu! Tente Novamente!");
                        resetar();
                        falink.style.left = '650px';
                        window.alert("Bateu! Tente Novamente!");



                    }

























                    












                    if (valorConvertidoFalinkQueda <= 50 && (posicaoFalink >= 190 && posicaoFalink <= 210)  || valorConvertidoFalinkQueda <= 51 && (posicaoFalink >= 990 && posicaoFalink <= 1010) || valorConvertidoFalinkQueda <= 52 && (posicaoFalink >= 490 && posicaoFalink <= 510) || valorConvertidoFalinkQueda <= 53 && (posicaoFalink >= 690 && posicaoFalink <= 700) ) {

                        
                          // console.log("Ele descendo " + posicaoFalinkQueda);

                          falink.style.left = '650px';
                          document.getElementById(i).innerHTML = "<img src='../img/arrays/falink.gif'>";
                          //window.alert("Falink! Tente Novamente!");

                          //console.log("O valor de i :" + i + "posicao: " + posicaoFalink);

                          i = i + 1;


                      }




                }, 10);









































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