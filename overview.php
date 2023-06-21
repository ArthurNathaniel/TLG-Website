<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Overview | TLG Mining</title>
    <?php include 'cdn.php'; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="overview.css">
</head>

<body>

    <?php include 'navbar.php'; ?>
    <section>
        <div class="swiper  mySwiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="./images/home-one.jpg" alt="">
                    <div class="swiper-text">
                        <h4>Overview </h4>
                    </div>
                </div>

            </div>
    </section>


    <section>
        <div class="overviews-grid">
            <div class="overview">

            </div>
            <div class=" overviews-text">
                <h3>Our Overview and Strategy</h3>
                <p>
                    As the world’s leading gold company, TLG's strategy is to create value for all shareholders
                    and stakeholders through efforts to: Deliver superior operational execution by ensuring fatality
                    risks are managed at all times with strong leadership and systems, continually improving
                    operational performance, and meeting commitments without fail.
                    <br>
                    TLG Trans Company Limited Sustain a global portfolio of long-life assets by growing margins,
                    Reserves and Resources from profitable expansions, exploration and value accretive investments
                    Lead the gold sector in profitability and responsibility by consistently generating superior
                    returns, demonstrating our values, and leading in environmental, social and governance
                    performance To support this strategy, the Company remains focused on five foundational
                    principles to help guide us in our journey of continuous improvement:
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