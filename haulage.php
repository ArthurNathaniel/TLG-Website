<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Haulage | TLG Mining</title>
    <?php include 'cdn.php'; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="gold-mining.css">
</head>

<body>

    <?php include 'navbar.php'; ?>
    <section>
        <div class="swiper  mySwiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="./images/home-one.jpg" alt="">
                    <div class="swiper-text">
                        <h4>TLG Transport</h4>
                    </div>
                </div>

            </div>
    </section>


    <section>
        <div class="overviews-grid">
            <div class="overview" style="background-image: url(./images/transport.jpg); height:400px">

            </div>
            <div class=" overviews-text" style="display: flex; flex-direction:column; justify-content:center; align-items:center;">
                <h3 style="color:#970f14;  width:100%">TLG Transport</h3>
                <p>
                    TLG Company Limited has a heavy duty gold mining tracks and machines that is very efficient
                    and is repeared after usage. All our Gold mining machines and tracks are off no fault and is
                    very ready for hiring in a good shape. You will never regret hiring..
                </p>
            </div>
        </div>
    </section>
    <div class="bb-grid">
        <div class="bb">
            <h1><i class="fas fa-bullseye"></i></h1>
            <p>
                We provide accurate plan & engagement with you
            </p>
        </div>
        <div class="bb">
            <h1><i class="fas fa-comment-dots"></i></h1>
            <p>
                We communicate what our client expect from us
            </p>
        </div>
        <div class="bb">
            <h1><i class="fas fa-headset"></i></h1>
            <p>
                We will be available when you need us
            </p>
        </div>
    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>