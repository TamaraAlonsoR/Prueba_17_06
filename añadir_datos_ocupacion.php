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
                   text: "Datos de ocupación insertados correctamente.",
                   type: "success",
                 });
                 
                }    alerta();
                    </script>';
        }
    
		mysqli_close($conexion);
	}
                ?>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
 </body>
 </html>
   