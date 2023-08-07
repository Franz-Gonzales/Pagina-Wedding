<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>

    <!-- fuente impresionante enlace cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="./css/style.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

</head>

<body>

    <div class="container">
        <!-- para referenciar header.php y css -->
        <?php @include 'header.php';?>

        <!-- SECTION DE INICIO - HOME  -->
        <section class="home">
            <!-- AGREGAMOS EL ESTILOSWIPER DE LA DOCUMENTACION DE SU PAGINA -->
            <div class="swiper home-slider">
                <div class="swiper-wrapper w">
                    <div class="swiper-slide slide" style="background: url(images/pareja-boda2.jpg) no-repeat; background-size: cover;
    background-position: center;">
                        <div class="content">
                            <h3>Planifica tu boda</h3>
                            <p>Te contamos como organizar cada detalle de tu boda, esta es la lista de tareas más
                                completa para organizar la boda de tus sueños. Desde un año antes de la ceremonia hasta
                                el mismo día del enlace ¡Soluciona todas tus dudas!</p>
                            <a href="about.php" class="btn">discubrir más</a>
                        </div>
                    </div>
                    <div class="swiper-slide slide" style="background: url(images/pareja-boda5.jpg) no-repeat; background-size: cover;
    background-position: center;">
                        <div class="content">
                            <h3>Planifica tu boda</h3>
                            <p>Te contamos como organizar cada detalle de tu boda, esta es la lista de tareas más
                                completa para organizar la boda de tus sueños. Desde un año antes de la ceremonia hasta
                                el mismo día del enlace ¡Soluciona todas tus dudas!</p>
                            <a href="about.php" class="btn">discubrir más</a>
                        </div>
                    </div>
                    <div class="swiper-slide slide" style="background: url(images/pareja-boda4.jpg) no-repeat; background-size: cover;
    background-position: center;">
                        <div class="content">
                            <h3>Planifica tu boda</h3>
                            <p>Te contamos como organizar cada detalle de tu boda, esta es la lista de tareas más
                                completa para organizar la boda de tus sueños. Desde un año antes de la ceremonia hasta
                                el mismo día del enlace ¡Soluciona todas tus dudas!</p>
                            <a href="about.php" class="btn">discubrir más</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>



        <!-- SECTION DE SERVICIOS - ABOUT-->
        <section class="services">
            <h1 class="heading">Nuestros Servicios</h1>
            <div class="swiper service-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide">
                        <img src="images/novia-service2.jpg" alt="">
                        <div class="content">
                            <h3>Fotografía</h3>
                            <p>Queremos compartir aquí nuestros recientes trabajos como fotógrafo de bodas en la ciudad
                                de Santa Cruz y en Bolivia. Servicio profesional para bodas y eventos sociales para
                                cualquier ciudad de Bolivia.</p>
                            <a href="about.php" class="btn">Sobre nosotros</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="images/boda-register.jpg" alt="">
                        <div class="content">
                            <h3>Registro de bodas</h3>
                            <p>Queremos compartir aquí nuestros recientes trabajos como fotógrafo de bodas en la ciudad
                                de Santa Cruz y en Bolivia. Servicio profesional para bodas y eventos sociales para
                                cualquier ciudad de Bolivia.</p>
                            <a href="about.php" class="btn">Sobre nosotros</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="images/boda-invitados.jpeg" alt="">
                        <div class="content">
                            <h3>Lista de invitados</h3>
                            <p>Queremos compartir aquí nuestros recientes trabajos como fotógrafo de bodas en la ciudad
                                de Santa Cruz y en Bolivia. Servicio profesional para bodas y eventos sociales para
                                cualquier ciudad de Bolivia.</p>
                            <a href="about.php" class="btn">Sobre nosotros</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="images/pastel-boda.jpeg" alt="">
                        <div class="content">
                            <h3>Pastel de boda</h3>
                            <p>Queremos compartir aquí nuestros recientes trabajos como fotógrafo de bodas en la ciudad
                                de Santa Cruz y en Bolivia. Servicio profesional para bodas y eventos sociales para
                                cualquier ciudad de Bolivia.</p>
                            <a href="about.php" class="btn">Sobre nosotros</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="images/ceremonia-boda.jpg" alt="">
                        <div class="content">
                            <h3>Ceremonia de la boda</h3>
                            <p>Queremos compartir aquí nuestros recientes trabajos como fotógrafo de bodas en la ciudad
                                de Santa Cruz y en Bolivia. Servicio profesional para bodas y eventos sociales para
                                cualquier ciudad de Bolivia.</p>
                            <a href="about.php" class="btn">Sobre nosotros</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="images/cena-boda..jpg" alt="">
                        <div class="content">
                            <h3>Buena cena</h3>
                            <p>Queremos compartir aquí nuestros recientes trabajos como fotógrafo de bodas en la ciudad
                                de Santa Cruz y en Bolivia. Servicio profesional para bodas y eventos sociales para
                                cualquier ciudad de Bolivia.</p>
                            <a href="about.php" class="btn">Sobre nosotros</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <?php @include 'footer.php';?>

    </div>


    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="./js/script.js"></script>
</body>

</html>