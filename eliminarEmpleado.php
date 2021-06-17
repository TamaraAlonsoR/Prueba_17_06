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
$dni_borrar=$_POST['doc_oficial'];

if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
        
		$consulta ='DELETE FROM trabajadores WHERE doc_oficial="'.$dni_borrar.'"';
        $consulta1='DELETE FROM trabajan WHERE doc_oficial="'.$dni_borrar.'"';
        $consulta2='DELETE FROM contratos WHERE doc_oficial="'.$dni_borrar.'"';
       
    if ($resultado= mysqli_query($conexion, $consulta) and $resultado1= mysqli_query($conexion, $consulta1) and $resultado2= mysqli_query($conexion, $consulta2)){
        
		echo '<script type="text/javascript">
                
                function alerta(){
                swal({
                   text: "Empleado eliminado.",
                   type: "success",
                 });
                 
                }    alerta();
                    </script>';   
      
    } }
?>
    </div>
    <!--foooter-->
    <div class="row foot p-3 mt-5 pie">
        <div class="col"></div>
        <div class="col-6 text-center">

            <p>Sitio web realizado por <b>Tamara Alonso Rodrigo</b></p>
        </div>
        <div class="col"></div>
        <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    </div>
</body>
</html>
