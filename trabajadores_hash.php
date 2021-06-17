<?php 
       $pass1=password_hash("taalon", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (email,password, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('tamara@gmail.com','".$pass1."','47474113C','Tamara','Alonso','Rodrigo', 'mujer','93-01-21','Auxiliar educativo')";
           if($resultado = mysqli_query( $conexion, $consulta)){
              
           }     
   mysqli_close($conexion);

	}
?>
<?php 
       $pass2=password_hash("hola", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (email,password, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('hector@gmail.com','".$pass2."','47474112L','Hector','Sanchez','Rodriguez', 'hombre','89-05-20','Auxiliar educativo')";
           if($resultado = mysqli_query( $conexion, $consulta)){
               
           }     
   mysqli_close($conexion);

	}
?>
<?php 
       $pass3=password_hash("marta20", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (email,password, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('marta@gmail.com','".$pass3."','69544535X','Marta','Alonso','De la hoz', 'mujer','92-05-21','Auxiliar educativo')";
           if($resultado = mysqli_query( $conexion, $consulta)){
              
           }     
   mysqli_close($conexion);

	}
?>
<?php 
       $pass4=password_hash("victoria18", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (email,password, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('victoria@gmail.com','".$pass4."','41848397N','Victoria','Gomez','Rodriguez', 'mujer','94-05-20','Auxiliar educativo')";
           if($resultado = mysqli_query( $conexion, $consulta)){
               
           }     
   mysqli_close($conexion);

	}
?>
<?php 
       $pass5=password_hash("carla30", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (email,password, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('carla30@gmail.com','".$pass5."','08342436Z','Carla','Perez','Martin', 'mujer','95-01-31','Auxiliar educativo')";
           if($resultado = mysqli_query( $conexion, $consulta)){
              
           }     
   mysqli_close($conexion);

	}
?>
<?php 
       $pass6=password_hash("roberG", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (emailpassword, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('robertog@gmail.com','".$pass6."','71038897Q','Roberto','Gonzalez','Rodriguez', 'hombre','80-05-20','Auxiliar educativo')";
           if($resultado = mysqli_query( $conexion, $consulta)){
               
           }     
   mysqli_close($conexion);

	}
?>
<?php 
       $pass7=password_hash("raquelV", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (email,password, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('raquelv@gmail.com','".$pass7."','11737046P','Raquel','Vazquez','Muriel', 'mujer','91-05-21','Auxiliar educativo')";
           if($resultado = mysqli_query( $conexion, $consulta)){
              
           }     
   mysqli_close($conexion);

	}
?>
<?php 
       $pass8=password_hash("pedro45", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (email,password, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('pedro45@gmail.com','".$pass8."','15762314T','Pedro','Sanchez','Rojo', 'hombre','80-05-20','Auxiliar educativo')";
           if($resultado = mysqli_query( $conexion, $consulta)){
               
           }     
   mysqli_close($conexion);

	}
?>


<?php 
       $pass9=password_hash("sonsoEnfermera", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (email,password, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('sonsoles@gmail.com','".$pass9."','88192160V','Sonsoles','Luz','Alumbreros', 'mujer','93-01-21','Auxiliar educativo')";
           if($resultado = mysqli_query( $conexion, $consulta)){
              
           }     
   mysqli_close($conexion);

	}
?>
<?php 
       $pass10=password_hash("maria31", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (email,password, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('maria31@gmail.com','".$pass10."','10544464E','Maria','Aledo','Martinez', 'mujer','89-05-20','Auxiliar educativo')";
           if($resultado = mysqli_query( $conexion, $consulta)){
               
           }     
   mysqli_close($conexion);

	}
?>
<?php 
       $pass11=password_hash("teresa10", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (email,password, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('teresa@gmail.com','".$pass11."','69922233W','Teresa','LLorente','Luna', 'mujer','85-01-21','Auxiliar educativo')";
           if($resultado = mysqli_query( $conexion, $consulta)){
              
           }     
   mysqli_close($conexion);

	}
?>
<?php 
       $pass12=password_hash("luis95", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (email,password, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('luis95@gmail.com','".$pass12."','41459279P','Luis','Sandonis','Aguilera', 'hombre','91-05-20','Auxiliar educativo')";
           if($resultado = mysqli_query( $conexion, $consulta)){
               
           }     
   mysqli_close($conexion);

	}
?>
<?php 
       $pass13=password_hash("Angelacor", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (email,password, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('angelacoor@gmail.com','".$pass13."','60727689F','Angela','Garcia','Rivera', 'mujer','93-01-21','Coordinador')";
           if($resultado = mysqli_query( $conexion, $consulta)){
              
           }     
   mysqli_close($conexion);

	}
?>
<?php 
       $pass14=password_hash("trabajo2020", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (email,password, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('jesusrue@gmail.com','".$pass14."','79957334L','Jesus','Rueda','Rodriguez', 'hombre','89-05-20','Auxiliar educativo')";
           if($resultado = mysqli_query( $conexion, $consulta)){
               
           }     
   mysqli_close($conexion);

	}
?>
<?php 
       $pass15=password_hash("LeyreR", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (email,password, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('leyre@gmail.com','".$pass15."','41326981Y','Leyre','Montoro','Ramirez', 'mujer','93-01-21','Auxiliar educativo')";
           if($resultado = mysqli_query( $conexion, $consulta)){
              
           }     
   mysqli_close($conexion);

	}
?>
<?php 
       $pass16=password_hash("carmen", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (email,password, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('carmen@gmail.com','".$pass16."','31560690K','Carmen','Sanchez','Rodriguez', 'mujer','89-05-20','Auxiliar educativo')";
           if($resultado = mysqli_query( $conexion, $consulta)){
               
           }     
   mysqli_close($conexion);

	}
?>
<?php 
       $pass17=password_hash("WilsonK", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (email,password, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('karina@gmail.com','".$pass17."','Y7654526W','Karina','Wilson','Rodrigo', 'mujer','93-01-21','Auxiliar educativo')";
           if($resultado = mysqli_query( $conexion, $consulta)){
              
           }     
   mysqli_close($conexion);

	}
?>
<?php 
       $pass18=password_hash("Luis34", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (email,password, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('luis34@gmail.com','".$pass18."','70459953M','Luis','Sanchez','Rodriguez', 'hombre','89-05-20','Coordinador')";
           if($resultado = mysqli_query( $conexion, $consulta)){
               
           }     
   mysqli_close($conexion);

	}
?>
<?php 
       $pass20=password_hash("david7", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (email,password, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('david7@gmail.com','".$pass20."','02972189Z','David','Herrero','Rodriguez', 'hombre','93-01-21','Auxiliar educativo')";
           if($resultado = mysqli_query( $conexion, $consulta)){
              
           }     
   mysqli_close($conexion);

	}
?>
<?php 
       $pass21=password_hash("Oscar32", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (email,password, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('osccar32@gmail.com','".$pass21."','08703850Y','Oscar','Sanchez','Perez', 'hombre','89-05-20','Auxiliar educativo')";
           if($resultado = mysqli_query( $conexion, $consulta)){
               
           }     
   mysqli_close($conexion);

	}
?>
<?php 
       $pass22=password_hash("MonicaIt", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (email,password, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('monicaIt@gmail.com','".$pass22."','81752775B','Monica','Lopez','Liz', 'mujer','93-01-21','Auxiliar educativo')";
           if($resultado = mysqli_query( $conexion, $consulta)){
              
           }     
   mysqli_close($conexion);

	}
?>
<?php 
       $pass28=password_hash("pedro", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (email,password, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('pedro_centrodia@gmail.com','".$pass28."','Y1053273W','Pedro','Lopez','Alvarez', 'hombre','93-01-21','Auxiliar educativo')";
           if($resultado = mysqli_query( $conexion, $consulta)){
              
           }     
   mysqli_close($conexion);

	}
?>
<?php 
       $pass50=password_hash("Maria Luisa", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (email,password, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('pedro_comedor@gmail.com','".$pass50."','X2774668V','Maria Luisa','Perez','Alvarez', 'hombre','93-01-21','Auxiliar educativo')";
           if($resultado = mysqli_query( $conexion, $consulta)){
              
           }     
   mysqli_close($conexion);

	}
?>
<?php 
       $pass51=password_hash("administrador", PASSWORD_DEFAULT);
       
if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "INSERT INTO Trabajadores (email,password, doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento, puesto) VALUES ('administrador@gmail.com','".$pass51."','05328067W','Orlando','Mora','García', 'hombre','89-01-21','Administrador')";
           if($resultado = mysqli_query( $conexion, $consulta)){
              
           }     
   mysqli_close($conexion);

	}
?>