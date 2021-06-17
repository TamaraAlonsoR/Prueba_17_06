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
        .centros_titulo{
    color: #116272; 
    text-align:center;
}
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
            <div class="col-8" style="margin-bottom:5%">
                <div class="col-12" style="margin-top:12%; ">
                    <h1 class="centros_titulo">Albergues <img src="imagenes/albergue.png" width="8%" alt="literas"></h1>

                </div>
                <div class="col-12 div_12" >
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=1';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	} ?>
                        </div>
                        
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3055.3764248814673!2d-3.6065956847549767!3d40.02237437941287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4205c3d4d129d1%3A0x279b95c6ea5dff80!2sCamino%20del%20Mar%20Chico%2C%2028300%2C%20Madrid!5e0!3m2!1ses!2ses!4v1617474847595!5m2!1ses!2ses" width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy" alt="mapa"></iframe>
                        </div>
                    </div>

                </div>
                <div class="col-12 div_12" >
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=2';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3042.796329222453!2d-3.447297084745893!3d40.30248097937863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd423f095dddc54d%3A0xd1adc996a29f6e21!2sCalle%20Virgen%20del%20Pilar%2C%201%2C%2028500%20Arganda%20del%20Rey%2C%20Madrid!5e0!3m2!1ses!2ses!4v1617473601361!5m2!1ses!2ses"  width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                 <div class="col-12 div_12" >
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=3';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	} ?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.654762585603!2d-3.710282084742222!3d40.4164982793652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422879360dfc11%3A0xbd6974b7e24bcefd!2sCalle%20de%20San%20Felipe%20Neri%2C%204%2C%2028013%20Madrid!5e0!3m2!1ses!2ses!4v1617473639561!5m2!1ses!2ses" width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                <div class="col-12 div_12" >
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=4';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3035.0213547565468!2d-3.643306284740329!3d40.47479257935846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422eeabe7f18f7%3A0xf7c10797903bb0d6!2sCalle%20Mar%20Amarillo%2C%2021%2C%2028033%20Madrid!5e0!3m2!1ses!2ses!4v1617473679080!5m2!1ses!2ses"  width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                 <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=5';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}  ?>
                       
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.1563918013485!2d-3.6836882847418635!3d40.427535779363865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228bd94d7559f%3A0x2abded5497ccd026!2sCl.%20de%20Ayala%2C%2060%2C%2028001%20Madrid!5e0!3m2!1ses!2ses!4v1617473729001!5m2!1ses!2ses"  width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                <div class="col-12 div_12" >
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=6';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}  ?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.2841164059664!2d-3.6250700847419726!3d40.42470727936419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422f7816f80437%3A0x9ad4f6f2e01a2cce!2sAsociaci%C3%B3n%20Jes%C3%BAs%20Caminante!5e0!3m2!1ses!2ses!4v1617473768667!5m2!1ses!2ses" width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                <div class="col-12 div_12" >
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=7';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	} ?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.7033812836644!2d-3.6699634847422393!3d40.415421379365334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4229fbbefaccd5%3A0x794d3b28b8d9a8b5!2sCalle%20Rafael%20Salazar%20Alonso%2C%2017%2C%2028007%20Madrid!5e0!3m2!1ses!2ses!4v1617473814412!5m2!1ses!2ses" width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                <div class="col-12 div_12" >
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=8';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	} ?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48603.257931324806!2d-3.7027942800809717!3d40.4154160760824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228621cb7b2b5%3A0xd2d0f9eac4c11a99!2sAsociaci%C3%B3n%20Realidades!5e0!3m2!1ses!2ses!4v1617473862497!5m2!1ses!2ses"  width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                <div class="col-12 div_12" >
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=9';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	} ?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.835227407622!2d-3.736816184742317!3d40.4125008793656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422807e0098365%3A0xef83540db5af8a28!2sAv.%20de%20Portugal%2C%2028011%20Madrid!5e0!3m2!1ses!2ses!4v1617474024721!5m2!1ses!2ses" width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                 <div class="col-12 div_12" >
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=10';
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
                        <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.1774368860233!2d-3.646117384743326!3d40.38275987936908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4225c8432bff09%3A0xd452f23662af150!2sAv.%20Rafael%20Alberti%2C%2049%2C%2028018%20Madrid!5e0!3m2!1ses!2ses!4v1617474068758!5m2!1ses!2ses" width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-12 div_12" >
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=11';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	} ?>
                        </div>
                        <div class="col-5"  style="margin-top:2%; margin-bottom:5%"><iframe class="mapa"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48600.12866021742!2d-3.783997220898425!3d40.419748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4187ed3ff316b5%3A0xbca8ba15bd571f27!2sCasa%20de%20Campo!5e0!3m2!1ses!2ses!4v1617474117311!5m2!1ses!2ses" width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                 <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=12';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	} ?>
                       
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%"><iframe class="mapa"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.835227407622!2d-3.7368161847423425!3d40.4125008793656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422807e0098365%3A0xef83540db5af8a28!2sAv.%20de%20Portugal%2C%2028011%20Madrid!5e0!3m2!1ses!2ses!4v1617474263124!5m2!1ses!2ses"  width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                <div class="col-12 div_12" >
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=13';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.2584998283633!2d-3.7167843847419415!3d40.425274579364206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42286f0a0f17ad%3A0x53dc75ff2625c537!2sCalle%20de%20Mart%C3%ADn%20de%20los%20Heros%2C%2021%2C%2028008%20Madrid!5e0!3m2!1ses!2ses!4v1617474301407!5m2!1ses!2ses" width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=14';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}  ?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.9310518560487!2d-3.7156985847424284!3d40.41037817936581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4227d82e89cd51%3A0x24d9bd8944c83598!2sCalle%20de%20Calatrava%2C%2042%2C%2028005%20Madrid!5e0!3m2!1ses!2ses!4v1617474339844!5m2!1ses!2ses" width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                <div class="col-12 div_12" >
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=15';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	} ?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3040.059750149324!2d-3.7782381847439503!3d40.36319947937137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4189ae5f17f791%3A0x4a056abe524d2c50!2sCentro%20de%20Acogida%20de%20Baja%20Exigencia%20Puerta%20Abierta!5e0!3m2!1ses!2ses!4v1617474420980!5m2!1ses!2ses" width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=16';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	} ?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.4089382508937!2d-3.6130706847413414!3d40.44408507936192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422fbad9872311%3A0xb2d522d25b25e01b!2sCalle%20Valderrobres%2C%208%2C%2028022%20Madrid!5e0!3m2!1ses!2ses!4v1617474467687!5m2!1ses!2ses"  width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                 <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=17';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3040.9334910060243!2d-3.8296356847445923!3d40.34382137937359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418eb4606afba9%3A0x719a1ba0265f2c39!2sCalle%20Mayor%2C%2083%2C%2028921%20Alcorc%C3%B3n%2C%20Madrid!5e0!3m2!1ses!2ses!4v1617474508031!5m2!1ses!2ses" width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=18';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); 
                    
            echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
            echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
            echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	} ?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.9006306298484!2d-3.7150792847423917!3d40.41105207936569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4227d8270cabc3%3A0x9a2a0d6f6e0fd3a!2sSamur%20Social!5e0!3m2!1ses!2ses!4v1617474554560!5m2!1ses!2ses" width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                 <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=19';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	} ?>
                       
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.201553466428!2d-3.7260402847418836!3d40.42653567936402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42281336f5a921%3A0xc2fc34529f0e67b5!2sPaseo%20del%20Rey%2C%2036%2C%2028008%20Madrid!5e0!3m2!1ses!2ses!4v1617474602872!5m2!1ses!2ses"  width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=20';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.1774368860233!2d-3.646117384743326!3d40.38275987936908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4225c8432bff09%3A0xd452f23662af150!2sAv.%20Rafael%20Alberti%2C%2049%2C%2028018%20Madrid!5e0!3m2!1ses!2ses!4v1617474637860!5m2!1ses!2ses"  width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-12 div_12" >
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=21';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}  ?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.449029823635!2d-3.7139110847420818!3d40.42105497936461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42287af3ce224b%3A0xbdbba3efd240a463!2sPlaza%20de%20la%20Marina%20Espa%C3%B1ola%2C%2012%2C%2028013%20Madrid!5e0!3m2!1ses!2ses!4v1617474671398!5m2!1ses!2ses" width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-12 div_12" >
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=22';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.792671422024!2d-3.7080818847416084!3d40.4355895793629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42285e5649df93%3A0x22d0c483c38a7880!2sC%2F%20de%20Magallanes%2C%2027%2C%2028015%20Madrid!5e0!3m2!1ses!2ses!4v1617474709694!5m2!1ses!2ses" width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=23';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	} ?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.105525680277!2d-3.6403655847418337!3d40.42866217936373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422f6916a84f15%3A0xeb3c19aae2e7cf03!2sCalle%20de%20Pedro%20Antonio%20de%20Alarc%C3%B3n%2C%20104%2C%2028017%20Madrid!5e0!3m2!1ses!2ses!4v1617474746459!5m2!1ses!2ses"  width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                 <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=24';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	} ?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3040.059750149324!2d-3.7782381847439503!3d40.36319947937137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4189ae5f17f791%3A0x4a056abe524d2c50!2sCentro%20de%20Acogida%20de%20Baja%20Exigencia%20Puerta%20Abierta!5e0!3m2!1ses!2ses!4v1617474784776!5m2!1ses!2ses"  width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
                <div class="col-12 div_12">
                    <div class="row">
                        <div class="col-7">
                            <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT c.nombre, c.direccion, c.telf FROM centros c NATURAL JOIN albergues WHERE codigo_centro=25';
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
                    
        echo '<h3 class="nombre">'.$datos['nombre'].'</h3>';
        echo '<h5><img src="imagenes/ubicacion.png" width="3%" alt="icono ubicacion">  '.$datos['direccion'].'</h5>';
        echo '<h5><img src="imagenes/telefono.png" width="3%" alt="icono telefono">  '.$datos['telf'].'</h5>';
        
		mysqli_close($conexion);
	}?>
                        </div>
                        <div class="col-5" style="margin-top:2%; margin-bottom:5%">
                            <iframe class="mapa"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.0850145241507!2d-3.6995870847417773!3d40.42911637936376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42288c0f028d01%3A0xc34963001300ddae!2zQ2FsbGUgZGUgSm9zw6kgTWFyYcOxw7NuLCAyODAxMCBNYWRyaWQ!5e0!3m2!1ses!2ses!4v1617469801796!5m2!1ses!2ses"  width="100%" height="120%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
		$consulta = 'SELECT nombre, direccion,telf, adaptado, plazas_hombre, plazas_mujer FROM centros NATURAL JOIN albergues';
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
					//procesar la fila de datos
                    
					echo '<td id="td">'.$valor.'</td>'; }
                echo '</tr>';
			}echo '</table>';
		}echo '</div>';
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
