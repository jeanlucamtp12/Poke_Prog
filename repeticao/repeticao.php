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

    <div class="repeticao">








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

        <img class="tela" id="tela" src="../img/repeticao/tela.png" style="display:none">
        <img class="piscarTela" id="piscarTela" src="../img/repeticao/tela.png" style="display:none">






        <div class="tronco"></div>





        <div class="for">

            <div class="caixas">
               <h6 >Possui</h6>

                <img src="../img/repeticao/favo.png" width="50px" align-items="center" align-items="center"> </img>
                <h6 id="inicializacao">0</h6>
            </div>
            <div class="caixas">
                <h6 >Chuva para quando obtiver:</h6>
                <img  src="../img/repeticao/favoCompleto.png" width="50px" align-items="center" align-items="center"> </img>
                <h6 id="favoCompleto">0 de 5 Favos</h6>


            </div>
            <div class="caixas">
                <h6 >Coletados</h6>
                <img src="../img/repeticao/favo.png" width="50px" align-items="center" align-items="center"> </img>
                <h6 id="incremento">0</h6>


            </div>



        </div>


    </div>











    <script>
        let i = 0;
        let favoCompleto = 0;


        var combeeShiny = document.querySelector('.combeeShiny');
        var favo = document.querySelector('.favo');
        var mime = document.querySelector('.mime');



        console.log("Mime: " + mime);
        console.log("Favo: " + favo);
        console.log("Combee: " + combeeShiny);



        //var numIncremento = document.getElementById("incremento").innerHTML;


        const loop = setInterval(() => {

            posicaoCombeeShiny = window.getComputedStyle(combeeShiny).bottom;
            posicaoMime = window.getComputedStyle(mime).bottom;
            console.log(window.getComputedStyle(mime).bottom);
            posicaoFavo = favo.offsetLeft;

            const removerPxCombee = posicaoCombeeShiny.replace('px', '');
            valorConvertidoCombee = parseInt(removerPxCombee);

            const removerPxMime = posicaoMime.replace('px', '');
            valorConvertidoMime = parseInt(removerPxMime);

            if ((posicaoFavo >= 110 && posicaoFavo <= 130) && valorConvertidoMime == 0) {

                 i = i + 1;

                document.getElementById("incremento").innerHTML = i;
                document.getElementById("inicializacao").innerHTML = i;

                if(i == 5 || i == 10 || i == 15 || i == 20 || i == 25 || i == 30 ){
                    favoCompleto = favoCompleto + 1;
                    
                    document.getElementById("favoCompleto").innerHTML = favoCompleto + " de 5 Favos";
                    document.getElementById("piscarTela").style.display = "block";

                    setTimeout(function (){
                        document.getElementById("piscarTela").style.display = "none";

                    }, 4000);




                }


                




            }






        }, 150);

        const incrementar = () => {
            i = i + 1;

        }










        /*



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

                   */


        const personagem = document.querySelector('.mime');

        const mover = () => {

            var tecla = event.keyCode;


            /*  if (tecla == 39) {
                  moverDireita();
              } else if (tecla == 37) {
                  moverEsquerda();
              } else {*/
            personagem.classList.add('movimento');


            setTimeout(function() {
                personagem.classList.remove('movimento');
            }, 1000);
        }



        //  }
        document.addEventListener('keydown', mover);
    </script>


</body>

</html>