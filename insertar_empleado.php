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
    </div>    
</body>
</html>
<?php 

$nombre=$_POST['nombre'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$dni=$_POST['dni'];
$nac=$_POST['nac'];
$sexo=$_POST['sexo'];
$puesto=$_POST['puesto'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$codigo_centro=$_POST['codigo'];
$inicio=$_POST['inicio'];
$fin=$_POST['fin'];
$convenio=$_POST['convenio'];
$salario=$_POST['salario'];
$jornada=$_POST['jornada'];

function validar_email($str)
{
  return (false !== filter_var($str, FILTER_VALIDATE_EMAIL));
}
if (validar_email($email)==false){
    echo '<script type="text/javascript">
                
                function alerta(){
                swal({
                   text: "Email no válido.",
                   type: "error",
                 });
                 
                }    alerta();
                    </script>'; 
}else{
    
 if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
	 mysqli_set_charset($conexion,'utf8');
    $consulta = "INSERT INTO trabajadores (email, password,doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento,puesto) VALUES ('".$email."','".$pass."','".$dni."','".$nombre."', '".$apellido1."', '".$apellido2."', '".$sexo."','".$nac."','".$puesto."')"; 
    
    $consulta1="INSERT INTO trabajan VALUES ('".$codigo_centro."','".$dni."')";
    
    $consulta2="INSERT INTO contratos VALUES ('".$dni."','".$email."','".$inicio."','".$fin."','".$convenio."','".$salario."','".$jornada."')";
    
    
     if ($resultado= mysqli_query($conexion, $consulta) and $resultado1= mysqli_query($conexion, $consulta1) and $resultado2= mysqli_query($conexion, $consulta2)){
        
                    echo '<script type="text/javascript">
                
                function alerta(){
                swal({
                   text: "Empleado grabado correctamente.",
                   type: "success",
                 });
                 
                }    alerta();
                    </script>';   
      
    }
                
}
}


?> 