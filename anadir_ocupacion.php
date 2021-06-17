<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css.css" media="screen" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
    <link href="css/sweetalert.css" rel="stylesheet">
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
<?php 
    $total=$_POST['num'];
    
    $fechaActual=$_POST['fecha'];
    
        //INSETAR DATOS EN DATOS OCUPACION
            
                    if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
	
		          mysqli_set_charset($conexion,'utf8');
        $consulta0='select codigo_centro from trabajan where doc_oficial="'.$_SESSION['doc_oficial'].'"';
        if ($resultado= mysqli_query($conexion, $consulta0)){ 
                        while ($fila = mysqli_fetch_row($resultado))
                        {
                            foreach ($fila as $valor) {
                       
                                    $valor; 
                                    $codigo_centro=$valor;
                                    global $codigo_centro;
                            }
                        }}
		$consulta = "insert into datosocupacion values ('".$codigo_centro."','".$fechaActual."', '".$total."')"; 
        if($resultado = mysqli_query( $conexion, $consulta)){
            echo '<script type="text/javascript">
                
                function alerta(){
                swal({
                   text: "Datos añadidos correctamente.",
                   type: "success",
                 });
                 
                }    alerta();
                    </script>';   
        }
		mysqli_close($conexion);
	}
                   
                        
            
?>
    </div>
 <!--foooter-->
    <div class="row foot p-3 mt-5 pie">
        <div class="col"></div>
        <div class="col-6 text-center">

            <p>Sitio web realizado por <b>Tamara Alonso Rodrigo</b></p>
        </div>
        <div class="col"></div>
    </div>
</body>
</html>