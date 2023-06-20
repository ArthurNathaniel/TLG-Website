<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | TLG Mining</title>
    <?php include 'cdn.php'; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include 'navbar.php'; ?>
    <section>
        <div class="swiper  mySwiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="./images/home-one.jpg" alt="">
                    <div class="swiper-text">
                        <h1>A Strong Mining Company With Results</h1>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="./images/home-two.jpg" alt="">
                    <div class="swiper-text">
                        <h1>A Diversified Gold Mining Company</h1>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="./images/home-three.jpg" alt="">
                    <div class="swiper-text">
                        <h1>A Diversified Gold Mining Company</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="home-grid">
            <div class="home">
                <h1>Welcome to TLG Mining</h1>
                <p>
                    Tlg Mining is a company that provides services to the mining companies and organizations,
                    that takes contracts from mining agents. We provide haulage services and hire excavators
                    to the industry.
                </p>
                <div class="whole">
                    <div class="one">
                        <h1><i class="fas fa-id-card"></i></h1>

                        <p>
                            Great Services & A Licensed Company
                        </p>

                    </div>
                    <div class="one">
                        <h1><i class="fas fa-head-side-mask"></i></h1>
                        <br>
                        <p>Tlg Mining's COVID-19
                            Readiness & Response
                            <br>
                            Wear Nose Mask
                        </p>

                    </div>
                    <div class="one">
                        <h1><i class="fas fa-hand-holding-water"></i></h1>
                        <p>
                            Wash your Hands regularly
                            Observe Social Distancing
                        </p>
                    </div>
                </div>
            </div>
            <div class="home ani">
                <video src="./images/gold.mp4" width="100%" height="100%" controls>
                    Your browser does not support the video tag.
                </video>

            </div>
        </div>
    </section>

    <section>
        <div class="mission-bg">
            <h1 class="text-center">Our Mission And Goals</h1>
            <div class="card-grid">
                <div class="card">
                    <img class="card-img-top" src="images/card-one.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">We provide accurate plan and engagement with you </h4>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="images/card-two.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">We communicate what our client expect from us </h4>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="./images/card-three.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">We will be available when you need us </h4>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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