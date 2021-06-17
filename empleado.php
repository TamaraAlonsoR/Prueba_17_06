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


    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:700');

        @keyframes showTopText {
            0% {
                transform: translate3d(0, 100%, 0);
            }

            40%,
            60% {
                transform: translate3d(0, 50%, 0);
            }

            100% {
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes showBottomText {
            0% {
                transform: translate3d(0, -100%, 0);
            }

            100% {
                transform: translate3d(0, 0, 0);
            }
        }

        .animated-title {
            color: cadetblue;
            font-family: Roboto, Arial, sans-serif;
            height: 40vmin;
            left: 15%;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 40vmin;
        }

        .animated-title>div {
            height: 50%;
            overflow: hidden;
            position: absolute;
            width: 100%;
        }

        .animated-title>div div {
            font-size: 12vmin;
            padding: 2vmin 0;
            position: absolute;
        }

        .animated-title>div div span {
            display: block;
        }

        .animated-title>div.text-top {
            border-bottom: 1vmin solid #000;
            top: 0;
        }

        .animated-title>div.text-top div {
            animation: showTopText 1s;
            animation-delay: 0.5s;
            animation-fill-mode: forwards;
            bottom: 0;
            transform: translate(0, 100%);
        }

        .animated-title>div.text-top div span:first-child {
            color: #29565E;
            font-size: 50%;

        }

        .animated-title>div.text-bottom {
            bottom: 0;

        }

        .animated-title>div.text-bottom div {
            animation: showBottomText 0.5s;
            animation-delay: 1.75s;
            animation-fill-mode: forwards;
            top: 0;
            transform: translate(0, -100%);
            font-size: 270%;
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
        <div class="row" style="margin-top:10%;">
            <div class="col-2"></div>
            <div class="col-8" style="margin-top:7%;">
                <div class="animated-title">
                    <div class="text-top">
                        <div>
                            <span>Bienvenide,</span>

                        </div>
                    </div>
                    <div class="text-bottom">
                        <div>
                            <?php
                  
                    echo $_SESSION['nombre'];
                    ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>

        </div>
        <div class="row" style="margin-top:10%">
            <div class="col-2"></div>
            <div class="col-8">
                <!--CONSULTA PARA QUE SAQUE EL NOMBRE DEL CENTRO EN EL QUE TRABAJA ESTE EMPLEADO-->
                <h1>Personas que acuden al recurso:
                    <?php 
        
                     if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'select c.nombre from centros c INNER JOIN trabajan t ON t.codigo_centro=c.codigo_centro INNER JOIN trabajadores tr on t.doc_oficial=tr.doc_oficial where  tr.email="'.$_SESSION['email'].'"';
        
		if ($resultado= mysqli_query($conexion, $consulta))
		{ 
            while ($fila = mysqli_fetch_row($resultado))
            {
				foreach ($fila as $valor) {
					//procesar la fila de datos
                    
					echo $valor; 
				}
            }
        
		mysqli_close($conexion);
	}}
                ?></h1>

                <!--CONSULTA PARA VER QUE PERSONAS ESTÁN EN DICHO CENTRO-->

                <?php 

                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT p.doc_oficial, p.nombre, p.apellido1, p.apellido2,p.sexo FROM personas p INNER JOIN acuden a ON p.doc_oficial=a.persona INNER JOIN trabajan t ON a.codigo_centro=t.codigo_centro INNER JOIN trabajadores tr ON t.doc_oficial=tr.doc_oficial WHERE tr.email="'.$_SESSION['email'].'"';
		if ($resultado= mysqli_query($conexion, $consulta))
		{	
			echo '<table >';
         
            $cabecera=mysqli_fetch_fields($resultado); 
            echo '<tr id="celdas">';
            foreach ($cabecera as $valor){
                echo '<th id="celdas">'.$valor->name.'</th>';
                
            }
            echo '</tr>';
           while ($fila = mysqli_fetch_row($resultado))
            {
                 echo '<tr>';
				foreach ($fila as $valor) {
					echo '<td id="td">'.$valor.'</td>'; 
                  
				}
               echo '<form action="eliminarPersona.php" method="post">';
               echo '<input type="hidden" id="doc_oficial" name="doc_oficial" value='.$fila[0].'>';
               echo '<td id="td"><input class="btn btn-outline-primary" type="submit" value="Eliminar persona"></td>';
            echo '</form>';
			}}echo '</table>';
		}
        

		mysqli_close($conexion);    
            ?>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8" style="margin-bottom:5%">
                        <br><br>
                        <input class="btn btn-primary btn-lg btn-block" type="button" id="crear" value="Insertar nueva persona">
                        <input class="btn btn-primary btn-lg btn-block"type="button" id="buscar" value="Buscar a persona">
                        <input class="btn btn-primary btn-lg btn-block"type=button id="contar" value="Calcular total personas">
   
             </div>
            <div class="col-2"></div>
        </div>
      
        <div class="row" id="oculto1">  <!--FORMULARIO INSERTAR PERSONA NUEVA-->

            <div class="col-2"></div>
            <div class="col-8">
                <form action="insertar_user.php" method="post">
                    <div class="row formulario">
                        <div class="col-6">
                            <h4>Nombre</h4>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                            <h4>Primer apellido</h4>
                            <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="primer apellido">
                            <h4>Segundo apellido</h4>
                            <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="segundo apellido">
                            <h4>DNI o NIE</h4>
                            <input type="text" class="form-control" id="dni" name="dni" placeholder="dni-nie">
                            <h4>Fecha Nacimiento</h4>
                            <input type="text" class="form-control" id="nac" name="nac" placeholder="Fecha nacimiento YYYY-MM-DD">

                        </div>
                        <div class="col-6">
                            <h4>Sexo</h4>
                            <input type="text" class="form-control" id="sexo" name="sexo" placeholder="sexo">
                            <h4>Nacionalidad</h4>
                            <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="nacionalidad">
                            <h4>Empadronamiento</h4>
                            <input type="text" class="form-control" id="empadronado" name="empadronado" placeholder="empadronado">
                            <h4>Equipo de Calle</h4>
                            <input type="text" class="form-control" id="ec" name="ec" placeholder="Equipo de calle">
                        </div>
                        <div class="col-12" style="margin-top:1%; text-align:center">
                            <button class="btn btn-primary btn-lg btn-block" type="submit" id="enviar" value="Enviar Solicitud">INSERTAR PERSONA EN LA BASE DE DATOS</button>
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row" id="oculto2"><!--BUSCAR A PERSONA EN LA BASE DE DATOS-->
        <div class="row"></div>
            <div class="col-2"></div>
            <div class="col-8">
                <form action="buscar_user.php" method="post">
                    <div class="row formulario" style="margin-bottom:5%">
                        <div class="col-6">
                            <h4>Nombre</h4>
                            <input type="text" class="form-control" id="name" name="name" placeholder="nombre">
                            <h4>Primer apellido</h4>
                            <input type="text" class="form-control" id="surname1" name="surname1" placeholder="primer apellido">
                        </div>
                        <div class="col-6">
                            <h4>Segundo apellido</h4>
                            <input type="text" class="form-control" id="surname2" name="surname2" placeholder="segundo apellido">
                            <h4>DNI o NIE</h4>
                            <input type="text" class="form-control" id="id" name="id" placeholder="dni-nie"><br>
                        </div>
                        <div class="col-12">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" id="enviar" value="Enviar Solicitud">BUSCAR PERSONA EN LA BASE DE DATOS</button></div>
                    </div></form></div>
            <div class="col-2"></div>
         </div>
        <div class="row" id="añadido">
            <div class="col-2"></div>
            <div class="col-8 formulario" id="oculto">
                 <form action="añadir_datos_ocupacion.php" method="post">
                  <?php 
     
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		
		              $consulta = 'SELECT COUNT(p.doc_oficial) as total FROM personas p INNER JOIN acuden a ON p.doc_oficial=a.persona INNER JOIN trabajan t ON a.codigo_centro=t.codigo_centro INNER JOIN trabajadores tr ON t.doc_oficial=tr.doc_oficial WHERE tr.email="'.$_SESSION['email'].'"';
                      if ($resultado= mysqli_query($conexion, $consulta)){ 
                        while ($fila = mysqli_fetch_row($resultado))
                        {
                            foreach ($fila as $valor) {
                                //procesar la fila de datos

                                echo '<h2>Hay '.$valor.' personas alojadas en este centro</h2>'; 
                            $total=$valor;
                                global $total;
                            }
                        }}mysqli_close($conexion);
                }

                         $fechaActual = date('Y-m-d');
   
                         echo '<h4>Si la fecha es correcta; haz click para añadir a los datos de ocupación.</h4>';
                         echo '<h4>'.$fechaActual.'</h4>';
                        
                ?>
                        <input type="submit" class="btn btn-primary btn-lg btn-block" id="datosOcupacion" value="Añadir datos de ocupación">
                        </form>
                    </div>
                    <div class="col-6" id="añadido">
                       
            </div>
            <div class="col-2"></div>
        </div>
                     

                    <script type="text/javascript">
                        $(function() {
                            $("#oculto").hide();
                        });
                        $("#contar").click(function() {
                            $("#oculto").toggle();
                        });

                        $(function() {
                            $("#oculto1").hide();
                        });
                        $("#crear").click(function() {
                            $("#oculto1").toggle();
                        });

                        $(function() {
                            $("#oculto2").hide();
                        });
                        $("#buscar").click(function() {
                            $("#oculto2").toggle();
                        });


                        $(function() {
                            $("#oculto").hide();
                        });
                        $("#datosOcupacion").click(function() {
                            $("#oculto").toggle();
                        });

                    </script>

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
