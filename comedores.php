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
        .mapa{
            border-top: 1px solid cadetblue; border-bottom: 1px solid cadetblue;border-left: 1px solid cadetblue; border-right: 1px solid cadetblue;
        }
        .nombre{
            color: #116272; margin-top:10%; 
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
        
         <div class="row">
            <div class="col-2"></div>
            <div class="col-8" style="margin-bottom:5%">
                <div class="col-12" style="margin-top:12%; ">
                    <h1 style="color: #116272; text-align:center">Comedores Sociales <img src="imagenes/comedores.png" width="8%" alt="cubiertos"></h1>

                </div>
                <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN comedoressociales d WHERE codigo_centro=45';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}
              
                ?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.077879378865!2d-3.6989248847418104!3d40.4292743793637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42288c16868023%3A0xb835ed2b2e959d3c!2zQ2FsbGUgZGUgSm9zw6kgTWFyYcOxw7NuLCAxNUUsIDI4MDEwIE1hZHJpZA!5e0!3m2!1ses!2ses!4v1617451641821!5m2!1ses!2ses" width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN comedoressociales d WHERE codigo_centro=46';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.9686861953833!2d-3.626340584741717!3d40.43169227936335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422f7434a3f23d%3A0x881283ebdbe094c4!2sComedor%20Social%20-%20Virgen%20de%20la%20Candelaria%20-%20Orden%20de%20Malta%20Espa%C3%B1a!5e0!3m2!1ses!2ses!4v1617451764227!5m2!1ses!2ses"   width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                 <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN comedoressociales d WHERE codigo_centro=47';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}
                
                ?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.8073977276736!2d-3.8713577847452094!3d40.324431879375986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418dd5bf10507b%3A0xcce9b9a621e6851e!2sAsociaci%C3%B3n%20Hermandad%20San%20Sim%C3%B3n%20de%20Rojas!5e0!3m2!1ses!2ses!4v1617451849230!5m2!1ses!2ses"width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN comedoressociales d WHERE codigo_centro=48';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}  ?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.5776092717474!2d-3.77257998474506!3d40.32953097937536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418989de921f6f%3A0xcffeb7bd82d3b650!2sAsoc%20Ben%C3%A9fica%20Madre%20de%20la%20Alegr%C3%ADa%20de%20Legan%C3%A9s!5e0!3m2!1ses!2ses!4v1617452001165!5m2!1ses!2ses"  width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                 <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN comedoressociales d WHERE codigo_centro=49';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}    ?>   </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.098503273464!2d-3.7043356847425235!3d40.40666857936621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42262cb8695593%3A0xc52d6dcd788b0634!2sCalle%20del%20Mes%C3%B3n%20de%20Paredes%2C%2078%2C%2028012%20Madrid!5e0!3m2!1ses!2ses!4v1617452079345!5m2!1ses!2ses" width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN comedoressociales d WHERE codigo_centro=50';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}
        
                ?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.146620178936!2d-3.7533422847425797!3d40.405602579366345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418805cd564533%3A0xcc4a02f38f8fc599!2sCalle%20Seraf%C3%ADn%20de%20As%C3%ADs%2C%207A%2C%2028011%20Madrid!5e0!3m2!1ses!2ses!4v1617452253253!5m2!1ses!2ses"  width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                <div class="col-12">
                <h3 style="color: #116272; text-align:center; margin-top:2%; justify-content: center;">Aquí encontrarás más información al respecto <input class="btn btn-primary" type="button" id="masInfo" value="Más Información"></h3>
                
                <div class="col-12" id="oculto" style="margin-bottom:10%;">
                   
                    <?php 
                    
                    echo '<div id="tabla" style="margin-left: 10%;">';
	if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT nombre, direccion,telf, adaptado, plazas FROM centros NATURAL JOIN comedoressociales';
		if ($resultado= mysqli_query($conexion, $consulta))
		{	//recorrer en un bucle todas las filas que salen del resultado de la consulta
			echo '<table >';
         
            $cabecera=mysqli_fetch_fields($resultado); //devuelve la cabecera en un array de objetos
            echo '<tr id="celdas">';
            foreach ($cabecera as $valor){
                echo '<th id="celdas">'.$valor->name.'</th>';
            }echo '</tr>';
            
            while ($fila = mysqli_fetch_row($resultado)){
               
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
