<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Board of Directors | TLG Mining</title>
    <?php include 'cdn.php'; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="boardofdirector.css">
</head>

<body>

    <?php include 'navbar.php'; ?>
    <section>
        <div class="swiper  mySwiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="./images/about.jpg" alt="">
                    <div class="swiper-text">
                        <h4>Board of Directors & Management</h4>
                    </div>
                </div>

            </div>
    </section>

    <section>
        <div class="board-grid">
            <div class="profile">
                <h3>Mr. Sampson Kofi Wiredu</h3>
                <hr>
                <strong>
                    <i>Chief Executive Officer
                    </i>
                </strong>
            </div>
            <div class="profile">
                <h3>Mrs. Mary Wiredu</h3>
                <hr>
                <strong>
                    <i> Director
                    </i>
                </strong>
            </div>
            <div class="profile">
                <h3>Miss Gloria Frimpomaa Wiredu
                </h3>
                <hr>
                <strong>
                    <i>Director
                    </i>
                </strong>
            </div>

            <div class="profile">
                <h3>Miss Esther Boatemaa Wiredu

                </h3>
                <hr>
                <strong>
                    <i>Director
                    </i>
                </strong>
            </div>

            <div class="profile">
                <h3>Nana Yaw Wiredu
                </h3>
                <hr>
                <strong>
                    <i>Director
                    </i>
                </strong>
            </div>
            <div class="profile">
                <h3>
                    Mr. Kwabena Ampong
                </h3>
                <hr>
                <strong>
                    <i>
                        Group General Manager
                    </i>
                </strong>
            </div>

            <div class="profile">
                <h3>
                    Mr. Robert Nfodjo
                </h3>
                <hr>
                <strong>
                    <i>
                        Accountant
                    </i>
                </strong>
            </div>

            <div class="profile">
                <h3>
                    Mr. Robert Nfodjo
                </h3>
                <hr>
                <strong>
                    <i>
                        Mining & Transport Manager
                    </i>
                </strong>
            </div>

            <div class="profile">
                <h3>
                    Mr. Samuel Apesega
                </h3>
                <hr>
                <strong>
                    <i>
                        Geologist
                    </i>
                </strong>
            </div>

            <div class="profile">
                <h3>
                    Mr. Kwame Baah Eshun

                </h3>
                <hr>
                <strong>
                    <i>
                        Architect

                    </i>
                </strong>
            </div>
            <div class="profile">
                <h3>
                    Mr. Patrick Owusu

                </h3>
                <hr>
                <strong>
                    <i>
                        Surveyor

                    </i>
                </strong>
            </div>

            <div class="profile">
                <h3>
                    Nana Kwaku Osei Adjaye


                </h3>
                <hr>
                <strong>
                    <i>
                        Community Liaison Officer

                    </i>
                </strong>
            </div>


            <div class="profile">
                <h3>
                    Mr. Robert Nfodjo


                </h3>
                <hr>
                <strong>
                    <i>
                        Secretary

                    </i>
                </strong>
            </div>

            <div class="profile">
                <h3>
                    W O Osmanu



                </h3>
                <hr>
                <strong>
                    <i>
                        Chief Security

                    </i>
                </strong>
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