<?php $cont = "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/"?>
    <!--Barra de Navegação-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
    <section class="container firstwall longe">
    <div class="row mt-3 ">

      <div class="col-md-6 text-center p-4 texto-entrada">
      <h1>Oi! <br> Sou Bruno Santos Vieira</h1>
      Bem vindo ao meu portfolio aqui vou apresentar um pouco sobre mim e meu trabalho <br>
      </div>
      <div class="col-md-6"><img src="/img/webcom.PNG"  class="rounded-circle foto"  alt=""></div>
    </div>


  </section>

  <div>
      <div class="row  mt-5">
        <div class="col-md-6 text-center">
          <h3>Pequenos Projetos</h3>
        </div>
        <div class="col-md-6 ">
          <h3 style="margin-left:10%;">Minhas aréas de conhecimento</h3>
        </div>

      </div>
  </div>

  <section class="container">
  <div class="row ">
    <div class="col-md-6 ">
        <div class="row ">
            <div class="col-md-12 d-flex justify-content-betweenf">
                 <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Calculadora
        </button>
        <button class="btn btn-primary" onclick="redireciona('/jogovelha')">Jogo da Velha</button>
        <button class="btn btn-primary"  onclick="redireciona('/jogomemoria')">Jogo da Memoria</button>
            </div>

        </div>


    </div>
    <div class="col-md-6 " style="box-shadow: 2px 2px 3px black;">
        <section class="mb-5 container " >

      <div >
        <div class="row   mt-4" >
          <div class="col-md-3" >

          <img src="<?php echo $cont?>html5/html5-original-wordmark.svg" class="tamanho" />

          </div>
          <div class="col-md-3">


          <img src="<?php echo $cont?>css3/css3-original-wordmark.svg"  class="tamanho" />


          </div>
          <div class="col-md-3">

          <img src="<?php echo $cont?>javascript/javascript-original.svg"  class="tamanho" />

          </div>
          <div class="col-md-3">

          <img src="<?php echo $cont?>java/java-original-wordmark.svg"  class="tamanho" />

          </div>
        </div>

      </div>

      <div >
        <div class="row text-center  mt-4" >
          <div class="col-md-3" >

          <img src="<?php echo $cont?>bootstrap/bootstrap-original.svg" class="tamanho" />

          </div>
          <div class="col-md-3">


          <img src="<?php echo $cont?>php/php-original.svg"  class="tamanho" />


          </div>
          <div class="col-md-3">

          <img src="<?php echo $cont?>laravel/laravel-plain.svg"  class="tamanho" />

          </div>
          <div class="col-md-3">

          <img src="<?php echo $cont?>spring/spring-original.svg"  class="tamanho" />

          </div>
        </div>

      </div>

      <div >
        <div class="row text-center  mt-4 mb-4" >
          <div class="col-md-3" >

          <img src="<?php echo $cont?>vuejs/vuejs-original.svg" class="tamanho" />

          </div>
          <div class="col-md-3">


          <img src="<?php echo $cont?>/python/python-original.svg"  class="tamanho" />


          </div>
          <div class="col-md-3">

          <img src="<?php echo $cont?>django/django-plain-wordmark.svg"  class="tamanho" />

          </div>
          <div class="col-md-3">

          <img src="<?php echo $cont?>git/git-original.svg"  class="tamanho" />

          </div>
        </div>

      </div>

      </section>
          </div>
    </div>
  </section>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" id="n1">
        <input type="text" id="n2">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  <script src="js/script.js"></script>

</body>
</html>
