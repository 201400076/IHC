
<?php
include("nav.php");
$carrera=$_GET['carrera'];
?>
<div aria-label="breadcrumb">
   <div class=""> 
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
    <li class="breadcrumb-item">Pregrado</li>
    <li class="breadcrumb-item active" ><a href="carreras.php">Carreras Disponibles</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $carrera?></li>
  </ol>
</div>
</div>
 <!-- Final del header -->
 
   <div class="container">
  <section id="info" class="info mt-4 mb-4">
            <div class="container">
            <div class="row">
                <div class="col text-center text-uppercase">
                <h2><?php echo $carrera?></h2>
                </div>
            </div>
        </section>

<?php
if($carrera==="INGENIERIA SISTEMAS"){
 
?>
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
                    <td>Lic. Henry Villarroel Tapia</td>
                    </tr>
                    <tr> 
                    <td align="right"><b>Jefe del Departamento:</b></td>
                    <td>Lic. Jimmy Villarroel Novillo</td>
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
                    <td><a href="http://www.cs.umss.edu.bo/" target="_blank">http://www.cs.umss.edu.bo/</a></td>
                    </tr>
                    <tr> 
                    <td align="right"><b>Correo Electrónico:</b></td>
                    <td><a href="mailto: infosis@fcyt.umss.edu.bo"> infosis@fcyt.umss.edu.bo</a></td>
                    </tr>
                </tbody>      
               </table>                    
            </div>
        </div>
</div>  
</div>
<?php
}
if($carrera==="INGENIERIA INFORMATICA"){

?>
  <<div class="container">

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
                    <td>Lic. Henry Villarroel Tapia</td>
                    </tr>
                    <tr> 
                    <td align="right"><b>Jefe del Departamento:</b></td>
                    <td>Lic. Jimmy Villarroel Novillo</td>
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
                    <td><a href="http://www.cs.umss.edu.bo/" target="_blank">http://www.cs.umss.edu.bo/</a></td>
                    </tr>
                    <tr> 
                    <td align="right"><b>Correo Electrónico:</b></td>
                    <td><a href="mailto: infosis@fcyt.umss.edu.bo"> infosis@fcyt.umss.edu.bo</a></td>
                    </tr>
                </tbody>      
               </table>                    
            </div>
        </div>
</div>  
</div>

<?php
}
if($carrera==="INGENIERIA CIVIL"){
 
?>

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
                    <td>Ing. Roberto Mendez</td>
                    </tr>
                    <tr> 
                    <td align="right"><b>Jefe del Departamento:</b></td>
                    <td>M.Sc. Ing. Javier Caballero</td>
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
                    <td><a href="https://civil.fcyt.umss.edu.bo/" target="_blank">https://civil.fcyt.umss.edu.bo/</a></td>
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
<?php
}
if($carrera==="INGENIERIA ELECTROMECANICA"){

?>    
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
                    <td>Ing. Roberto Valenzuela Miranda</td>
                    </tr>
                    <tr> 
                    <td align="right"><b>Jefe del Departamento:</b></td>
                    <td>M.Sc. Ing. Jorge G. Zambrana V.</td>
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
                    <td><a href="http://electronica.fcyt.umss.edu.bo/" target="_blank">http://electronica.fcyt.umss.edu.bo/</a></td>
                    </tr>
                    <tr> 
                    <td align="right"><b>Correo Electrónico:</b></td>
                    <td><a href="mailto: electronica@fcyt.umss.edu.bo"> electronica@fcyt.umss.edu.bo</a></td>
                    </tr>
                </tbody>      
               </table>                    
            </div>
        </div>
</div>  
</div>
<?php
}
?>

<script src="../librerias/popper/popper.min.js"></script>
<script src="../librerias/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../librerias/datatables/datatables.min.js"></script>    

   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  </body>
</html>