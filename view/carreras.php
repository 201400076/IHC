
<?php
include("nav.php");
?>
<div aria-label="breadcrumb">
   <div class=""> 
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
    <li class="breadcrumb-item">Pregrado</li>
    <li class="breadcrumb-item active" aria-current="page">Carreras Disponibles</li>
  </ol>
</div>
</div>

 <!-- Final del header -->
 <section id="speakers" class="speakers mt-4 mb-4">
        <div class="container">
          <div class="row">
            <div class="col text-center text-uppercase">
              <h2>CARRERAS DISPONIBLES</h2>
            </div>
          </div>
      </section>
<div class="container">
<div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">        
                <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                <thead class="text-center">
                    <tr>
                        <th>Nro</th>
                        <th>TIPO</th>
                        <th>CARRERA</th>                                
                        <th>INFORMACION</th>  
                    </tr>
                </thead>
                <tbody>
                    <tr>    
                        <td>1</td>
                        <td>INGENIERIA</td>                                    
                        <td>INGENIERIA INFORMATICA</td>
                        <td><a href="detalleCarrera.php?carrera=INGENIERIA INFORMATICA">Ver mas detalle</a></td>
                    </tr>
                    <tr>    
                        <td>2</td>
                        <td>INGENIERIA</td>                                    
                        <td>INGENIERIA SISTEMAS</td>
                        <td><a href="detalleCarrera.php?carrera=INGENIERIA SISTEMAS">Ver mas detalle</a></td>
                    </tr>
                    <tr>    
                        <td>3</td>
                        <td>INGENIERIA</td>                                    
                        <td>INGENIERIA CIVIL</td>
                        <td><a href="detalleCarrera.php?carrera=INGENIERIA CIVIL">Ver mas detalle</a></td>
                    </tr>
                    <tr>    
                        <td>4</td>
                        <td>INGENIERIA</td>                                    
                        <td>INGENIERIA ELECTROMECANICA</td>
                        <td><a href="detalleCarrera.php?carrera=INGENIERIA ELECTROMECANICA">Ver mas detalle</a></td>
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
<script type="text/javascript" src="../js/defesaTesis.js"></script>  

   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  </body>
</html>