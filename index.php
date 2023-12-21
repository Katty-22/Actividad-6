<?php
include('view/head.php');
include('model/usuarioModel.php');

$usuario  =  new usuarioModel();

$pacientes = $usuario->index();


?>



<!-- Header - set the background image for the header in the line below-->
<header class="py-5 bg-image-full"
    style="background-image: url('https://www.anfix.com/hubfs/Imported_Blog_Media/31AGO_HistoriaContabilidad-3.jpg')">
    <div class="text-center my-5">
        <h1 class="text-white fs-3 fw-bolder">Katy Gisela</h1>
        <p class="text-black-50 mb-0">Contadora Publica

        </p>
    </div>
</header>
<!-- Content section-->
<section class="py-5">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2>Contadora Graduada de la universidad IBERO</h2>
                <br>
                <p class="lead">Soy una joven recien graduada de la universidad, en busca de experiencia,
                    si necesitas mi ayuda te puedes contactar por medio de solicitar cita </p>
            </div>
        </div>
    </div>
</section>
<!-- Image element - set the background image for the header in the line below-->
<div class="py-5 bg-image-full"
    style="background-image: url('https://micarrerauniversitaria.com/wp-content/uploads/2018/02/0004_shutterstock_164852162.jpg')">
    <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
    <div style="height: 20rem"></div>
</div>
<!-- Content section-->
<section class="py-5">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2>Accountant Graduated from IBERO University</h2>
                <p class="lead">
                    I am a young woman who recently graduated from university, looking for experience,
                    If you need my help you can contact me by solicitar cita</p>
            </div>
        </div>
    </div>
</section>

<?php
include('view/footer.php');



?>