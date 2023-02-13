<div class="container">
    <div class="row">
        @for($i = 0; $i < count($animais); $i++)
                <div class="col-md-4 mt-3">
                    <img src="/img/jogomemoria/qual.jpg" class=" card-fechado" id="carta{{$i}}" onclick="virarCarta({{$animais_json}},{{$i}})" alt="">
                </div>
        @endfor
    </div>
</div>
<script>
    let animais = <?php echo $animais_json; ?>; // array com os valores das cartas
    let selecionadas = [];
    // função para virar a carta
    function virarCarta(animais,indice) {

        let carta = document.getElementById("carta" + indice);
        carta.src = "/img/jogomemoria/" + animais[indice] + ".jpg";

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
                carta.src = "/img/jogomemoria/qual.jpg";


            }
            selecionadas = [];
            }, 1000);
        }
    }
</script>


