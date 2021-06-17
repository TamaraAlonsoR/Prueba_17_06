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

        /****/

    </style>
</head>

<body>
    <div class="container-fluid" style="margin-bottom: 5%">
        <?php 
    session_start();
    if(isset($_SESSION['email'])){
      include ('nav1.php');
        
    }else {
       include ('nav2.php');
        
    }
        ?>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8" style="margin-top:10%">
                <input class="btn btn-primary btn-lg btn-block" type="button" id="eliminar" value="Eliminar empleado">
                <input class="btn btn-primary btn-lg btn-block" type="button" id="insertar" value="Insertar empleado">
                <input class="btn btn-primary btn-lg btn-block" type="button" id="voluntario" value="Añadir voluntario a recurso">
                <form action="cont_estadisticas.php" method="post" style="margin-top:0.5%">
                <input class="btn btn-primary btn-lg btn-block" type="submit" name="extraer" value="Extraer estadísticas">
                </form>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row" id="oculto1">
            <div class="col-2"></div>
            <div class="col-8" style="margin-top:5%;margin-left: auto; margin-right: auto">
                 <?php 

                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT codigo_empleado,doc_oficial, nombre, apellido1, apellido2,fecha_nacimiento,sexo,puesto FROM trabajadores ORDER BY nombre ASC';
		if ($resultado= mysqli_query($conexion, $consulta))
		{	
			echo '<table>';
         
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
               echo '<form action="eliminarEmpleado.php" method="post">';
               echo '<input type="hidden" id="doc_oficial" name="doc_oficial" value='.$fila[1].'>';
               echo '<td id="td"><input class="btn btn-outline-primary" type="submit" value="Eliminar empleado"></td>';
            echo '</form>';
			}}echo '</table>';
		}
        

		mysqli_close($conexion);    
            ?>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row" id="oculto2">
            <div class="col-2"></div>
            <div class="col-8">
                <form action="insertar_empleado.php" method="post">
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
                            <input type="text" class="form-control" id="nac" name="nac" placeholder="Fecha nacimiento YYYYMMDD">
                            <h4>Sexo</h4>
                            <input type="text" class="form-control" id="sexo" name="sexo" placeholder="sexo">
                            <h4>Puesto</h4>
                            <input type="text" class="form-control" id="puesto" name="puesto" placeholder="puesto">

                        </div>
                        <div class="col-6">
                            
                            <h4>Email</h4>
                            <input type="text" class="form-control" id="email" name="email" placeholder="email">
                            <h4>Contraseña</h4>
                            <input type="text" class="form-control" id="pass" name="pass" placeholder="Contraseña">
                            <h4>Código del centro en el que trabajan</h4>
                            <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código del centro de trabajo">
                            <h4>Fecha Inicio</h4>
                            <input type="text" class="form-control" id="inicio" name="inicio" placeholder="Fecha inicio YYYYMMDD">
                            <h4>Fecha Fin</h4>
                            <input type="text" class="form-control" id="fin" name="fin" placeholder="Fecha Fin YYYYMMDD">
                            <h4>Convenio</h4>
                            <input type="text" class="form-control" id="convenio" name="convenio" placeholder="Convenio">
                            <h4>Salario</h4>
                            <input type="text" class="form-control" id="salario" name="salario" placeholder="Salario">
                            <h4>Jornada laboral</h4>
                            <input type="text" class="form-control" id="jornada" name="jornada" placeholder="Jornada">
                            
                        </div>
                        <div class="col-12" style="margin-top:1%; text-align:center">
                            <button class="btn btn-primary btn-lg btn-block" type="submit" id="enviar" value="Enviar">INSERTAR EMPLEADO EN LA BASE DE DATOS</button>
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row" id="oculto3">
            <div class="col-2"></div>
            <div class="col-8" style="margin-top:2%">
               <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
                    $consulta='Select * FROM peticiones';
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
               echo '<form action="eliminarVoluntario.php" method="post">';
               echo '<input type="hidden" id="doc_oficial" name="doc_oficial" value='.$fila[3].'>';
               echo '<td id="td"><input class="btn btn-outline-primary" type="submit" value="Eliminar petición"></td>';
            echo '</form>';
			}}echo '</table>';
                    mysqli_close($conexion);  
		}
                ?>
                <form action="insertar_voluntario.php" method="post">
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

                        </div>
                        <div class="col-6">
                            
                            <h4>Email</h4>
                            <input type="text" class="form-control" id="email" name="email" placeholder="email">
                            <h4>Teléfono</h4>
                            <input type="text" class="form-control" id="tlfn" name="tlfn" placeholder="telefono">
                            <h4>Código del centro en el que colaboran</h4>
                            <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código del centro de trabajo">
                           
                            
                        </div>
                        <div class="col-12" style="margin-top:1%; text-align:center">
                            <button class="btn btn-primary btn-lg btn-block" type="submit" id="enviar" value="Enviar">INSERTAR VOLUNTARIO EN LA BASE DE DATOS</button>
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row" id="oculto4">
            <div class="col-2"></div>
            <div class="col-8"></div>
            <div class="col-2"></div>
        </div>
        <script type="text/javascript">
            $(function() {
                $("#oculto1").hide();
            });
            $("#eliminar").click(function() {
                $("#oculto1").toggle();
            });

            $(function() {
                $("#oculto2").hide();
            });
            $("#insertar").click(function() {
                $("#oculto2").toggle();
            });

            $(function() {
                $("#oculto3").hide();
            });
            $("#voluntario").click(function() {
                $("#oculto3").toggle();
            });

            $(function() {
                $("#oculto4").hide();
            });
            $("#extraer").click(function() {
                $("#oculto4").toggle();
            });

        </script>
        <script src="js/jquery-3.5.1.slim.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </div>

</body>

</html>
