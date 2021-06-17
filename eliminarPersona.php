<?php 
$dni_borrar=$_POST['doc_oficial'];

if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
        
		$consulta ='DELETE FROM acuden WHERE persona="'.$dni_borrar.'"';
       
    if ($resultado= mysqli_query($conexion, $consulta))
		{
    
        header('Location:empleado.php');
    }}
    

?>