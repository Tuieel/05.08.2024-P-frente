<?php 
function head() {
  echo '
  <header>
      <div class="row flex">
          <div id="logo">
              <img src="/img/Logo.jpg" width="100" alt="Logo">
          </div>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#">Cake Donuts</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                      <li class="nav-item active">
                          <a class="nav-link" href="/paginas/sobre.php">Sobre <span class="sr-only">(Página atual)</span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/paginas/CardapioList.php">Cardápio</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/paginas/CardapioForm.php">Cadastrar Cardápio</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/paginas/PedidoList.php">Pedidos</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/paginas/PedidoForm.php">Cadastrar Pedido</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/paginas/ContatoList.php">Contatos</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/paginas/ContatoForm.php">Cadastrar Contato</a>
                      </li>
                  </ul>
              </div>
          </nav>
      </div>
  </header>';
}

function carousel() {
  echo '
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img class="w-100" src="/img/slide_show/slide_show_img01.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
              <img class="w-100" src="/img/slide_show/slide_show_img02.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
              <img class="w-100" src="/img/slide_show/slide_show_img03.jpg" alt="Third slide">
          </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
  </div>';
}

function sidebar() {
  echo '
  <div class="position-sticky" style="top: 2rem;">
      <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">Sobre</h4>
          <p>Bem-vindo à nossa loja de Mini Cake Donuts! Somos apaixonados por criar deliciosos e fofinhos
              donuts em tamanhos mini, perfeitos para qualquer ocasião. Utilizamos apenas ingredientes frescos e
              de alta qualidade para garantir que cada mordida seja uma experiência única e inesquecível. Venha
              experimentar nossos sabores variados e surpreenda-se com a nossa dedicação em cada detalhe.
              Esperamos por você!</p>
      </div>
      <div>
          <h4 class="fst-italic">Arquivos</h4>
          <ol class="list-unstyled mb-3">
              <li><a href="#">Receita de Donuts de Chocolate</a></li>
              <li><a href="#">Receita de Donuts de Chocolate meio amargo</a></li>
              <li><a href="#">Receita de Donuts de Laranja</a></li>
              <li><a href="#">Receita de Donuts de Vanilla</a></li>
              <li><a href="#">Receita de Donuts de Limão</a></li>
              <li><a href="#">Receita de Donuts de Morango</a></li>
          </ol>
      </div>
  </div>';
}

function footer() {
  echo '
  <footer style="
          padding: 2.5rem;
          color: #727272;
          text-align: center;
          background-color: #f9f9f9;
          border-top: .05rem solid #e5e5e5;
          margin-bottom: 0;">
      <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="d-flex">
              <nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
                  <div class="collapse navbar-collapse show">
                      <ul class="navbar-nav">
                          <li class="nav-item active">
                              <a class="nav-link" href="/paginas/contato.html">Trabalhe Conosco<span class="sr-only">(Página
                                  atual)</span></a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="/paginas/contato.html">Contato</a>
                          </li>
                      </ul>
                  </div>
              </nav>
          </div>
          <div class="d-flex align-items-center">
              <div class="mr-3">
                  <p class="mb-0">Siga-nos:</p>
              </div>
              <div>
                  <a href="#"><img src="/img/footer/facebook.png" width="30" alt="Facebook"></a>
                  <a href="#"><img src="/img/footer/instagram.png" width="30" alt="Instagram"></a>
              </div>
          </div>
      </div>
      <p>Todos os Direitos Reservados <a href="#">Mundo dos Cake Donuts</a> por <a href="#">@mundodoscake</a></p>
  </footer>';
}

?>