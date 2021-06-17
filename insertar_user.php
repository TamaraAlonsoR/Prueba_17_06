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
        <div class="row" style="margin-top:30%">

            <?php 
            
function dni($dni){
  $letra = substr($dni, -1);
  $numeros = (int)substr($dni, 0, -1);
  $valido;
  if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
    $valido=true;
  }else{
    $valido=false;
  }
}
function cif_validation ($cif) {
  $cif = strtoupper($cif);
  if (preg_match('~(^[XYZ\d]\d{7})([TRWAGMYFPDXBNJZSQVHLCKE]$)~', $cif, $parts)) {
    $control = 'TRWAGMYFPDXBNJZSQVHLCKE';
    $nie = array('X', 'Y', 'Z');
    $parts[1] = str_replace(array_values($nie), array_keys($nie), $parts[1]);
    $cheksum = substr($control, $parts[1] % 23, 1);
    return ($parts[2] == $cheksum);
  } elseif (preg_match('~(^[ABCDEFGHIJKLMUV])(\d{7})(\d$)~', $cif, $parts)) {
    $checksum = 0;
    foreach (str_split($parts[2]) as $pos => $val) {
      $checksum += array_sum(str_split($val * (2 - ($pos % 2))));
    }
    $checksum = ((10 - ($checksum % 10)) % 10);
    return ($parts[3] == $checksum);
  } elseif (preg_match('~(^[KLMNPQRSW])(\d{7})([JABCDEFGHI]$)~', $cif, $parts)) {
    $control = 'JABCDEFGHI';
    $checksum = 0;
    foreach (str_split($parts[2]) as $pos => $val) {
      $checksum += array_sum(str_split($val * (2 - ($pos % 2))));
    }
    $checksum = substr($control, ((10 - ($checksum % 10)) % 10), 1);
    return ($parts[3] == $checksum);
  }
  return false;
}
            
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
}
$nombre=$_POST['nombre'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$dni=$_POST['dni'];
$nac=$_POST['nac'];
$sexo=$_POST['sexo'];
$nacionalidad=$_POST['nacionalidad'];
$empadronamiento=$_POST['empadronado'];
$ec=$_POST['ec'];
   
if(cif_validation ($dni)==false && dni($dni)==false){
    echo '<script type="text/javascript">
                
                function alerta(){
                
                swal({
                   text: "DNI o NIE incorrecto.",
                   type: "error",
                 });
                 
                }    alerta();
                    </script>';
   
    
    
}else{   
    if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
	
		          mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO personas (doc_oficial, nombre, apellido1, apellido2, sexo, nacionalidad, empadronamiento, equipo_calle, fecha_nacimiento) VALUES ('".$dni."','".$nombre."', '".$apellido1."', '".$apellido2."', '".$sexo."', '".$nacionalidad."','".$empadronamiento."','".$ec."','".$nac."')"; 
        if($resultado = mysqli_query( $conexion, $consulta)){
             
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		          mysqli_set_charset($conexion,'utf8');
                  $consulta2="INSERT INTO acuden VALUES ('".$dni."','".$codigo_centro."')";
                if ($resultado= mysqli_query($conexion, $consulta2)){ 
                     echo '<script type="text/javascript">
                
                function alerta(){
                
                swal({
                   text: "Persona grabada correctamente.",
                   type: "success",
                 });
                 
                }    alerta();
                    </script>';
                }
        }
        }mysqli_close($conexion);
        }
}
        ?>
        </div>
    </div>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
