<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
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

if ($_POST['email']=="" || $_POST['pass']==""){
    echo '<script type="text/javascript">
                
                function alerta(){
                swal({
                   text: "Usuario o clave en blanco.",
                   type: "error",
                 });
                 
                }    alerta();
                    </script>'; 
     
    session_start();
    if(isset($_SESSION['email'])){
      include ('nav1.php');
        
    }else {
       include ('nav2.php');
        
    }
    
}else{
    
   if( $conexion = mysqli_connect('localhost','root', '','homeless')){
       mysqli_set_charset($conexion, 'utf8');
       $email=$_POST['email'];
       $clave=$_POST['pass'];
       $consulta= 'select codigo_empleado, doc_oficial, nombre, password,email from trabajadores where email="'.$email.'"';
       if ($resultado=mysqli_query($conexion, $consulta)){//solo puede haber una fila
            if(mysqli_num_rows($resultado)){ 
               $fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC);
               $claveHasheada=$fila['password'];
               $clave=$_POST['pass'];
              

               if(password_verify($clave, $fila['password'])){
                   
                   session_start();
                   
                   $_SESSION['codigo_empleado']=$fila['codigo_empleado'];
                   $_SESSION['nombre']=$fila['nombre'];
                   $_SESSION['email']=$fila['email'];
                   $_SESSION['doc_oficial']=$fila['doc_oficial']; 
               
                 
            if( $conexion = mysqli_connect('localhost','root', '','homeless')){
       mysqli_set_charset($conexion, 'utf8');
       $consulta= 'select codigo_centro from trabajan where doc_oficial="'.$_SESSION['doc_oficial'].'"';
       if ($resultado=mysqli_query($conexion, $consulta)){//solo puede haber una fila
            if(mysqli_num_rows($resultado)){ 
               $fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC);
                $codigo_centro=$fila['codigo_centro'];
            }}}
        
               
                if($codigo_centro<=34 and $codigo_centro>=1 ){
                    header('Location:empleado.php');
                }elseif($codigo_centro<=50 and $codigo_centro>=45 ){
                    header('Location:empleado_comedorsocial.php');
                } else{
                    header('Location:administrador.php');
               }
            
       }
            else{
                include ('nav2.php');
     
                    echo '<script type="text/javascript">
                
                function alerta(){
                swal({
                   text: "Contraseña incorrecta.",
                   type: "error",
                 });
                 
                }    alerta();
                    </script>'; 
                }
            }
        
         }
     
       mysqli_close($conexion); 
   }}
    
?>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    </div>
</body>
</html>