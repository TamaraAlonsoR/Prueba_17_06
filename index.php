<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css.css" media="screen" />
    <style>
        
.margen{
    margin-top:7%;
}
    </style>
</head>

<body>
    <div class="container-fluid">

        <!-- barra navegacion-->
        <?php 
    session_start();
    if(isset($_SESSION['email'])){
      include ('nav1.php');
        
    }else {
       include ('nav2.php');
        
    }
        ?>

        <!--Titulo-->
        <div class="row margen">
            <div class="col-2"></div>
            <div class="col-8">
                <h1 class="text-center titulo">Divulgación de recursos dirigidos a personas en situación de vulnerabilidad en la Comunidad de Madrid</h1>
            </div>

            <div class="col-2"></div>
        </div>
        <!-- carrousel-->
        <div class="row">
            <div class="col-1"></div>
            <div class="col-md-10">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="imagenes/carrusel1.jpg" width="100%" class="d-block w-100" alt="estoy tan cerca que no me ves">
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/carrusel2.jpg" width="100%" class="d-block w-100" alt="la calle no puede ser el hogar de ninguna persona">
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/carrusel3.jpg" width="100%" class="d-block w-100" alt="no tener casa mata">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
        <!--texto-->
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 texto_index">
                <p class="texto_index1">A mediados de marzo se decretó el Estado de Alarma en España para hacer frente a la expansión del COVID-19.
                <p class="texto_index1">Además de las consecuencias sanitarias y económicas sufridas, también encontramos consecuencias sociales.</p>
                <p class="texto_index1"> Algunas de estas consecuencias sociales han sido que, debido a la pérdida de empleo o la entrada en ERTE, las familias no han podido pagar los gastos de suministros, la hipoteca, el alquiler o la alimentación. Todo esto ha conllevado a una situación de desamparo de muchas familias y, por tanto, a un incremento del uso de recursos sociales.</p>
                <video class="video_index" controls>
                    <source src="videos/index.mp4" alt="lse" type="video/mp4" />
                </video>
            </div>

        </div>
        <div class="col-2"></div>
    </div>
    <!--foooter-->
    <div class="row foot p-3 mt-5 pie">
        <div class="col"></div>
        <div class="col-6 text-center">

            <p>Sitio web realizado por <b>Tamara Alonso Rodrigo</b></p>
        </div>
        <div class="col"></div>
    </div>



    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
