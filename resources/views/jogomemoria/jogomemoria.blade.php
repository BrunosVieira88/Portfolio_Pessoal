jogo da memoria
    <?php
        shuffle($animais);
        $numeroDeAnimais = count($animais);
        $animais_json = json_encode($animais);
        echo $numeroDeAnimais;

    ?>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 mt-5 " style="margin-left:20%;">
            @for($i = 0; $i < count($animais); $i++)
                <img src="/img/jogomemoria/qual.PNG" class="img-fluid" style="width:25%;" id="carta{{$i}}" onclick="virarCarta({{$animais_json}},{{$i}})" alt="">
            @endfor
            </div>
        </div>

    </div>


<script>
let animais = <?php echo $animais_json; ?>; // array com os valores das cartas
let selecionadas = [];
// função para virar a carta
function virarCarta(animais,indice) {
  let carta = document.getElementById("carta" + indice);
  carta.src = "/img/jogomemoria/" + animais[indice] + ".PNG";
  selecionadas.push(indice);
  if (selecionadas.length === 2) {
    comparar();
  }
}

// função para comparar as cartas selecionadas
function comparar() {
  if (animais[selecionadas[0]] === animais[selecionadas[1]]) {
    selecionadas = [];
  } else {
    setTimeout(() => {
      for (let indice of selecionadas) {
        let carta = document.getElementById("carta" + indice);
        carta.src = "/img/jogomemoria/qual.PNG";
      }
      selecionadas = [];
    }, 1000);
  }
}
</script>


