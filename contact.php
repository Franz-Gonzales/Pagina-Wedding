<!-- CONECCION CON BASE DE DATOS -->

<?php 

    $conecct = mysqli_connect('localhost', 'root', '', 'wedding_db');

    if(isset($_POST['send'])){

        // declaramos los valores
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $plan = $_POST['plan'];
        $address = $_POST['address'];
        $message = $_POST['message'];

        // insertados los datos 
        $insert = "INSERT INTO `contact_form`(`name`, `email`, `number`, `plan`, `address`, `message`) VALUES ('$name','$email','$number','$plan','$address','$message')";
        
        mysqli_query($conecct, $insert);

        header('location:contact.php');
    }
?>

<!-- CONTACTOS -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

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

        <section class="contact">
            <h1 class="heading">Contacta con nosotros</h1>

            <form action="" method="post">
                <div class="flex">
                    
                    <div class="inputBox">
                        <span>your name</span>
                        <input type="text" placeholder="enter your name" name="name" required>
                    </div>

                    <div class="inputBox">
                        <span>your email</span>
                        <input type="text" placeholder="enter your email" name="email" required>
                    </div>

                    <div class="inputBox">
                        <span>your number</span>
                        <input type="text" placeholder="enter your number" name="number" required>
                    </div>

                    <div class="inputBox">
                        <span>Elegir plan</span>
                        <select name="plan">
                            <option value="basic">Plan básico</option>
                            <option value="premium">Plan premium</option>
                            <option value="ultimate">Plan definitivo</option>
                        </select>
                    </div>

                    <div class="inputBox">
                        <span>your address</span>
                        <textarea name="address" placeholder="enter your address" required cols="30" rows="10"></textarea>
                    </div>

                    <div class="inputBox">
                        <span>your message</span>
                        <textarea name="message" placeholder="enter your message" required cols="30" rows="10"></textarea>
                    </div>
                </div>

                <input type="submit" value="send message" name="send" class="btn">
            </form>
        </section>

        <?php @include 'footer.php';?>

    </div>


    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="./js/script.js"></script>
</body>

</html>