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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
    <link href="css/sweetalert.css" rel="stylesheet">
</head>
<body>
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
      $nombre=$_POST['name'];
    $apellido1=$_POST['surname1'];
     $apellido2=$_POST['surname2'];
    $dni=$_POST['id'];
    
    if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta ='SELECT codigo_centro FROM trabajan WHERE doc_oficial="'.$_SESSION['doc_oficial'].'"';
         if ($resultado= mysqli_query($conexion, $consulta))
		{	
             while ($fila = mysqli_fetch_row($resultado)) { 
				foreach ($fila as $valor) {
					$valor; 
                    $centro=$valor;
                    global $centro;
				}
             }
         } 
    }
    
     if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
        $consulta1='SELECT doc_oficial FROM personas WHERE doc_oficial="'.$dni.'"';
        $resultado1= mysqli_query($conexion, $consulta1);
        if ($resultado1->num_rows > 0){
            
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		      mysqli_set_charset($conexion,'utf8');
              $consulta2="INSERT INTO acuden (persona, codigo_centro) VALUES ('".$dni."','".$centro."')";
                if($resultado2 = mysqli_query( $conexion, $consulta2)){
                    echo '<script type="text/javascript">
                
                function alerta(){
                swal({
                   text: "Se encontró la persona en la base de datos y se añadió al listado.",
                   type: "success",
                 });
                 
                }    alerta();
                    </script>';
                }
            }
        }else {
                        echo '<script type="text/javascript">
                
                function alerta(){
                swal({
                   text: "No se encontró a esta persona en la base de datos. Por favor, grabe los datos de esta persona.",
                   type: "error",
                 });
                 
                }    alerta();
                    </script>';
                } 
     }
        
    
    
     mysqli_close($conexion); 
    ?>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
     <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>