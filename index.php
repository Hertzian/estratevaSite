<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Estrateva | Consultores</title>    
</head>
<body>
<?php

function fvalidar(){

    $datos = trim($datos);
    $datos = stripcslashes($datos);
    $datos = htmlspecialchars($datos);

}

$nombre = $email = $telefono = $mensaje = $errNombre = $errEmail = $errTelefono = $errMensaje = "";

if($_SERVER['REQUEST_METHOD'] = 'POST'){

    if(empty($_POST['nombre'])){

        $errNombre = 'Se requiere nombre';

    }else{

        $nombre = fvalidar($_POST['nombre']);
        if(!preg_match("#^[a-zA-Z ]*$#", $nombre)){

            $errNombre = 'Solo se permiten letras y espacios en blanco';

        }

    }

    if(empty($_POST['email'])){

        $errEmail = 'Se requiere email';

    }else{

        $email = fvalidar($_POST['email']);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

            $errEmail = 'El formato de email es incorrecto';

        }

    }

    if(empty($_POST['telefono'])){

        $errTelefono = 'Se requiere teléfono';

    }else{

        $telefono = fvalidar($_POST['telefono']);
        if(!preg_match("#^[0-9]*$#", $telefono)){

            $errTelefono = 'Solo se permiten numeros y espacios en blanco';

        }

    }

    if(empty($_POST["mensaje"])){

        $errMensaje = "Escribe un mensaje";

    }else{

        $mensaje = fvalidar($_POST["mensaje"]);
        $mensaje = wordwrap($mensaje, 70, "\r\n");

    }

    //Para enviar una vez validado todo
    if($errNombre == '' && $errEmail == '' && $errTelefono == '' && $errMensaje == ''){

        $cuerpoMensaje = '';
        unset($_POST['submit']);
        $success = 'Verifica tus datos';

        foreach($_POST as $key => $value){

            $cuerpoMensaje .= "$key : $value \n";

        }

        $para = 'tallitosan@gmail.com';
        $subject = 'Formulario Estrateva.com';

        if(mail($para, $subject, $cuerpoMensaje)) {
            
            $success = 'Gracias por contactarnos';

            $nombre = $email = $telefono = $mensaje = '';

        }

    }    

}

?>


    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">

        <div class="container">

            <a href="#" class="navbar-brand"><img src="img/estrateva_wt_sl.png" width="120px"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Menu de Navegación">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbar">
                <ul id="menu" class="navbar-nav mr-auto ">
                    <li class="nav-item">
                        <a href="#somos" class="nav-link">SOMOS</a>
                    </li>
                    <li class="nav-item">
                        <a href="#servicios" class="nav-link">SERVICIOS</a>
                    </li>
                    <li class="nav-item">
                        <a href="#metodologia" class="nav-link">METODOLOGÍA</a>
                    </li>
                    <li class="nav-item">
                        <a href="#valor" class="nav-link">VALOR</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contacto" class="nav-link">CONTACTO</a>
                    </li>                    
                </ul>
            </div>                
            
        </div>
    </nav>

    <!-- background yellow -->    
    <section>
        <div class="parallax"></div>

        <div class="estratevaBK py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col text-center"><img class="img-fluid" src="img/estrateva_wt.png" alt=""></div>
                </div>
            </div>
        </div>
           
        <div class="parallax"></div>

    </section>

    <!-- seccion somos -->
    <!-- SOMOS -->
    <section id="somos">

        <div class="container py-5">
            <div class="row py-5">
                <div class="col-md-4 col-sm-12 align-self-center text-center"><img src="img/estrateva_bk.png" class="img-fluid " alt=""></div>
                <div class="col-md-8 col-sm-12 align-self-center pl-5 pt-5">
                    <p class="text-left">Somos expertos en lograr que alcances tu potencial y los objetivos de tu empresa, analizamos tus necesidades y te proponemos soluciones personalizadas.</p>
                    <p class="text-left">Tenemos más de 15 años de experiencia diseñando estrategias creativas con metodologías efectivas que han logrado resultados extraordinarios en la industria.</p>
                    <p class="text-left">Disfrutamos lo que hacemos, y lo hacemos con gran entusiasmo, creemos firmemente que la única manera de lograr tus objetivos es volverlos nuestros.</p>
                </div>
            </div>
        </div>

    </section>

    <!-- seccion servicios -->
    <!-- SERVICIOS -->
    <section id="servicios">
        <div class="estratevaBK py-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="text-light">SERVICIO<span style="color: #FFCE02">S</span></h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- despliegue de seccion servicios -->
        <div class="container">
            <div class="row py-5 justify-content-between">

                <div class="col-sm-12 col-md-6 col-lg-3 text-center">

                    <img class="img-fluid circ" src="img/foco.png" alt="">

                    <h4>ESTRATÉGICOS</h4>
                    <p class="text-left">Analizamos los productos, procesos, tendencias de mercado, competencia y construimos en conjunto las estrategias que incrementan tu rentabilidad.</p>
                    
                    <ul class="text-left">
                        <li><span style="color: #FFCE02">•</span> Objetivos Directivos.</li>
                        <li><span style="color: #FFCE02">•</span> Costeo y estrategia de Precios.</li>
                        <li><span style="color: #FFCE02">•</span> Planeación estratégica.</li>
                        <li><span style="color: #FFCE02">•</span> Revenue management.</li>
                        <li><span style="color: #FFCE02">•</span> Posicionamiento de marca.</li>
                        <li><span style="color: #FFCE02">•</span> Identidad Corporativa.</li>
                    </ul>
                        
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 text-center">

                    <img class="img-fluid circ" src="img/grafica.png" alt="">

                    <h4>VENTAS</h4>
                    <p class="text-left">Definimos la mejor forma de comercializar tus productos o servicios, alineándolos a tu estrategia comercial.</p>
                    
                    <ul class="text-left">
                        <li><span style="color: #FFCE02">•</span> Diseño de nuevos productos.</li>
                        <li><span style="color: #FFCE02">•</span> Análisis de rentabilidad de productos existentes.</li>
                        <li><span style="color: #FFCE02">•</span> Mejora de Estrategias comerciales.</li>
                        <li><span style="color: #FFCE02">•</span> Análisis de canales de venta.</li>
                        <li><span style="color: #FFCE02">•</span> Desarrollo de negocios.</li>
                    </ul>
                    
                        
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 text-center">
                    
                    <img class="img-fluid circ" src="img/gears.png" alt="">

                    <h4>FIDELIZACIÓN</h4>
                    <p class="text-left">Conseguimos que tus clientes te prefieran y recomienden, te proponemos las mejores opciones en:</p>
                    
                    <ul class="text-left">
                        <li><span style="color: #FFCE02">•</span> Programas de Lealtad.</li>
                        <li><span style="color: #FFCE02">•</span> Cultura de Servicio.</li>
                        <li><span style="color: #FFCE02">•</span> CRM.</li>
                        <li><span style="color: #FFCE02">•</span> Diseño y evaluación de promociones.</li>
                        <li><span style="color: #FFCE02">•</span> Ciclo de vida del Cliente.</li>
                        <li><span style="color: #FFCE02">•</span> Estrategias de comunicación.</li>
                    </ul>                    
                        
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 text-center">

                    <img class="img-fluid circ" src="img/tag.png" alt="">

                    <h4>ESTANDARIZACIÓN</h4>
                    <p class="text-left">Cimentamos la base para el continuo crecimiento de tu negocio, dándote herramientas para la fácil evaluación y toma de decisiones.</p>

                    <ul class="text-left">
                        <li><span style="color: #FFCE02">•</span> KPIS.</li>
                        <li><span style="color: #FFCE02">•</span> Paneles de Control.</li>
                        <li><span style="color: #FFCE02">•</span> Mejora y optimización de Procesos.</li>
                        <li><span style="color: #FFCE02">•</span> Estandarización Operativa.</li>
                        <li><span style="color: #FFCE02">•</span> Procedimientos, manuales operativos e instructivos de trabajo.</li>
                    </ul>                    
                        
                </div>
            </div>
        </div>
    </section>


    <!-- seccion metodologia -->
    <!-- METODOLOGIA -->
    <section id="metodologia">
        <div class="estratevaBK py-5">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h1 class="text-light">METODOLOGÍ<span style="color: #FFCE02">A</span></h1>
                        </div>
                    </div>
                </div>
            </div>

        <!-- despliegue de seccion metodologia -->
        <div class="container py-5">
            <div class="row justify-content-between py-5 text-center">
                <div class="col-md-12 col-lg-2 align-items-center px-2">
                    <img class="img-fluid" src="img/h.png" alt="">
                        <ul class="text-center">
                            <li>•Amenazas.</li>
                            <li>•Oportunidades.</li>
                            <li>•Segmentos no atendidos.</li>                        
                        </ul>
                </div>
                <div class="col-md-12 col-lg-2 align-items-center px-2">
                    <img class="img-fluid" src="img/a.png" alt="">
                        <ul class="text-center">
                            <li>•Benchmark.</li>
                            <li>•Encuestas.</li>
                            <li>•Evaluación de procesos.</li>
                            <li>•Revisión de información</li>
                        </ul>
                </div>           
            
                <div class="col-md-12 col-lg-2 align-items-center px-2">
                    <img class="img-fluid" src="img/c.png" alt="">
                        <ul class="text-center">
                            <li>•Caso de negocio.</li>
                            <li>•Desarrollo de Productos.</li>
                            <li>•Posicionamiento.</li>
                            <li>•Propuesta Única.</li>
                        </ul>
                </div>
                <div class="col-md-12 col-lg-2 align-items-center px-2">
                    <img class="img-fluid" src="img/e.png" alt="">
                        <ul class="text-center">
                            <li>•Ejecución de Promociones.</li>
                            <li>•Implementación de Proyectos.</li>
                            <li>•Lanzamiento de Productos.</li>
                        </ul>
                </div>
            
                <div class="col-md-12 col-lg-2 align-items-center px-2">
                    <img class="img-fluid" src="img/r.png" alt="">
                        <ul class="text-center">
                            <li>•Balance Score Card.</li>
                            <li>•KPIS.</li>
                            <li>•Plan de Seguimiento.</li>
                        </ul>
                </div>            
            </div>            
            
        </div>
    </section>

    <section id="valor">
        <div class="estratevaBK py-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="text-light">PROPUESTA<span style="color: #FFCE02">S</span> DE VALO<span style="color: #FFCE02">R</span></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-around py-5">
                <div class="col-6">
                    <h1 class="h3 pb-5"><span style="color: #FFCE02">1.</span>Trabajamos para incrementar tus ganancias.</h1>
                    <h1 class="h3 pb-5"><span style="color: #FFCE02">2.</span>Compartimos tu sentido de urgencia.</h1>
                    <h1 class="h3 pb-5"><span style="color: #FFCE02">3.</span>Te guiamos paso a paso para lanzar tu proyecto.</h1>
                    <h1 class="h3 pb-5"><span style="color: #FFCE02">4.</span>Hacemos que las cosas sucedan.</h1>
                    <h1 class="h3 pb-5"><span style="color: #FFCE02">5.</span>Cuidamos la excelencia en los detalles.</h1>
                    <h1 class="h3 pb-5"><span style="color: #FFCE02">6.</span>Si incumplimos lo pactado en el contrato, el servicio es gratis.</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="estratevaBK py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col text-center"><img class="img-fluid" src="img/estrateva_wt.png" alt=""></div>
            </div>
        </div>
    </div>

    <section id="contacto">
        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    
                    <p class="text-left text-secondary">
                        (33) 1407-6009 <br>
                        contacto@estrateva.com.mx</p>
                    <hr>

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group row mt-3">
                            <div class="col-sm-12 col-md-4">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                            </div>
                        
                            <div class="col-sm-12 col-md-4">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" placeholder="email" name="email">
                            </div>
                        
                            <div class="col-sm-12 col-md-4">
                                <label class="text-left" for="telefono">Teléfono:</label>
                                <input type="text" class="form-control" placeholder="teléfono" name="telefono">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <label for="mensaje"> Mensaje:</label>
                                <textarea class="form-control" name="mensaje" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>

                        <input class="btn btn-warning text-light mb-3"type="submit" value="Enviar">
                        
                    </form>
                </div>
                
            </div>
        </div>
    </section>

    <footer class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col text-center"><p class="h5 text-light">&copy Strateva 2018</p></div>
            </div>
        </div>
    </footer>

    <script src="js/jquery-3.3.1.min.js"></script>    
    <script src="js/popper.js"></script>    
    <script src="js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
    
        $("#menu a").click(function(e){

            e.preventDefault();

            // console.log($("#footer").offset());

            $("html, body").animate({

                scrollTop: $($(this).attr('href')).offset().top

            });

            return false;

        });

        });
    </script>
</body>
</html>