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

    <link rel="stylesheet" href="./css/fasebonus.css">


    <title>Document</title>
</head>

<body>

    <div class="jogobonus">


        <img class="poke " src="./img/bonus/<?php echo ($id); ?>.png"> ;



        <img id="zubat" src="./img/bonus/zubat.gif">
        <img id="golbat" src="./img/bonus/golbat.gif">
        <img id="nuvens" src="./img/bonus/clouds.png">
        <img id="venomoth" src="./img/bonus/venomoth.gif">
        <img id="maca" src="./img/bonus/maca.png">
        <img id="sunflora" src="./img/bonus/sunflora.gif">
        <img id="pedra" src="./img/bonus/float_stone.png">
        <img id="grama" src="./img/bonus/grama.png">
        <img id="haunter" src="./img/bonus/haunter.gif">
<div>







<span>
    
<div id="form" style="display:none">

|<div class="d-flex justify-content-center">
        <div class="w-10 p-3" justify-content-center>
            <div class="card" text-align: center>
                <div class="card-body" text-align: center>
                    <form >
                        <h3>Pergunta</h3>
                        <div class="form-row">
                            <div class="form-group col-md-9">
                                <label for="nome">1 + 1 = </label>
                                <input type="text" class="form-control" >
                            </div>
                           
                           
                            <div class="form-group col-md-6">

                               <a href="fasebonus.php?id=<?php echo ($id); ?>"  button type="submit" class="btn btn-primary">Enviar</button> </a>

                            </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>





</div>
</span>

        <span>
            
            <form id="form" style="display:none" class="form">
                <h3>Pergunta</h3>
                <label for="resp">1 + 1=:</label><br>
                <input type="text" id="resp" name="name"><br>
                <input type="submit" onclick="loop" >
            </form>
        </span>

        </div>


        <span>
   
        <div class="form-group col-md-6">
                               
            <a href="fasebonus.php?id=<?php echo ($id); ?>" button type="submit" id="reiniciar" class="btn btn-primary" style="display:none">Tentar Novamente</button> </a>

        </div>
</span>

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
                    window.alert("Vamos a pergunta!");

                    pedra.style.animation = 'none';
                    pedra.style.left = '519px';

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