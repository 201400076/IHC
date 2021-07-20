<?php
include("nav.php");


?>
<div aria-label="breadcrumb">
   <div class=""> 
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
    <li class="breadcrumb-item">FCyT</li>
    <li class="breadcrumb-item active" aria-current="page">Autoridades</li>
  </ol>
</div>
</div>

<div class="container">
  <section id="info" class="info mt-4 mb-4">
            <div class="container">
            <div class="row">
                <div class="col text-center text-uppercase">
                <h2>AUTORIDADES</h2>
                </div>
            </div>
        </section>
    <div class="container">
    <div class="container">
    <div class="container">
    <div class="container">
    <div class="container">
    <div class="container">
    <div class="container">
    <div class="container">
    <div class="container">
    <div class="container">
    <div class="container">
    <div class="container">

    <div class="container">
    <div class="container">
    <div class="container">
    <div class="container">
    <div class="container">
    <div class="container">
    <div class="container">
    <div class="container">
    <div class="container">
    <div class="container">
</div>

  
            <!-- Contents starts here -->
            
                
                <table class="table table-bordered table-responsive table-hover" align="rigth">
                    <thead>
                        <tr>
                            <th data-field="id">No.</th>
                            <th data-field="name">Nombre</th>
                            <th data-field="designation">Cargo</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>1</td>
                        <td>Ing. M.Sc. ALFREDO COSIO PAPADOPOLIS</td>
                        <td>DECANO</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Ing. JOSE LUIS BALDERRAMA IDINA</td>
                        <td>DIRECTOR ACADEMICO</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Lic. M.Sc. OMAR ARCE GARCIA</td>
                        <td>DIRECTOR DE INST. INVESTIGACIONES</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Dr. EDWIN ESCALERA MEJIA</td>
                        <td>JEFE DE DEPARTAMENTO DE POSGRADO</td>
                    </tr>
                   
                </table>
            
     

    <!--Scripts Starts-->
    <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/434d359724.js"></script>
    <script>
    $(document).on('click', function (e) {
    var
        $popover,
        $target = $(e.target);

    //do nothing if there was a click on popover content
    if ($target.hasClass('popover') || $target.closest('.popover').length) {
        return;
    }

    $('[data-toggle="popover"]').each(function () {
        $popover = $(this);

        if (!$popover.is(e.target) &&
            $popover.has(e.target).length === 0 &&
            $('.popover').has(e.target).length === 0)
        {
            $popover.popover('hide');
        } else {
            //fixes issue described above
            $popover.popover('toggle');
        }
    });
})

  

    </script>




<script src="../librerias/popper/popper.min.js"></script>
<script src="../librerias/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../librerias/datatables/datatables.min.js"></script>    
<script type="text/javascript" src="../js/defesaTesis.js"></script>  

   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  </body>
</html>