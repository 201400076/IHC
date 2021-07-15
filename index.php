<?php
  include('view/navIndex.php');
?>
<!-- Final del header -->

    <!-- Main -->
  <main id="main">
    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" Data-pause="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="images/home.png" class="d-block w-100" alt="Hawaii1">
        </div>
      </div>
    </div>
  </main>
    
    <!-- /Main -->

    <!-- Speakers -->
  <section id="speakers" class="speakers mt-4 mb-4">
    <div class="container">
      <div class="row">
        <div class="col text-center text-uppercase">
          <h2>NOTICIAS</h2>
        </div>
      </div>
      <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="images/noticia1.jpg">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/noticia2.jpg">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/noticia3.png">
            </div>
          </div>
          <a class="carousel-control-prev btn-dark" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next btn-dark" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
<br>
      <div class="col text-center text-uppercase">
        <h2>DIPLOMADOS POSGRADOS FCYT - UMSS</h2>
      </div>
<br>
      <div class="row">
        <div class="col-sm-6 col-md-4 mb-4">
          <div class="card">
            <img class="card-img-top" src="images/diplomado.png">
            <div class="card-body">
              <h5 class="card-title">Ing. Civil en estructuras</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium error exercitationem suscipit sapiente atque sed quibusdam quis. Magni deleniti placeat, sint, repudiandae consectetur neque, aliquam atque odio explicabo iusto debitis.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mb-4">
          <div class="card">
            <img class="card-img-top" src="images/diplomado.png">
            <div class="card-body">
              <h5 class="card-title">Ing. Civil en estructuras</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium error exercitationem suscipit sapiente atque sed quibusdam quis. Magni deleniti placeat, sint, repudiandae consectetur neque, aliquam atque odio explicabo iusto debitis.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mb-4">
          <div class="card">
            <img class="card-img-top" src="images/diplomado.png">
            <div class="card-body">
              <h5 class="card-title">Ing. Civil en estructuras</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium error exercitationem suscipit sapiente atque sed quibusdam quis. Magni deleniti placeat, sint, repudiandae consectetur neque, aliquam atque odio explicabo iusto debitis.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- /speakers -->

    <!-- Inicio del footer -->
    <footer class="footer">
      <div class="container">
        <div class="row text-rigth">
          <div class="col-12 col-lg">
            <p>© 2001 - 2021 Facultad de Ciencias y Tecnología (UMSS).
              Cochabamba - Bolivia</p>
          </div>
        <div class="row text-center">
        <div class="col-12 col-lg">
            <p>Calle Sucre y parque la Torre.</p>
            <p>Fono: 591-4-4231765</p>
          </div>
        </div>
        </div>
      </div>
    </footer>
    <!-- Final del footer -->

    <!-- Modal -->
  <div class="modal fade" id="modalCompra" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Comprar tickets</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-row">
              <div class="form-group col">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
              </div>
            </div>
          </form>
          <div class="alert alert-warning" role="alert">
            Recibiras un correo de confirmacion si sales seleccionado
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-platzi">Comprar</button>
        </div>
      </div>
    </div>
  </div>
    <!-- /Modal -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="index.js"></script>
  </body>
</html>