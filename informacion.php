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
        .margen {
            margin-top: 10%;
            margin-bottom: 5%
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
        <!--informacion-->

        <div class="row margen">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3 text-justify">
                        <div class="card">

                            <video class="card-img-top" width="100%" controls>
                                <source src="videos/exclusion.mp4" type="video/mp4" />
                            </video>
                            <div class="card-body video1">
                                <h5 class="card-title">Exclusión social</h5>
                                <p class="card-text">La exclusión social es cualquier acción que implique quitar a una persona algún derecho, rechazar a una persona por diversos factores y reducir sus posibilidades.</p><br><br><br><br><br><br><br><br>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-justify">
                        <div class="card">

                            <video class="card-img-top" width="100%" controls>
                                <source src="videos/arope.mp4" type="video/mp4" />
                            </video>
                            <div class="card-body video1">
                                <h5 class="card-title">Indicador AROPE</h5>
                                <p class="card-text">La Unión Europea ha propuesto este indicador para medir la exclusión social; para ello mide estos factores: la renta (los hogares que viven con una renta inferior al 60% de la mediana); la privación material severa en la cual las personas deben poder cumplir 4 de los 9 items (pagar un alquiler, tener la casa a una temperatura adecuada, hacer frente a gastos imprevistos, comer carne o pescado o equivalentes al menos tres veces a la semana, poder costearse una semana de vacaciones al año, un coche, una lavadora, un televisor y un móvil).</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row" style="margin-bottom:3%">
                    
                    <div class="col-md-3 text-justify" style="margin-left:10%">
                        <div class="card">
                            <video class="card-img-top" width="100%" controls>
                                <source src="videos/pobreza.mp4" type="video/mp4" />
                            </video>
                            <div class="card-body video1">
                                <h5 class="card-title">Pobreza</h5>
                                <p class="card-text">
                                    Es la condición caracterizada por una privación severa de necesidades humanas básicas. </p>
                            </div>
                        </div></div>
                        <div class="col-md-3 text-justify">
                            <div class="card">

                                <video class="card-img-top" width="100%" controls>
                                    <source src="videos/pobreza_absoluta.mp4" type="video/mp4" />
                                </video>
                                <div class="card-body video1">
                                    <h5 class="card-title">Pobreza absoluta</h5>
                                    <p class="card-text">Falta capacidad económica para cubrir las necesidades más básicas para subsistir </p>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-3 text-justify">
                                <div class="card">
                                    <video class="card-img-top" width="100%" controls>
                                        <source src="videos/pobreza_relativa.mp4" type="video/mp4" />
                                    </video>
                                    <div class="card-body video1">
                                        <h5 class="card-title">Pobreza relativa</h5>
                                        <p class="card-text">Hace referencia al umbral de pobreza tomando como referencia la media y mediana de los ingresos de un país. </p>
                                    </div>
                                </div></div>
                                
                            </div>
                        </div>
                        
                    </div>
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
