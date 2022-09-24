<script>
    const  mapearUnowm = (unowm) =>{

        console.log(unowm);
        //console.log(document.querySelector('#aU'));
        var cont = document.querySelectorAll("#aU, #bU");

        for (var i = 0; i< cont.length; i++ ){

            if(cont[i].id == unowm){
                console.log(cont[i]);

                var remove_string = cont[i].id.replace('U', '');
       


                var caminho_imagem = './img/unowns/'+remove_string+'.gif';


               

                document.getElementById("e").innerHTML = "<img src="+caminho_imagem+">";
            }

        }

        //console.log(document.querySelectorAll("#aU, #bU"));


    }
   const a = (document.getElementsByClassName("circles"));

    


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

<img id="caixa" src="./img/fases unowms/caixa.png">


<div class="fundo_unowns">
       
        <img class="circles" id="aU" src="./img/unowns/a.gif" onclick="mapearUnowm('aU')";>
       
        <span id="e" ></span>

        
        <img class="circles" id="bU" src="./img/unowns/b.gif" onclick="mapearUnowm('bU')";>
        <img id="" src="./img/unowns/c.gif"> 
        <img id="" src="./img/unowns/d.gif">
        <img id="" src="./img/unowns/e.gif"> <br>
        <img id="" src="./img/unowns/f.gif">
        <img id="" src="./img/unowns/g.gif">
        <img id="" src="./img/unowns/h.gif">
        <img id="" src="./img/unowns/i.gif">
        <img id="" src="./img/unowns/j.gif"> <br>
        <img id="" src="./img/unowns/k.gif">

        <img id="" src="./img/unowns/l.gif">
        <img id="" src="./img/unowns/m.gif">
        <img id="" src="./img/unowns/n.gif">
        <img id="" src="./img/unowns/o.gif"> <br>
        <img id="" src="./img/unowns/p.gif">

        <img id="" src="./img/unowns/q.gif">
        <img id="" src="./img/unowns/r.gif">
        <img id="" src="./img/unowns/s.gif">
        <img id="" src="./img/unowns/t.gif"> <br>
        <img id="" src="./img/unowns/u.gif">

        <img id="" src="./img/unowns/v.gif">
        <img id="" src="./img/unowns/w.gif">
        <img id="" src="./img/unowns/x.gif">
        <img id="" src="./img/unowns/y.gif"> <br>
        <img id="" src="./img/unowns/z.gif">

        <img id="" src="./img/unowns/interrogacao.gif">
        <img id="" src="./img/unowns/exclamação.gif">

       
        
    </div>

</body>
</html>