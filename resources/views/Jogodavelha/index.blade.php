<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/stylo.css">
<!-- JavaScript Bundle with Popper -->
<script src="js/sweet.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class=" row text-center">
        <h2 class="player_ativo mt-4" >Jogador</h2>
        <h2 id="valor" class="player_ativo" >X</h2>
    </div>

    <section class="container mt-5 text-center"  style="width: 25%;"  onclick="vencedor()" >

        <div class="row" style="border-bottom: 2px solid black;">
            <div class="col-md-4 tamanho br " onclick="muda(1)" >
                <p  id="troca_1" class="centraliza"></p>
            </div>
            <div class="col-md-4 tamanho br"  onclick="muda(2)">
                 <p   id="troca_2" class="centraliza"></p>
            </div>
            <div class="col-md-4 tamanho "  onclick="muda(3)">
                 <p   id="troca_3" class="centraliza"></p>
            </div>

        </div>

        </div>
        <div class="row" style="border-bottom: 2px solid black;">
            <div class="col-md-4 tamanho br"  onclick="muda(4)">
                 <p   id="troca_4" class="centraliza"></p>
            </div>
            <div class="col-md-4 tamanho br"  onclick="muda(5)" >
                 <p   id="troca_5" class="centraliza"></p>
            </div>
            <div class="col-md-4 tamanho "  onclick="muda(6)">
                  <p   id="troca_6" class="centraliza"></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 tamanho br"  onclick="muda(7)" >
                 <p   id="troca_7" class="centraliza"></p>
            </div>
            <div class="col-md-4 tamanho br"   onclick="muda(8)">
                 <p   id="troca_8" class="centraliza"></p>
            </div>
            <div class="col-md-4 tamanho"  onclick="muda(9)">
                  <p   id="troca_9" class="centraliza"></p>
            </div>
        </div>

    </section>
    <div class="row ">
        <div class="offset-md-4 col-md-4 text-center">
            <button class="btn btn-primary mt-5 " onclick="recarrega()">Reiniciar</button>
        </div>

    </div>




</body>
</html>
<script src="js/jogovelha.js"></script>
