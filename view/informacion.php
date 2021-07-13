
<?php
include("nav.php");


?>

    <section id="speakers" class="speakers mt-4 mb-4">
            <div class="container">
            <div class="row">
                <div class="col text-center text-uppercase">
                <h2>Generalidades</h2>
                </div>
            </div>
        </section>
    <div class="container">

    <div class="contents-wrapper">
            <!-- Contents starts here -->
            <div class="content">
                
                <p>La Facultad de Ciencias y Tecnología de la Universidad Mayor de San Simón nace con la concepción de un Instituto de Ciencias Básicas, en la década del 60 bajo la gestión rectoral del Dr. Arturo Urquidi. En 1972, se crea la Facultad de Ciencias Puras y Naturales como unidad de servicios para todas las carreras de la U.M.S.S., en el campo de las Matemáticas, Física, Química, y Biología, lográndose posteriormente la creación de sus primeras carreras: Licenciatura y Técnico Superior en Química y Biología entre 1975 y 1976.</p>
                <p>En los años 1976 a 1979, se comisiona la realización de un estudio de factibilidad para la viabilización de las carreras de ingeniería de la U.M.S.S., en base al cual, mediante Resolución del Consejo Universitario No. 07/79, se crean las carreras de ingeniería Eléctrica, Industrial y Mecánica de un Facultad de Tecnología y un Instituto politécnico, conectándolas a las carreras de ciencias con funcionamiento de la Facultad de Ciencias Puras y Naturales.</p>
                <p>El 21 de septiembre de 1979, mediante Resolución Rectoral No. 471/79 se dispone la conjunción de la carreras de Ciencias y las de Tecnología en una facultad con denominación de FACULTAD DE CIENCIAS Y TECNOLOGÍA.</p>
            </div>
        </div>
        <!-- Footer -->
    </div>

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