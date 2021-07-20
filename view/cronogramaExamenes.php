<?php
include("nav.php");
?>
<div aria-label="breadcrumb">
   <div class=""> 
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
    <li class="breadcrumb-item">Admision</li>
    <li class="breadcrumb-item active" aria-current="page">Cronograma de examenes</li>
  </ol>
</div>
</div>
<div class="container">
  <section id="info" class="info mt-4 mb-4">
            <div class="container">
            <div class="row">
                <div class="col text-center text-uppercase">
                <h2>CRONOGRAMA DE EXAMENES</h2>
                </div>
            </div>
        </section>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">   
            <table class="table">
            <thead>
              <tr>
                <th scope="col">FECHA</th>
                <th scope="col">EXAMEN</th>
                <th scope="col">LUGAR</th>
                <th scope="col">ESTADO</th>
                <th scope="col">INFORMACION</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>08-08-2021</td>
                <td>EXAMEN PRIMERA OPCION GESTION II-2021</td>
                <td>COLICEO DE LA CORONILLA</td>
                <td><span class="badge badge-pill badge-info">VIGENTE</span></td>
                <td><a href="../archivos/cronograma.pdf">cronograma.pdf</a></td>
              </tr>  
              <tr>
                <td>02-02-2021</td>
                <td>EXAMEN PRIMERA OPCION GESTION I-2021</td>
                <td>COLICEO DE LA CORONILLA</td>
                <td><span class="badge badge-pill badge-danger">VENCIDO</span></td>
                <td><a href="../archivos/cronograma.pdf">cronograma.pdf</a></td>
              </tr>  
            </tbody>  
          </table>
          </div>
        </div>
      </div>
      </div>



<script src="../librerias/popper/popper.min.js"></script>
<script src="../librerias/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../librerias/datatables/datatables.min.js"></script>    

   
</body>
</html>