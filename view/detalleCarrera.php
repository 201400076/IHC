
<?php
include("nav.php");
$carrera=$_GET['carrera'];
?>
 <!-- Final del header -->
 <section id="speakers" class="speakers mt-4 mb-4">
        <div class="container">
          <div class="row">
            <div class="col text-center text-uppercase">
              <h2><?php echo $carrera?></h2>
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
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody><tr> 
                    <td align="right"><b>Director de Carrera:</b></td>
                    <td>Ing. M.Sc. Emir Vargas Peredo</td>
                    </tr>
                    <tr> 
                    <td align="right"><b>Jefe del Departamento:</b></td>
                    <td>M.Sc. Ing. Juan Carlos Vargas Reinaga</td>
                    </tr>
                    <tr> 
                    <td align="right"><b></b></td>
                    <td>&nbsp;</td>
                    </tr>
                    <tr> 
                    <td align="right"><b>Teléfonos:</b></td>
                    <td>591 4 231765</td>
                    </tr>
                    <tr> 
                    <td align="right"><b></b></td>
                    <td> Interno 318 - 341 </td>
                    </tr>
                    <tr> 
                    <td align="right"><b>Sitio web</b></td>
                    <td><a href="http://industrial.fcyt.umss.edu.bo/" target="_blank">http://industrial.fcyt.umss.edu.bo/</a></td>
                    </tr>
                    <tr> 
                    <td align="right"><b>Correo Electrónico:</b></td>
                    <td><a href="mailto: ind@fcyt.umss.edu.bo"> ind@fcyt.umss.edu.bo</a></td>
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

   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  </body>
</html>