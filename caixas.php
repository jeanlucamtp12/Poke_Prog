<script>
    var palavra = '';
 

    const verificaTipo = () => {

        var tipoCaixa = document.getElementById("alterar").innerText;

        //var limparTela = document.querySelectorAll("#aU, #bU, #iU, #nU, #tU").remove();
       

        // console.log("aaaa" + tipoCaixa);

        switch (palavra) {

            case 'int':
                if (tipoCaixa.includes("Numero")) {
                    conteudo = "Acertouuu";
                    window.alert("Resposta Certa. Vamos ao proximo!");
                    document.getElementById('alterar').innerHTML = 'Nome = "Ana"';
                    palavra = '';
                    document.querySelectorAll("#i, #t, #n").forEach(e => e.remove());
                }
                break;
            case 'string':
                if (tipoCaixa.includes("Nome")) {
                    conteudo = "Acertouuu";
                    window.alert("Resposta Certa. Vamos ao proximo!");
                    document.getElementById('alterar').innerHTML = 'Numero = 2,22';
                    palavra = '';
                }
            case 'booleano':
                if (tipoCaixa.includes("Dado")) {
                    conteudo = "Acertouuu";
                    window.alert("Resposta Certa. Vamos ao proximo!");
                    document.getElementById('alterar').innerHTML = 'Numero = 222';
                    palavra = '';
                }
            case 'float':
                if (tipoCaixa.includes("Numero")) {
                    conteudo = "Acertouuu";
                    window.alert("Resposta Certa. Vamos ao proximo!");
                    document.getElementById('alterar').innerHTML = 'Dado = Falso';
                    palavra = '';
                }
            default:
                console.log("eroooou");
                window.alert("Resposta Errada");
                palavra = '';

        }
    }


    const mapearUnowm = (unowm) => {

        var cont = document.querySelectorAll("#aU, #bU,#cU, #dU, #eU, #fU, #gU, #hU ,#iU,#jU, #kU, #lU, #mU, #nU,#oU, #pU, #qU, #rU, #sU,  #tU, #uU, #vU, #wU, #xU, #yU, #zU,#inU, #exU");

        for (var i = 0; i < cont.length; i++) {

            if (cont[i].id == unowm) {
                console.log(cont[i]);

                var remove_string = cont[i].id.replace('U', '');

                palavra = palavra + remove_string;
                console.log(palavra);

                if(palavra == "ex")
                {
                    remove_string = '1';


                }if(palavra =="in"){
                    remove_string = '2';
                }
                   
                var caminho_imagem = './img/unowns/' + remove_string + '.gif';

                document.getElementById(remove_string).innerHTML = "<img src=" + caminho_imagem + ">";
                
                
                
            }

        }


    }
</script>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Document</title>
    <link rel="stylesheet" href="./css/unowmsFase.css">

</head>

<body>

    <h1>Informe o tipo de variavel dentro da caixa</h1>







    <section class="caixa">
        <div class="texto">

            <h2 id="alterar">Numero = 12</h2>
        </div>
        <img src="./img/fases unowms/caixa.png">


    </section>









    <div class="teclado">
        <h1>Teclado Unowm</h1>
        <img class="circles" id="aU" src="./img/unowns/a.gif" onclick="mapearUnowm('aU')" ;>
        <img class="circles" id="bU" src="./img/unowns/b.gif" onclick="mapearUnowm('bU')" ;>
        <img class="circles" id="cU" src="./img/unowns/c.gif" onclick="mapearUnowm('cU')" ;>
        <img class="circles" id="dU" src="./img/unowns/d.gif" onclick="mapearUnowm('dU')" ;>
        <img class="circles" id="eU" src="./img/unowns/e.gif" onclick="mapearUnowm('eU')" ;> <br>
        <img class="circles" id="fU" src="./img/unowns/f.gif" onclick="mapearUnowm('fU')" ;>
        <img class="circles" id="gU" src="./img/unowns/g.gif" onclick="mapearUnowm('gU')" ;>
        <img class="circles" id="hU" src="./img/unowns/h.gif" onclick="mapearUnowm('hU')" ;>
        <img class="circles" id="iU" src="./img/unowns/i.gif" onclick="mapearUnowm('iU')" ;>
        <img class="circles" id="jU" src="./img/unowns/j.gif" onclick="mapearUnowm('jU')" ;> <br>
        <img class="circles" id="kU" src="./img/unowns/k.gif" onclick="mapearUnowm('kU')" ;>

        <img class="circles" id="lU" src="./img/unowns/l.gif" onclick="mapearUnowm('lU')" ;>
        <img class="circles" id="mU" src="./img/unowns/m.gif" onclick="mapearUnowm('mU')" ;>
        <img class="circles" id="nU" src="./img/unowns/n.gif" onclick="mapearUnowm('nU')" ;>
        <img class="circles" id="oU" src="./img/unowns/o.gif"  onclick="mapearUnowm('oU')" ;> <br>
        <img class="circles" id="pU" src="./img/unowns/p.gif"  onclick="mapearUnowm('pU')" ;>

        <img class="circles" id="qU" src="./img/unowns/q.gif"  onclick="mapearUnowm('qU')" ;>
        <img class="circles" id="rU" src="./img/unowns/r.gif"  onclick="mapearUnowm('rU')" ;>
        <img class="circles" id="sU" src="./img/unowns/s.gif" onclick="mapearUnowm('sU')" ;>
        <img class="circles" id="tU" src="./img/unowns/t.gif" onclick="mapearUnowm('tU')" ;> <br>
        <img class="circles" id="uU" src="./img/unowns/u.gif" onclick="mapearUnowm('uU')" ;>

        <img class="circles" id="vU" src="./img/unowns/v.gif"  onclick="mapearUnowm('vU')" ;>
        <img class="circles" id="wU" src="./img/unowns/w.gif"  onclick="mapearUnowm('wU')" ;>
        <img class="circles" id="xU" src="./img/unowns/x.gif"  onclick="mapearUnowm('xU')" ;>
        <img class="circles" id="yU" src="./img/unowns/y.gif"  onclick="mapearUnowm('yU')" ;> <br>
        <img class="circles" id="zU" src="./img/unowns/z.gif"  onclick="mapearUnowm('zU')" ;>

        <img class="circles" id="inU" src="./img/unowns/1.gif"  onclick="mapearUnowm('inU')" ;>
        <img class="circles" id="exU" src="./img/unowns/2.gif"  onclick="mapearUnowm('exU')" ;>



    </div>
    <div class="caixaResposta">
        <span id="a"></span><span id="b"></span> <span id="c"></span> <span id="d"></span> <span id="e"></span><span id="f"></span><span id="g"></span> <span id="h"></span> <span id="i"></span> <span id="j"></span><span id="k"></span><span id="l"></span> <span id="m"></span> <span id="n"></span> <span id="o"></span><span id="p"></span><span id="q"></span> <span id="r"></span> <span id="s"></span> <span id="t"></span><span id="u"></span><span id="v"></span> <span id="w"></span> <span id="x"></span> <span id="y"></span><span id="z"></span><span id="inU"></span> <span id="exU"></span> 
        <button onclick="verificaTipo()">Enviar</button>
    </div>


    <div>
        <img class="inicial" src="./img/bonus/1.png" alt="Ajuda" title="Ajuda">

    </div>



</body>

</html>