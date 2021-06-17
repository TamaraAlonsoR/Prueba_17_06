<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css.css" media="screen" />
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
        <form method="post" id="form" action="peticiones.php">
        <div class="form-titulo">
            <h1>¿QUIERES AYUDAR?</h1>
            <h3>Rellena este formulario y nos pondremos en contacto con usted.</h3>
        </div>
        <!--formulario-->
        
            <div class="row">

                <div class="col-2"></div>
                <div class="col-8">

                    <div class="row formulario" >
                        <div class="col-6">
                            <h4>Nombre</h4>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                            <h4>Primer apellido</h4>
                            <input type="text" class="form-control" id="apellido1" name="apellido1"  placeholder="primer apellido">
                            <h4>Segundo apellido</h4>
                            <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="segundo apellido">
                            <h4>DNI o NIE</h4>
                            <input type="text" class="form-control" id="dni" name="dni" placeholder="dni-nie">
                            <h4>¿Cómo quieres ayudar?</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"  id="colaborar" name="colaborar" value="Acudir a centro" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Acudir a un centro a ayudar.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="donar" value="Donar">
                                <label class="form-check-label" for="exampleRadios2">
                                    Donar dinero o recursos materiales
                                </label>
                            </div>
                        </div>
                        <div class="col-6">

                            <h4> Cúentanos tus preferencias.</h4>
                            <textarea class="form-control" placeholder="Cuéntanos de qué forma quieres colaborar." id="preferencias" name="preferencias" rows="4"></textarea>
                            <h3 style="color: cadetblue">Nos pondremos en contacto con usted lo antes posible.</h3>
                            <h4>Email</h4>
                            <input type="varchar" class="form-control" id="email" name="email" placeholder="name@example.com">
                            <h4>Teléfono</h4>
                            <input type="tel" id="telefono" name="telefono" placeholder="Número teléfono o movil">
                        </div>
                        <div class="col-12" style="margin-top:1%; text-align:center">
                            <button class="btn btn-primary btn-lg btn-block" type="submit" id="enviar" value="Enviar Solicitud">Enviar Solicitud</button>
                        </div> 
                        
                    </div>
                </div>
                

                <div class="col-2"></div>
            </div>
        </form>
        <!--foooter-->
        <div class="row foot p-3 mt-5 pie">
            <div class="col"></div>
            <div class="col-6 text-center">

                <p>Web site realizada por Tamara Alonso Rodrigo</p>
            </div>
            <div class="col"></div>
        </div>
    </div>
  
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    
</body>

</html>
