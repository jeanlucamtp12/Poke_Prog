<?php
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/fasebonus.css">

    <title>Document</title>
</head>
<body>
     
    <div class="jogobonus">

    <img id="pedra" src="./img/bonus/pedra.gif">

   
    <img  class="poke " src="./img/bonus/<?php echo($id);?>.png"> ;


    <img  class="poke " src="./img/bonus/bulbasaur.png">

    <img id="zubat" src="./img/bonus/zubat.gif">
    <img id="golbat" src="./img/bonus/golbat.gif">
    <img id="nuvens" src="./img/bonus/clouds.png">
    <img id="venomoth" src="./img/bonus/venomoth.gif">
    <img id="maca" src="./img/bonus/maca.png">
    <img id="grama" src="./img/bonus/grama.png">
    <img id="haunter" src="./img/bonus/haunter.gif">
    </div>


    <script>
        const personagem = document.querySelector('.poke');

        const mover = () =>{

            personagem.classList.add('movimento');
            
            
            setTimeout( function (){
                personagem.classList.remove('movimento');
            }, 1000);

    

        }

    
        document.addEventListener('keydown', mover);


</script>


</body>
</html>