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
</head>

<body>
    <div class="container-fluid">
        <!-- barra navegacion-->
        <?php 
    session_start();
    if(isset($_SESSION['codigo_empleado'])){
      include ('nav1.php');
        
    }else {
       include ('nav2.php');
        
    }
        ?>
        <h1 class="text-center titulo" style="margin-top:5%">Aquí encontrarás información sobre tu contrato. Si tiene cualquier duda; póngase en contacto con el departamente de recursos humanos de su empresa.</h1>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8" style="margin-left:15%">
                <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT * FROM contratos WHERE email="'.$_SESSION['email'].'"';
                if ($resultado= mysqli_query($conexion, $consulta))
		{	
			echo '<table >';
         
            $cabecera=mysqli_fetch_fields($resultado); //devuelve la cabecera en un array de objetos
            echo '<tr id="celdas">';
            foreach ($cabecera as $valor){
                echo '<th id="celdas">'.$valor->name.'</th>';
                
            }
            echo '</tr>';
           while ($fila = mysqli_fetch_row($resultado))
            {
                 echo '<tr>';
				foreach ($fila as $valor) {
					echo '<td id="td">'.$valor.'</td>'; 
				}
            
			}}echo '</table>';
		}
		mysqli_close($conexion); 
                    
		?>

            </div>
            <div class="col-2"></div>

        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8" style="margin-top:2%">
               <button class="btn btn-primary btn-lg btn-block" type="submit" id="convenio" value="convenio">Ver convenio</button>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <!--CONVENIO-->
            <div class="col-8" id="oculto" style="margin-bottom:20%">
                <?php 
              if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		
		              $consulta = 'SELECT convenio FROM contratos WHERE email="'.$_SESSION['email'].'"';
                      $resultado= mysqli_query($conexion, $consulta);
		              $datos= $resultado -> fetch_assoc(); 
                  echo '<h4 class="text-center titulo">Aquí puedes revisar el convenio de su contrato:</h4>';
                        $convenio=$datos['convenio'];
                  if($convenio=="Convenio1"){
                      echo '<embed src="docs/convenio1.pdf" type="application/pdf" width="100%" height="600px" />';
                      
                  }elseif ($convenio=="Convenio2"){
                      echo '<embed src="docs/convenio2.pdf" type="application/pdf" width="100%" height="600px" />';
                      
                  }elseif($convenio=="Convenio3"){
                      echo '<embed src="docs/convenio3.pdf" type="application/pdf" width="100%" height="600px" />';
         
                  }
                }
              
              ?>


            </div>
            <div class="col-2"></div>

        </div>
        

    </div>
    <script type="text/javascript">
        $(function() {
            $("#oculto").hide();
        });
        $("#convenio").click(function() {
            $("#oculto").toggle();
        });
        
       

    </script>
   
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>