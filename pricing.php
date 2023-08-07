<!-- FIJACIÓN DE PRECIOS -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Princing</title>

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

        <section class="pricing">
            <h1 class="heading">Nuestros precios</h1>

            <div class="box-container">
                <div class="box">
                    <h3>Plan básico</h3>
                    <div class="price">$250/-</div>
                    <div class="list">
                        <p><i class="fas fa-check"></i> Fotografía</p>
                        <p><i class="fas fa-check"></i> Maquillaje de soborno</p>
                        <p><i class="fas fa-check"></i> Ceremonia de la boda</p>
                        <p><i class="fas fa-check"></i> Comidas & Bebidas</p>
                        <p><i class="fas fa-check"></i> Invitaciones de invitados</p>
                    </div>
                    <a href="contact.php" class="btn">Elegir plan</a>
                </div>

                <div class="box">
                    <h3>Plan premium</h3>
                    <div class="price">$650/-</div>
                    <div class="list">
                        <p><i class="fas fa-check"></i> Fotografía</p>
                        <p><i class="fas fa-check"></i> Maquillaje de soborno</p>
                        <p><i class="fas fa-check"></i> Ceremonia de la boda</p>
                        <p><i class="fas fa-check"></i> Comidas & Bebidas</p>
                        <p><i class="fas fa-check"></i> Invitaciones de invitados</p>
                    </div>
                    <a href="contact.php" class="btn">Elegir plan</a>
                </div>

                <div class="box">
                    <h3>Plan definitivo</h3>
                    <div class="price">$1250/-</div>
                    <div class="list">
                        <p><i class="fas fa-check"></i> Fotografía</p>
                        <p><i class="fas fa-check"></i> Maquillaje de soborno</p>
                        <p><i class="fas fa-check"></i> Ceremonia de la boda</p>
                        <p><i class="fas fa-check"></i> Comidas & Bebidas</p>
                        <p><i class="fas fa-check"></i> Invitaciones de invitados</p>
                    </div>
                    <a href="contact.php" class="btn">Elegir plan</a>
                </div>
            </div>
        </section>


        <!-- SECTION RESEÑAS  -->
        <section class="reviews">
            <h1 class="heading">Clientes felices</h1>

            <div class="swiper reviews-slider">
                <div class="swiper-wrapper">

                    <div class="swiper-slide slide">
                        <img src="./images/cliente-1.jpeg" alt="">
                        <h3>Juan Perez</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae soluta harum recusandae obcaecati amet culpa voluptatum vitae, aliquid doloribus dolorum consequuntur expedita doloremque, ullam deserunt, laboriosam tempore optio. Fugiat, reprehenderit.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="./images/client-2.jpg" alt="">
                        <h3>Mar Lucas</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae soluta harum recusandae obcaecati amet culpa voluptatum vitae, aliquid doloribus dolorum consequuntur expedita doloremque, ullam deserunt, laboriosam tempore optio. Fugiat, reprehenderit.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="./images/client-3.png" alt="">
                        <h3>Juan Perez</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae soluta harum recusandae obcaecati amet culpa voluptatum vitae, aliquid doloribus dolorum consequuntur expedita doloremque, ullam deserunt, laboriosam tempore optio. Fugiat, reprehenderit.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="./images/client-5.jpeg" alt="">
                        <h3>Juan Perez</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae soluta harum recusandae obcaecati amet culpa voluptatum vitae, aliquid doloribus dolorum consequuntur expedita doloremque, ullam deserunt, laboriosam tempore optio. Fugiat, reprehenderit.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="./images/client-6.png" alt="">
                        <h3>Juan Perez</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae soluta harum recusandae obcaecati amet culpa voluptatum vitae, aliquid doloribus dolorum consequuntur expedita doloremque, ullam deserunt, laboriosam tempore optio. Fugiat, reprehenderit.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="./images/client-4.png" alt="">
                        <h3>Juan Perez</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae soluta harum recusandae obcaecati amet culpa voluptatum vitae, aliquid doloribus dolorum consequuntur expedita doloremque, ullam deserunt, laboriosam tempore optio. Fugiat, reprehenderit.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
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