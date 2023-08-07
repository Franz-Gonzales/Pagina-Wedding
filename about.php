<!-- ACERCA DE  -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

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

        <section class="about">
            <img src="./images/pareja-fyc.png" alt="">
            <h3>Sobre nosotros</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam dolorum expedita consequatur commodi
                officiis in, aperiam est sint id aspernatur fugiat odio voluptas porro quo exercitationem saepe tempore
                ipsa! Dicta?</p>
            <a href="contact.php" class="btn">Contact us</a>
        </section>

        <!-- SECTION EQUIPO - TEAM -->
        <section class="team">
            <h1 class="heading">Nuestro Equipo</h1>
            <div class="box-container">
                <div class="box">
                    <img src="./images/priscila.jpeg" alt="">
                    <h3>priscila elizabeth</h3>
                    <p>Planificadora de boda</p>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-tiktok"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="./images/planifacador.jpeg" alt="">
                    <h3>David Tutera</h3>
                    <p>Planificador de boda</p>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-tiktok"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="./images/mar-lucas.jpg" alt="">
                    <h3>Mar Lucas</h3>
                    <p>Planificadora de boda</p>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-tiktok"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="./images/planificador2.png" alt="">
                    <h3>Marcos Piero</h3>
                    <p>Planificador de boda</p>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-tiktok"></a>
                    </div>
                </div>
            </div>
        </section>

        <?php @include 'footer.php';?>

    </div>


    <!-- swiper js link  -->
    <script src=" https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="./js/script.js"></script>
</body>

</html>