<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us | TLG Mining</title>
    <?php include 'cdn.php'; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">
</head>

<body>

    <?php include 'navbar.php'; ?>

    <section>
        <div class="swiper  mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/contact.png" alt="">
                    <div class="swiper-text">
                        <h4> Contact Us</h4>
                    </div>
                </div>
            </div>
    </section>

    <section>
        <div class="grid-container">
            <div class="contt">
                <h1><i class="fas fa-map-marker-alt"></i> </h1>
                <p>Kumasi</p>
            </div>
            <div class="contt">
                <h1><i class="far fa-envelope"></i></h1>
                <p>info@tlgghana.com</p>
            </div>
            <div class="contt">
                <h1><i class="fas fa-phone"></i></h1>
                <p><a href="tel:0247094575" style="color: #000; text-decoration:none;">0247094575</a></p>
            </div>
        </div>
    </section>

    <?php include 'contact-form.php'; ?>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->

    <script>
        var swiper = new Swiper(".mySwiper", {
            autoplay: true,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            }

        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
     crossorigin="anonymous"></script>
     
</body>

</html>