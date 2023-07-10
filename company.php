<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Company | TLG Mining</title>
    <?php include 'cdn.php'; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="company.css">
</head>

<body>

    <?php include 'navbar.php'; ?>
    <section>
        <div class="swiper  mySwiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="./images/about-bg.png" alt="">
                    <div class="swiper-text">
                        <h4>Our Company</h4>
                    </div>
                </div>

            </div>
    </section>
    <section>
        <div class="top-sub">
            <h1 class="text-center">Historical Highlights</h1>
            <p>
                The company started from a humble beginning with one tipper truck which was hired to mining service
                contractors. Hiring service was rendered to a small scale mining firm, E K Agyemang Mining Company
                Limited being the first Mining Firm the company worked for.
                <br>
                We have developed to a level where we now own Twelve Tipper Trucks ,Gold Washing Plant ,One Dozer ,
                One Grader and six excavators which are hired to companies working in the mining industry.
                <br>
                We are currently involved in small scale mining activities at Amansie Central District in
                Ashanti Region.
            </p>
        </div>
    </section>
    <section>


        <div class="company-grid">
            <div class="box">
                <h4>Objectives</h4>

                <p>
                    Mining,
                    Mining Support Services,
                    Transport Services,
                    Roads & Building Construction Services,
                    Civil Engineering Services,
                    Private Security Services,
                    Hospitality Services (Hotel),
                    Imports & Exports of General Goods,
                    Trading in General Goods
                </p>
            </div>
            <div class="box hh">
                <hr>
                <div class="circle">
                    II
                </div>
            </div>
            <div class="box company-one" style="background-image: url(./images/obj.jpg);">
                <!-- <img src="images/company-one.jpg" alt=""> -->
            </div>


        </div>

        <div class="company-grid">
            <div class="box company-one" style="background-image: url(./images/card-two.jpg);">
                <!-- <img src="images/company-one.jpg" alt=""> -->
            </div>
            <div class="box hh">
                <hr>
                <div class="circle">
                    III
                </div>
            </div>
            <div class="box">
                <h4>Vision</h4>
                <p>

                    To Become a World Class Standard Company
                </p>
            </div>
        </div>


        <div class="company-grid">
            <div class="box">
                <h4>Mission</h4>
                <p>
                    To deploy the best technology for the efficient and timely execution of projects
                    and to sustain the interest of all stakeholders through
                    continuous engagements and the adoption of best business practices
                    for work process improvements.
                </p>
            </div>
            <div class="box hh">
                <hr>
                <div class="circle">
                    IV
                </div>
            </div>
            <div class="box company-one" style="background-image: url(./images/card-one.jpg);">
                <!-- <img src=" images/company-one.jpg" alt=""> -->
            </div>


        </div>

        <div class="company-grid">
            <div class="box company-one" style="background-image: url(./images/card-three.jpg);">
                <!-- <img src=" images/company-one.jpg" alt=""> -->
            </div>
            <div class="box hh">
                <hr>
                <div class="circle">
                    V
                </div>
            </div>
            <div class="box">
                <h4>Core Values</h4>
                <p>
                    Services Efficiency,
                    Environmental Consciousness,
                    Safety,
                    Integrity,
                    Community.
                </p>
            </div>
        </div>


        <div class="company-grid">
            <div class="box">
                <h4>Business Goals & Objectives</h4>
                <p>
                    To provide top quaility services to all our clients
                </p>
            </div>
            <div class="box hh">
                <hr>
                <div class="circle">
                    VI
                </div>
            </div>
            <div class="box company-one" style="background-image: url(./images/value.jpg);">
                <!-- <img src=" images/company-one.jpg" alt=""> -->
            </div>


        </div>
        <div class="company-grid">
            <div class="box company-one" style="background-image: url(./images/bus.jpg);">
                <!-- <img src=" images/company-one.jpg" alt=""> -->
            </div>
            <div class="box hh">
                <hr>
                <div class="circle">
                    VII
                </div>
            </div>
            <div class="box">
                <h4>Business Strategy </h4>
                <p>
                    To employ the best Human Resource in the industry
                    and to use the best technological approach to achieve the best results
                </p>
            </div>
        </div>


        <div class="company-grid">
            <div class="box">
                <h4>Economic Intent</h4>
                <p>
                    To operate as a business entity with the aim of making profits to
                     plough back the profits into the business to grow the business to 
                     become a world class standard business
                </p>
            </div>
            <div class="box hh">
                <hr>
                <div class="circle">
                    VIII
                </div>
            </div>
            <div class="box company-one" style="background-image: url(./images/last.jpg);">
                <!-- <img src=" images/company-one.jpg" alt=""> -->
            </div>


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