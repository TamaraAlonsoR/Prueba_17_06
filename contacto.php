<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
     <link rel="stylesheet" type="text/css" href="css.css" media="screen" />
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
        <!--login-->
        <h1 class="titulo_login">Uso exclusivo para trabajadores</h1>
        <div class="row">
           
            <div class="col-3"></div>
            <div class="col-6 login">
               
                <form method="post" action="cont_login.php">
                            <label >Email</label>
                            <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                            <label >Password</label>
                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
                        
                        <button  style="margin-top: 3%" type="submit" class="btn btn-primary btn-lg btn-block">ENTRAR</button>
                    
                </form>
            </div>
            <div class="col-3"></div>
        </div>    
    </div>
   
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
 
</html>

