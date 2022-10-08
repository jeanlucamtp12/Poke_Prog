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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/excecoes.css">


    <title>Document</title>
</head>

<body>

    <div class="cidade">





        <div>
            <img class="arvoreMorta" src="../img/excecoes/arvoreMorta.png"></img>
            <img class="arvoreMorta" src="../img/excecoes/arvoreMorta2.png" style="right: 700px;"></img>


        </div>

        <div>
            <img class="cruz" src="../img/excecoes/cruz.png" style="left: 100px;"></img>
            <img class="cruz" src="../img/excecoes/cruz.png"></img>


        </div>

        <div>
            <img class="nuvens" src="../img/excecoes/nuvens.png"></img>

        </div>

        <div>
            <img class="arvore" src="../img/excecoes/arvore.png"></img>

        </div>

        <div>
            <img class="arvore2" src="../img/excecoes/arvore2.png"></img>

        </div>

        <div>
            <img class="mato um" src="../img/excecoes/mato.png"></img>

        </div>
        <div>
            <img class="mato dois" src="../img/excecoes/mato2.png"></img>

        </div>

        <div class="teia">
            <img class="spinarak" src="../img/excecoes/spinarak.png"></img>

        </div>

        <div class="mastro">
            <img class="cacturne" src="../img/excecoes/cacturne.png"></img>

        </div>

        <div class="zubats">
            <img class="zubat primeiro" src="../img/excecoes/zubat.png"></img>
            <img class="zubat segundo" src="../img/excecoes/zubat.png"></img>
            <img class="zubat terceiro" src="../img/excecoes/zubat.png"></img>
            <img class="zubat quarto" src="../img/excecoes/zubat.png"></img>


        </div>

        <div class="cemiterio">
            <img class="tumulo" src="../img/excecoes/tumulo.png"></img>
            <img class="tumulo" src="../img/excecoes/tumulo.png" style="right: 300px;"></img>
            <img class="tumulo" src="../img/excecoes/tumulo.png" style="right: 400px;"></img>
            <img class="tumulo" src="../img/excecoes/tumulo.png" style="right: 500px;"></img>


        </div>


        <div>
            <img class="rastelo" src="../img/excecoes/rastelo.png"></img>

        </div>















        <div>
            <img class="grama" src="../img/excecoes/grama.png"></img>
            <img class="grama" src="../img/excecoes/grama.png" style="left:0px;"></img>

        </div>



        <div>
            <img class="estrela " src="../img/excecoes/estrela.png"></img>
            <img class="estrela " src="../img/excecoes/estrela.png" style="left: 1150px; top: 150px;"></img>
            <img class="estrela " src="../img/excecoes/estrela.png" style="left: 950px; top: 250px;"></img>
            <img class="estrela " src="../img/excecoes/estrela.png" style="left: 850px; top: 200px;"></img>
            <img class="estrela " src="../img/excecoes/estrela.png" style="left: 750px; top: 350px;"></img>
            <img class="estrela " src="../img/excecoes/estrela.png" style="left: 650px; top: 150px;"></img>
            <img class="estrela " src="../img/excecoes/estrela.png" style="left: 1550px; top: 200px;"></img>
            <img class="estrela " src="../img/excecoes/estrela.png" style="left: 1250px; top: 450px;"></img>
            <img class="estrela " src="../img/excecoes/estrela.png" style="left: 1150px; top: 150px;"></img>
            <img class="estrela " src="../img/excecoes/estrela.png" style="left: 950px; top: 390px;"></img>
            <img class="estrela " src="../img/excecoes/estrela.png" style="left: 850px; top: 200px;"></img>
        </div>










        <div>
            <img class="pokebola" src="../img/excecoes/pokeball.gif"></img>

        </div>

        <div>
            <img id="gasly1" class="gasly gasly1" src="../img/excecoes/fantasmas/gasly.png" style="right: 200px; display: block; opacity:1;" onclick="resposta('0')"></img>
            <img id="gasly2" class=" gasly gasly2" src="../img/excecoes/fantasmas/gasly_shiny.png" style="right: 100px;  bottom: 50px; display: block; opacity:1;" onclick="resposta('1')"></img>
            <img id="gasly3" class="gasly gasly3" src="../img/excecoes/fantasmas/gasly.png" style="right: 950px;  bottom: 50px; display: block; opacity:1;" onclick="resposta('0')"></img>
            <img id="gasly4" class="gasly gasly4" src="../img/excecoes/fantasmas/gasly.png" style=" display: block; opacity:1;" onclick="resposta('0')"></img>

        </div>








        <div>
            <img id="banette1" class="banette banette1" src="../img/excecoes/fantasmas/banette.png" style="display: none; " onclick="resposta('0')"></img>
            <img id="banette2" class="banette banette2" src="../img/excecoes/fantasmas/banette_shiny.png" style="display: none; " onclick="resposta('1')"></img>
            <img id="banette3" class="banette banette3" src="../img/excecoes/fantasmas/banette.png" style="display: none; " onclick="resposta('0')"></img>
            <img id="banette4" class="banette banette4" src="../img/excecoes/fantasmas/banette.png" style=" display: none; " onclick="resposta('0')"></img>

        </div>


        <div>
            <img id="litwick1" class="litwick litwick1" src="../img/excecoes/fantasmas/litwick.png" style="display: none;" onclick="resposta('0')"></img>
            <img id="litwick2" class="litwick litwick2" src="../img/excecoes/fantasmas/litwick_shiny.png" style="display: none; " onclick="resposta('1')"></img>
            <img id="litwick3" class="litwick litwick3" src="../img/excecoes/fantasmas/litwick.png" style="display: none; " onclick="resposta('0')"></img>
            <img id="litwick4" class="litwick litwick4" src="../img/excecoes/fantasmas/litwick.png" style=" display: none; " onclick="resposta('0')"></img>

        </div>

        <div>
            <img id="frillish1" class="frillish frillish1" src="../img/excecoes/fantasmas/frillish.png" style="display: none;" onclick="resposta('0')"></img>
            <img id="frillish2" class="frillish frillish2" src="../img/excecoes/fantasmas/frillish_shiny.png" style="display:none" onclick="resposta('1')"></img>
            <img id="frillish3" class="frillish frillish3" src="../img/excecoes/fantasmas/frillish.png" style="display: none; " onclick="resposta('0')"></img>
            <img id="frillish4" class="frillish frillish4" src="../img/excecoes/fantasmas/frillish.png" style=" display: none;" onclick="resposta('0')"></img>

        </div>


        <div>
            <img id="shedinja1" class="shedinja shedinja1" src="../img/excecoes/fantasmas/shedinja.png" style="display: none;" onclick="resposta('0')"></img>
            <img id="shedinja2" class="shedinja shedinja2" src="../img/excecoes/fantasmas/shedinja_shiny.png" style="display: none; " onclick="resposta('1')"></img>
            <img id="shedinja3" class="shedinja shedinja3" src="../img/excecoes/fantasmas/shedinja.png" style="display: none; " onclick="resposta('0')"></img>
            <img id="shedinja4" class="shedinja shedinja4" src="../img/excecoes/fantasmas/shedinja.png" style=" display: none; " onclick="resposta('0')"></img>

        </div>


        <div class="caixaObjetivos">

            <h6>Capturados:</h6>
            <div class="caixas">
                <img src="../img/excecoes/fantasmas/gasly_shiny.png"></img>
            </div>
            <div class="caixas">
                <img src="../img/excecoes/fantasmas/banette_shiny.png"></img>
            </div>
            <div class="caixas">
                <img src="../img/excecoes/fantasmas/litwick_shiny.png"></img>
            </div>
            <div class="caixas">
                <img src="../img/excecoes/fantasmas/frillish_shiny.png"></img>
            </div>
            <div class="caixas">
                <img src="../img/excecoes/fantasmas/shedinja_shiny.png"></img>
            </div>




        </div>




    </div>



    <script>
        var cont = 1;
        const gasly = document.querySelectorAll(".gasly");
        const banette = document.querySelectorAll(".banette");
        const frillish = document.querySelectorAll(".frillish");
        const shedinja = document.querySelectorAll(".shedinja");
        const litwick = document.querySelectorAll(".litwick");

        const resposta = (shiny) => {

            switch (cont) {

                case 1:
                    contabilizaSelecao(shiny, 1, gasly);
                    break;

                case 2:
                    contabilizaSelecao(shiny, 2, banette);
                    break;

                case 3:
                    contabilizaSelecao(shiny, 3, litwick);
                    break;

                case 4:
                    contabilizaSelecao(shiny, 4, frillish);
                    break;

                case 5:
                    contabilizaSelecao(shiny, 5, shedinja);
                    break;

                default:
                    break;
            }


        }

        const contabilizaSelecao = (shiny, nivel, pokemon) => {

            for (var i = 0; i < pokemon.length; i++) {

                if (shiny == 1) {
                    window.alert("Parabens capturou o certo");
                    cont = cont + 1;
                    limpaTela(pokemon);
                    exibeTela(cont);
                    return;
                } else {
                    window.alert("Falhoou");
                    return;

                }

            }
        }

        const limpaTela = (pokemon) => {

            for (var i = 0; i < pokemon.length; i++) {

                pokemon[i].style.display = "none";

            }
        }

        const exibeTela = (contador) => {

            for (var i = 0; i < 4; i++) {

                if (cont == 2) {
                    banette[i].style.display ="block";
                }
                if (cont == 3) {
                    litwick[i].style.display ="block";
                }
                if (cont == 4) {
                    frillish[i].style.display ="block";
                } 
                if (cont == 5)  {
                    shedinja[i].style.display ="block";
                }
               

            }
        }





        const loop = setInterval(() => {


            setTimeout(function() {

                const gasly1 = document.getElementById("gasly1");
                const gasly2 = document.getElementById("gasly2");
                const gasly3 = document.getElementById("gasly3");
                const gasly4 = document.getElementById("gasly4");


                if (gasly1.style.opacity == "1") {
                    gasly1.style.opacity = "0.2";
                    gasly2.style.opacity = "1";
                    gasly3.style.opacity = "0.2";
                    gasly4.style.opacity = "1";



                } else {
                    gasly1.style.opacity = "1";
                    gasly2.style.opacity = "0.2";
                    gasly3.style.opacity = "1";
                    gasly4.style.opacity = "0.2";





                }


            }, 50);



        }, 5000);
    </script>


</body>

</html>