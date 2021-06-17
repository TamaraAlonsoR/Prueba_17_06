<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
session_start();
    if(isset($_SESSION['email'])){
      include ('nav1.php');
        
    }else {
       include ('nav2.php');
        
    }
    
    if( $conexion = mysqli_connect('localhost','root', '','homeless')){
       mysqli_set_charset($conexion, 'utf8');
       $consulta= 'select codigo_centro from trabajan where doc_oficial="'.$_SESSION['doc_oficial'].'"';
       if ($resultado=mysqli_query($conexion, $consulta)){//solo puede haber una fila
            if(mysqli_num_rows($resultado)){ 
               $fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC);
                $codigo_centro=$fila['codigo_centro'];
            }}}
               
                if($codigo_centro<=25 and $codigo_centro>=1 ){
                    header('Location:empleado.php');
                }elseif($codigo_centro>=28 and $codigo_centro<=34 ){
                    header('Location:empleado_centrodia.php');
                }elseif($codigo_centro<=50 and $codigo_centro>=45 ){
                    header('Location:empleado_comedorsocial.php');
                } elseif($codigo_centro==0){
                    header('Location:administrador.php');
                    
                }
?>

</body>
</html>
