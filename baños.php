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
    if(isset($_SESSION['email'])){
      include ('nav1.php');
        
    }else {
       include ('nav2.php');
        
    }
        ?>

        <div class="row">
            <div class="col-2"></div>
            <div class="col-8" style="margin-bottom:5%;">
                <div class="col-12" style="margin-top:10%; ">
                    <h1 style="color: #116272; text-align:center">Baños Públicos<img src="imagenes/ba%C3%B1o.png" width="10%" alt="icono ducha"></h1>

                </div>
                <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN bañospublicos d WHERE codigo_centro=37';
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
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.135715508496!2d-3.705881284936613!3d40.450133079361294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228559205efe1%3A0x5485dcccb1ab62c9!2sCasa%20Publica%20De%20Ba%C3%B1os!5e0!3m2!1ses!2ses!4v1617454796948!5m2!1ses!2ses"  width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN bañospublicos d WHERE codigo_centro=38';
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
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.148728090615!2d-3.70419758493817!3d40.40555587936642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42262cd96e391f%3A0xf58c8a3edaeb5a9c!2sCasa%20de%20ba%C3%B1os!5e0!3m2!1ses!2ses!4v1617454910935!5m2!1ses!2ses"  width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                     <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN bañospublicos d WHERE codigo_centro=39';
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
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.148728090615!2d-3.70419758493817!3d40.40555587936642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42262cd96e391f%3A0xf58c8a3edaeb5a9c!2sCasa%20de%20ba%C3%B1os!5e0!3m2!1ses!2ses!4v1617454975759!5m2!1ses!2ses" width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
		$consulta = 'SELECT nombre, direccion,telf, adaptado, precio FROM centros NATURAL JOIN bañospublicos';
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
