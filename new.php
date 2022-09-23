<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    |<div class="d-flex justify-content-center">
        <div class="w-100 p-3" justify-content-center>
            <div class="card" text-align: center>
                <div class="card-body" text-align: center>
                    <form id="form" onsubmit="return validar(this)">
                        <h3>Novo Jogo</h3>
                        <div class="form-row">
                            <div class="form-group col-md-9">
                                <label for="nome">Nome do Jogador</label>
                                <input type="text" class="form-control" name="nome " id="nome" placeholder="Nome" pattern="[A-Za-zÀ-ú ']{4,}">
                            </div>
                           
                           
                            <div class="form-group col-md-6">
                               <a href="introduction.php" button type="submit" class="btn btn-primary">Iniciar</button> </a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>