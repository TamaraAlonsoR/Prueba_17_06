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
    <style>
        #main-content {

            max-width: 800px;
            margin: 20px auto;
            box-shadow: 0 0 10px #81ADB6;
            padding: 2%;
        }
        #global {
            height: 500px;
            width: 100%;
            border: 2px solid #81ADB6;
            background: #E2F2F5;
            overflow-y: scroll;
            margin-bottom: 10%;
        }
        /*scrollbar*/
        ::-webkit-scrollbar {
            width: 15px;
        }

        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
        }
        ::-webkit-scrollbar-thumb {
            background: #81ADB6;
            border-radius: 10px;  
        }
        ::-webkit-scrollbar-thumb:hover {
            background: cadetblue;
        }
    </style>

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
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="row">

                    <div class="col-12" /style="margin-top:8%;text-align:center; justify-content:center;color:#116272; ">
                        <section id="main-content">

                            <article>
                                <header>

                                    <h1>Aquí encontrarás noticias relacionadas con los recursos de la Comunidad de Madrid.</h1>
                                </header>

                            </article>

                        </section>

                    </div>
                    <!--global-->
                    <div class="col-12" id="global">
                        <div class="col-12"><br></div>
                        <div class="col-12" style="background-color:beige;border-top: 3px solid cadetblue; border-bottom: 3px solid cadetblue;border-left: 3px solid cadetblue; border-right: 3px solid cadetblue;">
                            <div class="row">
                                <div class="col-3" style="margin-top: 4%">
                                    <img src="imagenes/noticia6.jpg" alt="manifestación" width="100%">
                                </div>
                                <div class="col-9">
                                    <h3 style="color: #116272; margin-top:2%; ">Los albergues madrileños cierran antes de lo previsto “dejando en la calle a personas vulnerables”</h3>
                                    <p>El grupo 5 Acción Gestión Social S.A.U acabó la Campaña de Frío el pasado 31 de marzo. Los trabajadores sociales denuncian que iban a estar abiertos hasta el día 9, coincidiendo con el fin del Estado de Alarma, pero “todo cambió sin explicación de un día para otro”.</p>
                                    <form style="margin-left:80%" action="https://www.elsaltodiario.com/personas-sin-hogar/albergues-madrilenos-cierran-antes-previsto-dejando-calle-personas-vulnerables">
                                        <button type="submit" class="btn btn-outline-info">Leer noticia</button>
                                    </form><br>
                                </div>
                            </div>

                        </div>

                        <div class="col-12"><br></div>
                        <div class="col-12" style="background-color:beige;border-top: 3px solid cadetblue; border-bottom: 3px solid cadetblue;border-left: 3px solid cadetblue; border-right: 3px solid cadetblue;">
                            <div class="row">
                                <div class="col-9" style="margin-top: 2%">
                                    <h3 style="color: #116272; margin-top:2%; ">Los comedores sociales de Madrid, un salvavidas para miles de madrileños en Navidad</h3>
                                    <p>Los comedores sociales se han convertido en un recurso clave para cientos de personas en Madrid y su región. Si su labor resultó fundamental tras el aumento de la pobreza extrema, a raíz de la crisis económica de 2008, con la actual crisis sanitaria provocada por el coronavirus se han convertido en un socorro vital ante la "escasez de ayudas oficiales". Ahora que llega la Navidad también jugarán un papel fundamental.</p>
                                    <form style="margin-left:80%" action="https://www.telemadrid.es/noticias/madrid/Miles-madrilenos-Navidad-comedores-sociales-0-2294170587--20201209110100.html">
                                        <button type="submit" class="btn btn-outline-info">Leer noticia</button>
                                    </form><br>

                                </div>
                                <div class="col-3" style="margin-top: 4%">
                                    <img src="imagenes/noticia5.jpg" alt="persona recogiendo comida" width="100%">
                                </div>
                            </div>

                        </div>
                        <div class="col-12"><br></div>
                        <div class="col-12" style="background-color:beige;border-top: 3px solid cadetblue; border-bottom: 3px solid cadetblue;border-left: 3px solid cadetblue; border-right: 3px solid cadetblue;">
                            <div class="row">
                                <div class="col-3" style="margin-top: 4%">
                                    <img src="imagenes/noticia%204.jpeg" alt="familia en situación de calle" width="100%">
                                </div>
                                <div class="col-9">
                                    <h3 style="color: #116272; margin-top:2%; ">LOS ESTRAGOS DE LA PANDEMIA EN MADRID. El Ayuntamiento de Madrid, en el punto de mira de asociaciones ciudadanas: "Están quitando todo lo social"</h3>
                                    <p>Con la pobreza avanzando tras cada ola de la pandemia, el Consistorio madrileño se muestra incapaz de atender la creciente demanda de dos derechos básicos: techo y comida. Colectivos sociales y de vivienda denuncian que no es sólo un problema de falta de medios, sino también de gestión.</p>
                                    <form style="margin-left:80%" action="https://www.publico.es/sociedad/estragos-pandemia-madrid-ayuntamiento-madrid-punto-mira-asociaciones-ciudadanas-quitando-social.html">
                                        <button type="submit" class="btn btn-outline-info">Leer noticia</button>
                                    </form><br>
                                </div>
                            </div>

                        </div>

                        <div class="col-12"><br></div>


                        <div class="col-12" style="background-color:beige;border-top: 3px solid cadetblue; border-bottom: 3px solid cadetblue;border-left: 3px solid cadetblue; border-right: 3px solid cadetblue;">
                            <div class="row">
                                <div class="col-9" style="margin-top: 2%">
                                    <h3 style="color: #116272; margin-top:2%; ">Se mantienen las colas del hambre en Madrid después de un año de pandemia</h3>
                                    <p>Un año después del inicio de la pandemia y del confinamiento domiciliario continúan las colas de decenas de personas frente a comedores sociales, ONGs o parroquias. En Madrid, en el año del COVID, Cáritas y la Fundación Madrina, han pasado de atender a 400 personas al mes a 4.000 al día.</p>
                                    <form style="margin-left:80%" action="https://www.rtve.es/noticias/20210315/se-mantienen-colas-hambre-madrid-tras-pandemia/2082260.shtml">
                                        <button type="submit" class="btn btn-outline-info">Leer noticia</button>
                                    </form><br>

                                </div>
                                <div class="col-3" style="margin-top: 4%">
                                    <img src="imagenes/noticia3.png" alt="esperando a recoger comida" width="100%">
                                </div>
                            </div>
                        </div>
                        <div class="col-12"><br></div>
                        <div class="col-12" style="background-color:beige;border-top: 3px solid cadetblue; border-bottom: 3px solid cadetblue;border-left: 3px solid cadetblue; border-right: 3px solid cadetblue;">
                            <div class="row">
                                <div class="col-3" style="margin-top: 4%">
                                    <img src="imagenes/noticia2.jfif" alt="mujer en la calle" width="100%">
                                </div>
                                <div class="col-9">
                                    <h3 style="color: #116272; margin-top:2%; ">Vergüenza, frustración y sueños en las ‘líneas del hambre’ del Madrid.</h3>
                                    <p>Aunque su rostro está cubierto con una máscara negra, Rita Carrasco todavía usa lápiz labial rojo brillante. Pero su sonrisa fácil se desvaneció cuando tuvo que unirse a las “líneas de hambre” de Madrid para obtener ayuda alimentaria.</p>
                                    <form style="margin-left:80%" action="https://radiocentro977.com/verguenza-frustracion-y-suenos-en-las-lineas-del-hambre-del-madrid/">
                                        <button type="submit" class="btn btn-outline-info">Leer noticia</button>
                                    </form><br>
                                </div>
                            </div>

                        </div>
                        <div class="col-12"><br></div>

                        <div class="col-12" style="background-color:beige;border-top: 3px solid cadetblue; border-bottom: 3px solid cadetblue;border-left: 3px solid cadetblue; border-right: 3px solid cadetblue;">
                            <div class="row">
                                <div class="col-9" style="margin-top: 2%">
                                    <h3 style="color: #116272; margin-top:2%; ">Así fueron los días que llevaron a España al confinamiento</h3>
                                    <p>El 13 de marzo de 2020 el Gobierno declara el estado de alarma en España, que entra en vigor el día 14 y llevó al confinamiento domiciliario de todo el país para frenar la transmisión de la COVID-19. RTVE.es recopila los acontecimientos más destacados de la narración minuto a minuto que hizo en aquellos días que dieron paso a la experiencia directa de la pandemia en nuestras vidas. Volver la vista atrás y repasar lo sucedido entonces nos muestra con perspectiva dónde estamos y lo que entonces desconocíamos de una pandemia que solo ahora con la vacuna se empieza a doblegar. Y proyectamos la mirada al día de hoy, a la situación un año después, con varios reportajes y análisis de cómo ha sido este tiempo que tanto nos ha cambiado.</p>
                                    <form style="margin-left:80%" action="https://www.rtve.es/noticias/20210313/repaso-cronologia-ano-estado-alarma-espana-covid/2081113.shtml">
                                        <button type="submit" class="btn btn-outline-info">Leer noticia</button>
                                    </form><br>

                                </div>
                                <div class="col-3" style="margin-top: 10%">
                                    <img src="imagenes/noticia1.jfif" alt="imagen de un hospital" width="100%">
                                </div>
                            </div>
                        </div>
                        <div class="col-12"><br></div>
                    </div>
                    <!--acaba el global-->
                </div>


            </div>
            <div class="col-1"></div>
        </div>
    </div>
<!--foooter-->
        <div class="row foot p-3 mt-5 pie">
            <div class="col"></div>
            <div class="col-6 text-center">

                <p>Web site realizada por Tamara Alonso Rodrigo</p>
            </div>
            <div class="col"></div>
        </div>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>
