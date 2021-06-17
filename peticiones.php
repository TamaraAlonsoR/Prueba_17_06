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
$colaborar=$_POST['colaborar'];
$preferencias=$_POST['preferencias'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
        
function validar_email($str)
{
  return (false !== filter_var($str, FILTER_VALIDATE_EMAIL));
}
        
if (validar_email($email)==false){
     echo '<script type="text/javascript">
                
                function alerta(){
                swal({
                   text: "Email no válido. Revise el formulario",
                   type: "error",
                 });
                 
                }    alerta();
                    </script>'; 
}else{
       
       if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "insert into peticiones values ('".$nombre."', '".$apellido1."', '".$apellido2."', '".$dni."', '".$colaborar."', '".$preferencias."', '".$email."', '".$telefono."')"; 
        if($resultado = mysqli_query( $conexion, $consulta)){
           echo '<p style="margin-top:20%;font-size:30px;color: #116272; text-align:center">Formulario enviado. Nos pondremos en contacto con usted lo antes posible. Muchas gracias</p>';
            
	}  
       }
   
   
}
   
?>
</div>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    
</body>
</html>