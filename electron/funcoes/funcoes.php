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

    <link rel="stylesheet" href="../css/funcoes.css">


    <title>Document</title>
</head>

<body>

    <div class="tela">



        <div class="rotomNormal">
            <h6>Escolha o Rotom que deseja criar</h6>
            <img id="rotom" class="rotomNormal" src="../img/funcoes/rotom.png"></img>
        </div>

        <div class="caixaRotom">

            <img id="cortador" class="rotom" src="../img/funcoes/cortador.png" onclick="iniciarCriacao('cortador')"></img>
            <img id="forno" class="rotom" src="../img/funcoes/forno.png" onclick="iniciarCriacao('forno')"></img>
            <img id="lavadeira" class="rotom" src="../img/funcoes/lavadeira.png" onclick="iniciarCriacao('lavadeira')"></img>
            <img id="ventilador" class="rotom" src="../img/funcoes/ventilador.png" onclick="iniciarCriacao('ventilador')"></img>
            <img id="geladeira" class="rotom" src="../img/funcoes/geladeira.png" onclick="iniciarCriacao('geladeira')"></img>

        </div><br></br>



        <div class="caixaItens" id="caixaItens" draggable="true" style="display: none; ">
            <h6>Itens de Entrada</h6>

            <img id="servico-eletrico" class="item" draggable="true" ondragstart="itemSelecionado(event)" src="../img/funcoes/itens/servico-eletrico.png"></img>

            <img id="agua1" class="item" draggable="true" ondragstart="itemSelecionado(event)" src="../img/funcoes/itens/agua1.png"></img>
            <img id="frio2" class="item" draggable="true" ondragstart="itemSelecionado(event)" src="../img/funcoes/itens/frio2.png"></img>
            <img id="forno1" class="item" draggable="true" ondragstart="itemSelecionado(event)" src="../img/funcoes/itens/forno1.png"></img>

            <img id="grama3" class="item" draggable="true" ondragstart="itemSelecionado(event)" src="../img/funcoes/itens/grama3.png"></img>
            <img id="forno2" class="item" draggable="true" ondragstart="itemSelecionado(event)" src="../img/funcoes/itens/forno2.png"></img>
            <img id="frio3" class="item" draggable="true" ondragstart="itemSelecionado(event)" src="../img/funcoes/itens/frio3.png"></img>

            <img id="vento1" class="item" draggable="true" ondragstart="itemSelecionado(event)" src="../img/funcoes/itens/vento1.png"></img>
            <img id="agua2" class="item" draggable="true" ondragstart="itemSelecionado(event)" src="../img/funcoes/itens/agua2.png"></img>
            <img id="frio1" class="item" draggable="true" ondragstart="itemSelecionado(event)" src="../img/funcoes/itens/frio1.png"></img>

            <img id="vento2" class="item" draggable="true" ondragstart="itemSelecionado(event)" src="../img/funcoes/itens/vento2.png"></img>
            <img id="grama2" class="item" draggable="true" ondragstart="itemSelecionado(event)" src="../img/funcoes/itens/grama2.png"></img>
            <img id="agua3" class="item" draggable="true" ondragstart="itemSelecionado(event)" src="../img/funcoes/itens/agua3.png"></img>

            <img id="grama1" class="item" draggable="true" ondragstart="itemSelecionado(event)" src="../img/funcoes/itens/grama1.png"></img>
            <img id="vento3" class="item" draggable="true" ondragstart="itemSelecionado(event)" src="../img/funcoes/itens/vento3.png"></img>
            <img id="forno3" class="item" draggable="true" ondragstart="itemSelecionado(event)" src="../img/funcoes/itens/forno3.png"></img>

        </div><br></br>

  
        <div class="caixaSelecionados" id="caixaSelecionados" style="display: none; ">
            <div id="slot1" class="filhoCaixaS"></div>
            <div id="slot2" class="filhoCaixaS"></div>
            <div id="slot3" class="filhoCaixaS"></div>
            <div id="slot4" class="filhoCaixaS"></div>
        </div> <br></br>

        <div class="botao">
          
        </div>

        <div class="caixaResposta" id="caixaResposta" ondragover="areaSoltar(event)" ondrop="soltarElemento(event)" style="display: none; ">
            <img src="../img/funcoes/espiral.gif"></img>
        </div>


    </div>


    <script>
        var i = 1;
        var tipoR = "";
        var lista = [];

        const itemSelecionado = (event) => {
            event.dataTransfer.setData("img", event.target.id);
        }

        const areaSoltar = (event) => {
            event.preventDefault();


        }

        const soltarElemento = (event) => {
            event.preventDefault();

            var imagem = event.dataTransfer.getData("img");
            var slot = "slot" + i;
            document.getElementById(slot).innerHTML = "<img src='../img/funcoes/itens/" + imagem + ".png'>";
            i = i + 1;

            lista.push(imagem);

            if (i == 5) {
                verificaDados();
            }

        }


        const iniciarCriacao = (tipoRotom) => {
            var rotoms = document.querySelectorAll(".rotom");
            tipoR = tipoRotom;

            for (var i = 0; i < rotoms.length; i++) {
                if (rotoms[i].id != tipoRotom) {
                    console.log(rotoms[i].id);
                    rotoms[i].style.display = "none";

                }
            }


            document.getElementById("caixaItens").style.display = "block";
            document.getElementById("caixaSelecionados").style.display = "block";
            document.getElementById("caixaResposta").style.display = "block";
        }


        const resetarTela = (tipoR) => {
            if (tipoR == "x") {
                document.getElementById("caixaResposta").innerHTML = "<img src='../img/funcoes/x.png'>";
            } else {
                document.getElementById("caixaResposta").innerHTML = "<img src='../img/funcoes/" + tipoR + ".png'>";

            }

            var continuar = document.createElement('button');
          
            continuar.style.width = '10%';
            continuar.style.left = "46.5%";
            continuar.style.color = '#f00';
            continuar.style.background = 'white';
            continuar.style.position = "absolute";

            var texto = document.createTextNode("Continuar!");
            continuar.appendChild(texto);
            continuar.onclick = function() {
                window.location.reload(true);
            }
            document.body.appendChild(continuar);



        }

        const verificaLista = (tiporR) => {
            var grama = 0;
            var forno = 0;
            var frio = 0;
            var vento = 0;
            var agua = 0;

            switch (tipoR) {

                case 'cortador':

                    for (var i = 0; i < lista.length; i++) {
                        if (lista[i] == "grama1" || lista[i] == "grama2" || lista[i] == "grama3" || lista[i] == "servico-eletrico") {
                            grama = grama + 1;
                        }
                    }
                    if (grama == 4) {
                        resetarTela(tipoR);
                    } else {
                        resetarTela("x");

                    }
                    break;

                case 'forno':
                    for (var i = 0; i < lista.length; i++) {
                        if (lista[i] == "forno1" || lista[i] == "forno2" || lista[i] == "forno3" || lista[i] == "servico-eletrico") {
                            forno = forno + 1;
                        }
                    }
                    if (forno == 4) {
                        resetarTela(tipoR);

                    } else {
                        resetarTela("x");

                    }
                    break;
                case 'ventilador':
                    for (var i = 0; i < lista.length; i++) {
                        if (lista[i] == "vento1" || lista[i] == "vento2" || lista[i] == "vento3" || lista[i] == "servico-eletrico") {
                            vento = vento + 1;
                        }
                    }
                    if (vento == 4) {
                        resetarTela(tipoR);

                    } else {
                        resetarTela("x");

                    }
                    break;
                case 'geladeira':
                    for (var i = 0; i < lista.length; i++) {
                        if (lista[i] == "frio1" || lista[i] == "frio2" || lista[i] == "frio3" || lista[i] == "servico-eletrico") {
                            frio = frio + 1;
                        }
                    }
                    if (frio == 4) {
                        resetarTela(tipoR);

                    } else {
                        resetarTela("x");

                    }
                    break;
                case 'lavadeira':
                    for (var i = 0; i < lista.length; i++) {
                        if (lista[i] == "agua1" || lista[i] == "agua2" || lista[i] == "agua3" || lista[i] == "servico-eletrico") {
                            agua = agua + 1;
                        }
                    }
                    if (agua == 4) {
                        resetarTela(tipoR);

                    } else {
                        resetarTela("x");

                    }
                    break;

            }

        }

        const verificaDados = () => {


            var rotoms = document.querySelectorAll(".rotom");

            for (var i = 0; i < rotoms.length; i++) {

                if (rotoms[i].id == tipoR) {
                    verificaLista(tipoR);
                }
            }
        }
    </script>
</body>

</html>