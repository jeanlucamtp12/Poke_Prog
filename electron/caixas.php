<script>
    var palavra = '';
    var i = 1;
    var lista = [];


    const itemSelecionado = (event) => {
        event.dataTransfer.setData("img", event.target.id.replace('U', ''));

    }

    const areaSoltar = (event) => {
        event.preventDefault();


    }

    const soltarElemento = (event) => {
        event.preventDefault();

        var imagem = event.dataTransfer.getData("img");
        var slot = "slot" + i;

        document.getElementById(slot).innerHTML = "<img src='./img/unowns/" + imagem + ".gif'>";

        i = i + 1;

        palavra = palavra + imagem;

        console.log("A palavra e ", imagem);

        lista.push(imagem);



    }

    const limparUnowns = (i) =>{

        for (j = 1; j < i; j++){
              document.getElementById("slot" + j).style.display='none';
        }
        i = 1;
    }

    const verificaTipo = () => {



        var tipoCaixa = document.getElementById("alterar").innerText;
        var limparTela = document.getElementsByClassName("caixaLetras");
        //console.log("Antes" + palavra);

        //var limparTela = document.querySelectorAll("#aU, #bU, #iU, #nU, #tU").remove();


        // console.log("aaaa" + tipoCaixa);

        switch (palavra) {

            case 'int':
                if (tipoCaixa.includes("Numero")) {

                    window.alert("Resposta Certa. Vamos ao proximo!");



                    
                    limparUnowns(i);
                  


                    document.getElementById('alterar').innerHTML = 'Nome = "Ana"';
                    palavra = '';
                 
                    if (tipoCaixa.includes("Numero = 222")) {
                        window.alert("Você concluiu a fase! Voltando ao Mapa da Cidade");
                        window.history.go(-2);
                    }
                } else {
                    window.alert("Resposta Errada");
                    palavra = '';
                    limparUnowns(i);
                }
                break;

            case 'string':
                if (tipoCaixa.includes("Nome")) {
                    conteudo = "Acertouuu";
                    window.alert("Resposta Certa. Vamos ao proximo!");
                    document.getElementById('alterar').innerHTML = 'Numero = 2,22';
                    palavra = '';
                    limparUnowns(i);
                } else {
                    window.alert("Resposta Errada");
                    palavra = '';
                    limparUnowns(i);

                }
                break;

            case 'booleano':
                if (tipoCaixa.includes("Dado")) {
                    conteudo = "Acertouuu";
                    window.alert("Resposta Certa. Vamos ao proximo!");
                    document.getElementById('alterar').innerHTML = 'Numero = 222';
                    palavra = '';
                    limparUnowns(i);
                } else {
                    window.alert("Resposta Errada");
                    palavra = '';
                    limparUnowns(i);

                }
                break;

            case 'float':
                if (tipoCaixa.includes("Numero")) {
                    conteudo = "Acertouuu";
                    window.alert("Resposta Certa. Vamos ao proximo!");
                    document.getElementById('alterar').innerHTML = 'Dado = Falso';
                    palavra = '';
                    limparUnowns(i);
                } else {
                    window.alert("Resposta Errada");
                    palavra = '';
                    limparUnowns(i);

                }
                break;

            default:
                console.log("eroooou");
                window.alert("Resposta Errada");
                palavra = '';
                limparUnowns(i);
                //window.location.reload(false);
                //document.querySelectorAll("#a, #b, #c, #d, #e, #f, #g, #h, #i,#h, #k, #l, #m, #n, #o, #p, #q, #r, #s, #t,#u, #v, #w, #x, #y, #z,  #n").forEach(e => e.remove());


        }
    }


    const mapearUnowm = (unowm) => {

        const cont = document.querySelectorAll("#aU, #bU, #cU, #dU, #eU, #fU, #gU, #hU ,#iU,#jU, #kU , #lU, #mU , #nU , #oU , #pU, #qU, #rU, #sU,  #tU, #uU, #vU, #wU, #xU, #yU, #zU, #áU, #éU");


        for (var i = 0; i < cont.length; i++) {

            if (cont[i].id == unowm) {


                var remove_string = cont[i].id.replace('U', '');

                //id.push(remove_string);s


                palavra = palavra + remove_string;
                console.log(palavra);

                //console.log(palavra);

                /*if (palavra == "A") {
                    remove_string = 'ó';


                }
                if (palavra == "E") {
                    remove_string = 'ú';
                }*/

                //var final = caminho_imagem.toString();
                //var caminho_imagem = './img/unowns/' + remove_string + '.gif';

                const repeticaoLetra = document.getElementById(remove_string);




                console.log("Valor:" + repeticaoLetra);


                repeticaoLetra.insertAdjacentHTML('afterend', remove_string)


                //console.console(caminho_imagem);




            }

        }


    }

    const exibeAjuda = () => {
        document.querySelector("#ajuda").style.display = "block"; // ou "block"
    }
</script>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Caixas</title>
    <link rel="stylesheet" href="./css/unowmsFase.css">

</head>

<body>

    <img id="j" src="./img/unowns/j.gif">
    <img id="h" src="./img/unowns/h.gif">
    <img id="e" src="./img/unowns/e.gif">

    <div class="tamanhoTela">

        <div class="titulo">
            <h1>Informe o tipo de variavel dentro da caixa</h1>
        </div>

        <div class="caixaConteudo">
            <h2 id="alterar">Numero = 10</h2>
            <img src="./img/fases unowms/caixa.png" width="130px">
        </div>


        <div class="caixas">

            <div class="filhoTela">
                <div class="teclado">

                    <h1>Teclado Unowm</h1>
                    <div class="caixaTeclado">
                        <h6>A</h6>
                        <img class="circles" id="aU" src="./img/unowns/a.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>B</h6>
                        <img class="circles" id="bU" src="./img/unowns/b.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>C</h6>
                        <img class="circles" id="cU" src="./img/unowns/c.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>D</h6>
                        <img class="circles" id="dU" src="./img/unowns/d.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>E</h6>
                        <img class="circles" id="eU" src="./img/unowns/e.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>F</h6>
                        <img class="circles" id="fU" src="./img/unowns/f.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>G</h6>
                        <img class="circles" id="gU" src="./img/unowns/g.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>H</h6>
                        <img class="circles" id="hU" src="./img/unowns/h.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>I</h6>
                        <img class="circles" id="iU" src="./img/unowns/i.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>J</h6>
                        <img class="circles" id="jU" src="./img/unowns/j.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>K</h6>
                        <img class="circles" id="kU" src="./img/unowns/k.gif" ondragstart="itemSelecionado(event)">
                    </div>

                    <div class="caixaTeclado">
                        <h6>L</h6>
                        <img class="circles" id="lU" src="./img/unowns/l.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>M</h6>
                        <img class="circles" id="mU" src="./img/unowns/m.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>N</h6>
                        <img class="circles" id="nU" src="./img/unowns/n.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>O</h6>
                        <img class="circles" id="oU" src="./img/unowns/o.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>P</h6>
                        <img class="circles" id="pU" src="./img/unowns/p.gif" ondragstart="itemSelecionado(event)">
                    </div>

                    <div class="caixaTeclado">
                        <h6>Q</h6>
                        <img class="circles" id="qU" src="./img/unowns/q.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>R</h6>
                        <img class="circles" id="rU" src="./img/unowns/r.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>S</h6>
                        <img class="circles" id="sU" src="./img/unowns/s.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>T</h6>
                        <img class="circles" id="tU" src="./img/unowns/t.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>U</h6>
                        <img class="circles" id="uU" src="./img/unowns/u.gif" ondragstart="itemSelecionado(event)">
                    </div>

                    <div class="caixaTeclado">
                        <h6>V</h6>
                        <img class="circles" id="vU" src="./img/unowns/v.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>W</h6>
                        <img class="circles" id="wU" src="./img/unowns/w.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>X</h6>
                        <img class="circles" id="xU" src="./img/unowns/x.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>Y</h6>
                        <img class="circles" id="yU" src="./img/unowns/y.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>Z</h6>
                        <img class="circles" id="zU" src="./img/unowns/z.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>?</h6>
                        <img class="circles" id="áU" src="./img/unowns/á.gif" ondragstart="itemSelecionado(event)">
                    </div>
                    <div class="caixaTeclado">
                        <h6>!</h6>
                        <img class="circles" id="éU" src="./img/unowns/é.gif" ondragstart="itemSelecionado(event)">

                    </div>
                </div>
            </div>
            <div class="filhoTela">
                <div class="inicial">
                    <h2>Ajuda</h2>
                    <img src="./img/bonus/1.png" width="190px" alt="Ajuda" title="Ajuda" onclick="exibeAjuda()" style="cursor:pointer">
                    <h2 id="ajuda" style="display:none">Int = Números Inteiros <br>Float = Números Com Virgula <br>String = Palavras E Letras<br>Booleano = Verdadeiro Ou Falso </h2>

                </div>


            </div>

            <div class="caixaResposta" id="caixaResposta" ondragover="areaSoltar(event)" ondrop="soltarElemento(event)">

                <div id="slot1" class="filhoCaixaS"></div>
                <div id="slot2" class="filhoCaixaS"></div>
                <div id="slot3" class="filhoCaixaS"></div>
                <div id="slot4" class="filhoCaixaS"></div>
                <div id="slot5" class="filhoCaixaS"></div>
                <div id="slot6" class="filhoCaixaS"></div>
                <div id="slot7" class="filhoCaixaS"></div>
                <div id="slot8" class="filhoCaixaS"></div>
                <div id="slot9" class="filhoCaixaS"></div>
                <div id="slot10" class="filhoCaixaS"></div>
                <div id="slot11" class="filhoCaixaS"></div>
                <div id="slot12" class="filhoCaixaS"></div>
                <div id="slot13" class="filhoCaixaS"></div>
                <div id="slot14" class="filhoCaixaS"></div>
                <div id="slot15" class="filhoCaixaS"></div>
                <div id="slot16" class="filhoCaixaS"></div>
                <div id="slot17" class="filhoCaixaS"></div>
                <div id="slot18" class="filhoCaixaS"></div>
                <div id="slot19" class="filhoCaixaS"></div>
                <div id="slot20" class="filhoCaixaS"></div>
                <div id="slot21" class="filhoCaixaS"></div>
                <div id="slot22" class="filhoCaixaS"></div>
                <div id="slot23" class="filhoCaixaS"></div>
                <div id="slot24" class="filhoCaixaS"></div>
                <div id="slot25" class="filhoCaixaS"></div>
                <div id="slot26" class="filhoCaixaS"></div>
                <div id="slot27" class="filhoCaixaS"></div>
                <div id="slot28" class="filhoCaixaS"></div>
                <div id="slot29" class="filhoCaixaS"></div>
                <div id="slot30" class="filhoCaixaS"></div>
                <div id="slot31" class="filhoCaixaS"></div>
                <div id="slot32" class="filhoCaixaS"></div>
                <div id="slot33" class="filhoCaixaS"></div>
                <div id="slot34" class="filhoCaixaS"></div>
                <div id="slot35" class="filhoCaixaS"></div>
                <div id="slot36" class="filhoCaixaS"></div>
                <div id="slot37" class="filhoCaixaS"></div>

                <button id="botaoResposta" onclick="verificaTipo()">Enviar</button>
            </div>




        </div>
    </div>





    </div>




    </div>

</body>

</html>