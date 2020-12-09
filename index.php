<!DOCTYPE html>

<html>
    <head>
        <title>ArticDev Shop</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="appweb/css/styles.css">
        <script src="https://kit.fontawesome.com/791abd0481.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
    </head>

    <body>
        <?php require_once "appweb/inc/initialconfig.php";?>
        <?php include "appweb/mod/header.php" ?>
        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="appweb/images/promo2.jpg" style="width:1200px; height: 450px;">
            </div>

            <div class="mySlides fade">
                <img src="appweb/images/promo1.jpg" style="width:1200px; height: 450px;">
            </div>

            <div class="mySlides fade">
                <img src="appweb/images/promo3.jpg" style="width:1200px; height: 450px;">
            </div>

        </div>
        <br>

        <div class="punto">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        <div>
            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis totam voluptatibus excepturi eum corrupti est neque iure veritatis harum modi aliquam non porro nesciunt nostrum, repudiandae mollitia quisquam. Quidem, ea!</span><span>Ut assumenda temporibus nisi vero odit quae, numquam laudantium, modi corrupti totam ipsam optio sequi quaerat! Perspiciatis ullam totam voluptates, voluptatum quisquam quaerat, a tempora inventore officiis perferendis, ea soluta.</span></p>
        </div>
        <div class="contenedor">
            <div class="img-accordion">
                <div class="img img1">
                    <p>nike potencial 3</p>
                </div>
                <div class="img img2">
                    <p>air jordan 1</p>
                </div>
                <div class="img img3">
                    <p>Air jordan 7 Retro GC</p>
                </div>
                <div class="img img4">
                    <p>air jordan 5</p>
                </div>
                <div class="img img5">
                    <p>nike air max</p>
                </div>
            </div>
        </div>

        <script src="appweb/js/carrusel.js"></script>
        <?php include "appweb/mod/footer.php";?>
        <script src="https://kit.fontawesome.com/791abd0481.js" crossorigin="anonymous"></script>
    </body>
</html>