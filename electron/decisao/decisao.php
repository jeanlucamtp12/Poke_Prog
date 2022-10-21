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

    <link rel="stylesheet" href="../css/decisao.css">


    <title>Document</title>
</head>

<body>

    <div class="jogobonus">


        <img class="poke" src="../img/decisao/bulbasaur.gif">

         <img class="pokeAdversario" src="../img/decisao/arbok.gif">  



       
        <div class="grass">
            <div class="fio fio1"></div>
            <div class="fio fio2"></div>
            <div class="fio fio3"></div>
            <div class="fio fio4"></div>
            <div class="fio fio5"></div>
            <div class="fio fio6"></div>
            <div class="fio fio7"></div>
            <div class="fio fio8"></div>
            <div class="fio fio9"></div>
            <div class="fio fio10"></div>
            <div class="fio fio11"></div>
            <div class="fio fio12"></div>
            <div class="fio fio13"></div>
            <div class="fio fio14"></div>
            <div class="fio fio15"></div><div class="fio fio16"></div><div class="fio fio17"></div><div class="fio fio18"></div><div class="fio fio19"></div><div class="fio fio20"></div>
            
        </div>


        <img class="nuvens" src="../img/decisao/clouds.png">







        <img class="jogador" src="../img/decisao/menino.png"> </img>
        <img class="adversario" src="../img/decisao/adversario.png"> </img>

      
        <div id="barraVidaAdversario" class="barraVidaAdversario">HP</div>
        <div class="barraVidaAdversarioReal"></div>


        <div class="barraVida" id="barraVida">HP</div>
        <div class="barraVidaReal"></div>


        <img class="ataqueGrama" id="ataqueGrama" src="../img/decisao/ataqueGrama.png" style="display:none"> </img>

        <img class="ataqueVeneno" id="ataqueVeneno" src="../img/decisao/ataqueVeneno.gif" style="display:none"> </img>







        <span>

            <div class="form" id="form" method="POST">

                |<div class="d-flex justify-content-center">
                    <div justify-content-center>
                        <div text-align: center>
                            <div text-align: center>
                                <form>

                                    <div">
                                        <div>
                                            <label for="nome">Num = 2 <br>&nbsp if (Num == 2){<br>&nbsp print(Num)<br>} <br><br>O print será exibido??</label>
                                            <input type="text" class="form-control" id="resposta">
                                        </div>


                                        <div class="form-group col-md-6">

                                            <button class="btn btn-primary">Enviar</button>

                                        </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>





            </div>
        </span>



    </div>



    <script>
        $('#form').submit(function(evento) { //utilização de ajax para realizar o envio do form sem atualizar a pagina 

            evento.preventDefault();

            var resposta = $('#resposta').val();



            $.ajax({
                url: 'decisao.php',
                method: 'POST',
                data: {
                    Resposta: resposta
                }


            }).done(function(result) {


                if (resposta == "sim") {

                    document.getElementById("ataqueGrama").style.display = "block";
                    setTimeout(function() {
                        pararAnimacao(1)
                    }, 1000);


                } else {
                    document.getElementById("ataqueVeneno").style.display = "block";
                    setTimeout(function() {
                        pararAnimacao(2)
                    }, 1000);
                }

            });
        });



        const pararAnimacao = (id) => {


            if (id == 1) {

                document.getElementById("ataqueGrama").style.display = "none";
                //$('#barraVidaAdversario').width("150px");

                var vida = document.getElementById("barraVidaAdversario");

                vida = vida.offsetWidth;

                console.log(vida);

                var vida = document.getElementById("barraVidaAdversario").style.width = vida - 50 + "px";
            } else {
                document.getElementById("ataqueVeneno").style.display = "none";
                //$('#barraVidaAdversario').width("150px");

                var vida = document.getElementById("barraVida");

                vida = vida.offsetWidth;

                console.log(vida);

                var vida = document.getElementById("barraVida").style.width = vida - 50 + "px";

            }









        }
    </script>


</body>

</html>