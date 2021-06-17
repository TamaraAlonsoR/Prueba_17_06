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
$nombre=$_POST['nombre'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$dni=$_POST['dni'];
$email=$_POST['email'];
$codigo_centro=$_POST['codigo'];
$tlfn=$_POST['tlfn'];



if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
$consulta = "INSERT INTO voluntarios (doc_oficial, codigo_centro, nombre, apellido1, apellido2,telf, email) VALUES ('".$dni."','".$codigo_centro."', '".$nombre."', '".$apellido1."', '".$apellido2."', '".$tlfn."','".$email."')"; 

        if($resultado = mysqli_query( $conexion, $consulta)){
             echo '<script type="text/javascript">
                
                function alerta(){
                
                swal({
                   text: "Voluntario grabado correctamente.",
                   type: "success",
                 });
                 
                }    alerta();
                    </script>';
        }else {
            echo '<script type="text/javascript">
                
                function alerta(){
                
                swal({
                   text: "Voluntario no grabado. Vuelve a insertar los datos.",
                   type: "error",
                 });
                 
                }    alerta();
                    </script>';
        }
}
?>
 <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>