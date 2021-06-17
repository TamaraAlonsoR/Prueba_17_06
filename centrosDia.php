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
                    <h1 style="color: #116272; text-align:center">Centros de día <img src="imagenes/centrodia.png" width="8%" alt="centro de dia"></h1>

                </div>
                <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN centrosdia d WHERE codigo_centro=28';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	} ?>
                        </div>
                        
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.4553919324712!2d-3.6997824847427987!3d40.39876137936726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4226315ecdc5ab%3A0xf51cbe1b5a2a703e!2sCalle%20de%20C%C3%A1ceres%2C%2028045%20Madrid!5e0!3m2!1ses!2ses!4v1617469604684!5m2!1ses!2ses" width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN centrosdia d WHERE codigo_centro=29';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48615.29772846736!2d-3.7326133112380875!3d40.398745512289274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4227937e0e8529%3A0x474fab33be74a510!2zQ8Ohcml0YXMgVmljYXLDrWEgVklJ!5e0!3m2!1ses!2ses!4v1617469684988!5m2!1ses!2ses" width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                 <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN centrosdia d WHERE codigo_centro=30';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	} ?>
                        </div>
                        <div class="col-5"  style="margin-top:2%; margin-bottom:5%" ><iframe class="mapa"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.9796779974477!2d-3.7142528847424447!3d40.40930097936597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4227d774311193%3A0xa3a7573cd1ec1634!2sCalle%20de%20Calatrava%2C%2028005%20Madrid!5e0!3m2!1ses!2ses!4v1617469731190!5m2!1ses!2ses" width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN centrosdia d WHERE codigo_centro=31';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	} ?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.0850145241507!2d-3.6995870847417773!3d40.42911637936376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42288c0f028d01%3A0xc34963001300ddae!2zQ2FsbGUgZGUgSm9zw6kgTWFyYcOxw7NuLCAyODAxMCBNYWRyaWQ!5e0!3m2!1ses!2ses!4v1617469801796!5m2!1ses!2ses"  width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                 <div class="col-12  div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN centrosdia d WHERE codigo_centro=32';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}?>     
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.705924428647!2d-3.7712923847451494!3d40.32668367937566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418a26d5c3b04b%3A0x46f4ce4843e76ba8!2sCalle%20de%20Covadonga%2C%202%2C%2028911%20Legan%C3%A9s%2C%20Madrid!5e0!3m2!1ses!2ses!4v1617469854323!5m2!1ses!2ses"  width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN centrosdia d WHERE codigo_centro=33';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.792671422024!2d-3.7080818847416084!3d40.4355895793629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42285e55de4cbb%3A0xec75b2caae75084e!2sRais%20Fundaci%C3%B3n%20Red%20de%20Apoyo%20A%20la%20Integraci%C3%B3n%20Sociolaboral!5e0!3m2!1ses!2ses!4v1617469945489!5m2!1ses!2ses"  width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN centrosdia d WHERE codigo_centro=34';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.839443864891!2d-3.6981106847416236!3d40.43455397936303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228f3177fc61f%3A0xe8b727e7bd1f3095!2sPaseo%20del%20General%20Mart%C3%ADnez%20Campos%2C%2018%2C%2028010%20Madrid!5e0!3m2!1ses!2ses!4v1617470064209!5m2!1ses!2ses" width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                <div class="col-12">
                <h3 style="color: #116272; text-align:center; margin-top:2%; justify-content: center;">Aquí encontrarás más información al respecto <input class="btn btn-primary" type="button" id="masInfo" value="Más Información"></h3></div>
                
                <div class="col-12" id="oculto" style="margin-bottom:10%;">
                   
                    <?php 
                    
                    echo '<div id="tabla" style="margin-left: 10%;">';
	if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
{
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT nombre, direccion,telf, adaptado, plazas_hombre, plazas_mujer FROM centros NATURAL JOIN centrosdia';
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
					//procesar la fila de datos
                    
					echo '<td id="td">'.$valor.'</td>'; //recorre los elementos de la fila
                  
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
