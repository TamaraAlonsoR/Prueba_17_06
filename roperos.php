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
        .div_12{
            margin-top:2%; background-color:beige;border-top: 3px solid cadetblue; border-bottom: 3px solid cadetblue;border-left: 3px solid cadetblue; border-right: 3px solid cadetblue;
        }
        .nombre{
            color: #116272; margin-top:10%; 
        }
        .mapa{
            border-top: 1px solid cadetblue; border-bottom: 1px solid cadetblue;border-left: 1px solid cadetblue; border-right: 1px solid cadetblue;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
         <!-- barra navegacion-->
        <?php 
    session_start();
    if(isset($_SESSION['codigo_empleado'])){
      include ('nav1.php');
        
    }else {
       include ('nav2.php');  
    }
        ?>

        <div class="row">
            <div class="col-2"></div>
            <div class="col-8" style="margin-bottom:5%;">
                <div class="col-12" style="margin-top:10%; ">
                    <h1 style="color: #116272; text-align:center">Roperos  <img src="imagenes/ropero.png" width="10%" alt="icono ropa"></h1>

                </div>
                <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN roperos d WHERE codigo_centro=40';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}   ?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.100141659198!2d-3.7050448849365614!3d40.45092047936124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42285583d9a3df%3A0x1c56e9636a08fdd7!2sColegio%20San%20Antonio!5e0!3m2!1ses!2ses!4v1617453943616!5m2!1ses!2ses" width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN roperos d WHERE codigo_centro=41';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}   ?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.3763164616767!2d-3.7056873849375775!3d40.42266537936443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42287d49692bbf%3A0xe11ffae5cfd3cef6!2sReal%20Hermandad%20del%20Refugio!5e0!3m2!1ses!2ses!4v1617453996161!5m2!1ses!2ses"  width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                 <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN roperos d WHERE codigo_centro=42';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}   ?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.740572906784!2d-3.6972947849370685!3d40.43674307936276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228f3b1bcf98d%3A0x74356a638ec87b84!2sBas%C3%ADlica%20Parroquia%20La%20Milagrosa!5e0!3m2!1ses!2ses!4v1617454046117!5m2!1ses!2ses" width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN roperos d WHERE codigo_centro=43';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}  ?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.7843586813046!2d-3.670077984938651!3d40.39147167936804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422673796369b9%3A0x9fbf93f8042bff8!2sCapilla%20de%20la%20Obra%20Social%20Santa%20Mar%C3%ADa%20Josefa%20Siervas%20de%20Jes%C3%BAs%20de%20la%20Caridad!5e0!3m2!1ses!2ses!4v1617454131304!5m2!1ses!2ses"  width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div></div>
                    <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN roperos d WHERE codigo_centro=44';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	} ?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.146620178935!2d-3.7533422849381792!3d40.40560257936636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418805cd564533%3A0xcc4a02f38f8fc599!2sCalle%20Seraf%C3%ADn%20de%20As%C3%ADs%2C%207A%2C%2028011%20Madrid!5e0!3m2!1ses!2ses!4v1617454182848!5m2!1ses!2ses"  width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
</div>
                <div class="col-12">
                <h3 style="color: #116272; text-align:center; margin-top:2%; justify-content: center;">Aquí encontrarás más información al respecto <input class="btn btn-primary" type="button" id="masInfo" value="Más Información"></h3>
                
                <div class="col-12" id="oculto" style="margin-bottom:10%;">
                   
                    <?php 
                    
                    echo '<div id="tabla" style="margin-left: 10%;">';
	if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
{
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT nombre, direccion,telf, adaptado FROM centros NATURAL JOIN roperos';
		if ($resultado= mysqli_query($conexion, $consulta))
		{	//recorrer en un bucle todas las filas que salen del resultado de la consulta
			echo '<table >';
         
            $cabecera=mysqli_fetch_fields($resultado); //devuelve la cabecera en un array de objetos
            echo '<tr id="celdas">';
            foreach ($cabecera as $valor){
                echo '<th id="celdas">'.$valor->name.'</th>';
            }
            echo '</tr>';
            
            while ($fila = mysqli_fetch_row($resultado))
			//while ($fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC))
            {
               
                echo '<tr>';
				foreach ($fila as $valor) {
					echo '<td id="td">'.$valor.'</td>'; 
				}
                
                echo '</tr>';
				
			}echo '</table>';
		}
        echo '</div>';
		mysqli_close($conexion);
	}
                    ?>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
        <script type="application/javascript">
            $(function() {
            $("#oculto").hide();
        });
        $("#masInfo").click(function() {
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
