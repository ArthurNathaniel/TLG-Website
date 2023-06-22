<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Social | TLG Mining</title>
    <?php include 'cdn.php'; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="guidelines-and-associations.css">
</head>

<body>

    <?php include 'navbar.php'; ?>
    <section>
        <div class="swiper  mySwiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="./images/home-one.jpg" alt="">
                    <div class="swiper-text">
                        <h4>Social</h4>
                    </div>
                </div>

            </div>
    </section>

    
    <section class="mt-5">
        <div class="guidelines">
            <h3>Voluntary Mindset </h3>
            <p>
                TLG Trans Mining is committed to providing sustainable benefits to local communities nearest to our
                operations, working in partnership with governments, local businesses and NGOs to support meaningful
                and outcome-focused initiatives. We recognize that social investment – including community investment,
                community development and capacity building – is an important benefit that mining operations can provide
                in partnership with other local, regional and national organizations and governments.
                <br>
                Our approach is to build strong relationships with all of our stakeholders; uphold fundamental human
                rights; invest in meaningful community projects and sustainable development; and respect cultures,
                customs and values, while engaging in open and inclusive dialogue.
            </p>
        </div>
    </section>


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