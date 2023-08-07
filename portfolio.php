<!-- PORTAFOLIO -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <!-- fuente impresionante enlace cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

</head>

<body>

    <div class="container">
        <!-- para referenciar header.php y css -->
        <?php @include 'header.php';?>

        <section class="portfolio">
            <h1 class="heading">Nuestro Poratafolio</h1>
    
            <div class="portfolio-container">

                <a href="./images/portfolio-boda3.jpg" class="box">
                    <div class="image">
                        <img src="./images/portfolio-boda3.jpg" alt="">
                    </div>
                    <h3>Ceremonia de la boda</h3>
                </a>

                <a href="./images/portfolio-boda2.jpeg" class="box">
                    <div class="image">
                        <img src="./images/portfolio-boda2.jpeg" alt="">
                    </div>
                    <h3>Ceremonia de la boda</h3>
                </a>

                <a href="./images/portfolio-boda4.jpg" class="box">
                    <div class="image">
                        <img src="./images/portfolio-boda4.jpg" alt="">
                    </div>
                    <h3>Ceremonia de la boda</h3>
                </a>

                <a href="./images/portfolio-boda.jpg" class="box">
                    <div class="image">
                        <img src="./images/portfolio-boda.jpg" alt="">
                    </div>
                    <h3>Ceremonia de la boda</h3>
                </a>

                <a href="./images/portfolio-boda5.jpg" class="box">
                    <div class="image">
                        <img src="./images/portfolio-boda5.jpg" alt="">
                    </div>
                    <h3>Ceremonia de la boda</h3>
                </a>

                <a href="./images/portfolio-boda6.jpeg" class="box">
                    <div class="image">
                        <img src="./images/portfolio-boda6.jpeg" alt="">
                    </div>
                    <h3>Ceremonia de la boda</h3>
                </a>
            </div>
        </section>
        <?php @include 'footer.php';?>

    </div>

    <!-- Para ver las imagenes en modo galery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="./js/script.js"></script>

    <script>
        lightGallery(document.querySelector('.portfolio .portfolio-container'));
    </script>
</body>

</html>